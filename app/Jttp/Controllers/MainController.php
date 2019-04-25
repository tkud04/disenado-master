<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class MainController extends Controller {

	protected $helpers; //Helpers implementation
    
    public function __construct(HelperContract $h)
    {
    	$this->helpers = $h;            
    }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$cart = $this->helpers->getCart($user);
		$products = $this->helpers->getProducts(); shuffle($products);
		$trending = []; $bs = []; $os = []; $ss = [];
		
		if(count($products) > 12)
        {
        	$trending = array_slice($products,0,12);
           $bArr = array_slice($products,12); 
        }
        
        else
        {
        	$trending = $products;
        }
		
		shuffle($bArr); 
		$ret = $this->helpers->getSpecials($bArr);
		$bs = $ret['bs']; $ss = $ret['ss']; $os = $ret['os'];
		
		$slideBanner = $this->helpers->getSlideBanner();
		$laneBanner = $this->helpers->getLaneBanner();
		
		$brands = $this->helpers->getBrands();
		
		#dd($slideBanner);
        $displaySize  = $this->helpers->isMobile() ? 3 : 4;
    	return view('index',compact(['cart','user','bs','os','ss','trending','slideBanner','laneBanner','brands','displaySize']));
    }
    
    
    /**
	 * Show the application Umbrella screen to the user.
	 *
	 * @return Response
	 */
	public function getUmbrella()
    {
		$user = null;
		$cart = [];
		
		if(Auth::check())
		{
			$user = Auth::user();
		    $cart = $this->helpers->getCart($user);
    	    return view('cart',compact(['cart','user']));
		}
		return view('umbrella',compact(['cart','user']));
    }
	
	
	/**
	 * Show the application Shop screen to the user.
	 *
	 * @return Response
	 */
	public function getShop()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
    	$ret = $this->helpers->getProducts();
		$cart = $this->helpers->getCart($user);
		 $displaySize  = $this->helpers->isMobile() ? 3 : 4;
		return view('shop',compact(['ret','cart','user','displaySize']));
    }
	
	/**
	 * Show the application Product details screen to the user.
	 *
	 * @return Response
	 */
	public function getProducts($id="")
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		if($id == "")
		{
			return redirect()->intended('shop');
		}

        else
		{
			$p = $this->helpers->getProduct($id);
			$related_products = $this->helpers->getProducts(); shuffle($related_products);
			$cart = $this->helpers->getCart($user);
			return view('product-details',compact(['p','cart','user','related_products']));
		}
		
    	
    }
	
	/**
	 * Show the application Contact screen to the user.
	 *
	 * @return Response
	 */
	public function getContact()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$cart = $this->helpers->getCart($user);
    	return view('contact',compact(['cart','user']));
    }
    /**
	 * Show the application Contact screen to the user.
	 *
	 * @return Response
	 */
	public function getMessage(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$req = $request->all();
		   #dd($req);
           $ret = "";
               
                $validator = Validator::make($req, [
                             'name' => 'required',
                             'email' => 'required|email',
                             'phone' => 'numeric',
                             'message' => 'required'
                   ]);
         
                 if($validator->fails())
                  {
                       $ret = "error";
                 }
                
                 else
                 { 
                 	$email = $req["email"];
                      $name = $req["name"];
                      $phone = isset($req["phone"]) ? $req["phone"] : "unavailable";
                      $msg = $req["message"];
                      
                 	 $em = "kudayisitobi@gmail.com";
                       $s = "New Message from Disenado";
			           $this->helpers->sendEmail($em,$s,['email' => $email,'name' => $name,'phone' => $phone,'msg' => $msg],'emails.msg','view');  
                       $ret = "success";
   					   
                  }       
		
    	echo $ret;
    }
	
	/**
	 * Show the application Cart screen to the user.
	 *
	 * @return Response
	 */
	public function getCart()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		    $cart = $this->helpers->getCart($user);
    	    return view('cart',compact(['cart','user']));
		}
		else
		{
			return redirect()->intended('/');
		}
    }
	
	/**
	 * Show the application Cart screen to the user.
	 *
	 * @return Response
	 */
	public function getAddToCart($id,$qty)
    {
		$user = null;
		
		if(Auth::check())
		{
		$user = Auth::user();
			
		if($id == "")
		{
			$cart = $this->helpers->getCart($user);
			return view('cart','user',compact(['cart','user']));
		}
		
		else
		{
			$qtty = 1;
			if($qty != "") $qtty = $qty;
			$ip = getenv("REMOTE_ADDR");
			$data = ['user_id' => $user->id,'product_id' => $id,'qty' => $qty];
			$status = $this->helpers->addToCart($data);
			Session::flash("add-to-cart-status",$status);
			return redirect()->intended('shop');
		}
		}
		
		else
		{
			Session::flash("cart-status","new-user");
			return redirect()->intended('shop');
		}
		
    	
    }
	
	/**
	 * Show the application Cart screen to the user.
	 *
	 * @return Response
	 */
	public function getRemoveFromCart($id="")
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		if($id == "")
		{
			$cart = $this->helpers->getCart($user);
			return view('cart','user',compact(['cart','user']));
		}
		
		else
		{
			$qty = 1;
			$ip = getenv("REMOTE_ADDR");
			#$data = ['user_id' => $user->id,'product_id' => $id,'qty' => $qty];
			$status = $this->helpers->removeFromCart($id);
			Session::flash("remove-from-cart-status",$status);
			return redirect()->intended('shop');
		}
    }
	
	
	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
    public function postUpdateCart(Request $request)
    {
		$user = null;
		$cart = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
			$cart = $this->helpers->getCart($user);
		}
			
		$req = $request->all();
        
        $validator = Validator::make($req, [
                             'op' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
		 else
		 {
			 $op = $req['op'];
			 
			 if($op == "update")
			 {
				 foreach($cart as $c)
				 {
					 $cname = "ccd-".$c['id'];
					 $nqt = "nqt-".$c['id'];
					 
					 if(isset($req[$cname]))
					 {
						 $this->helpers->updateCart($user,$c['id'],$req[$nqt]);
					 }
				 }
			 }
			 return redirect()->intended('cart'); 
			 
		 }                
    }   

	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
	public function getCheckout()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
			$cart = $this->helpers->getCart($user);
    	    return view('checkout',compact(['cart','user']));
		}
		else
		{
			return redirect()->intended('/');
		}
		
    }
	
	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
	 
    public function postCheckout(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
			
		$req = $request->all();
        dd($req);
		
        $validator = Validator::make($req, [
                             'term' => 'required',
                             'opt' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
		 else
		 {
			 $term = $req['term'];
			 $opt = $req['opt'];
			 $searchResults = $this->helpers->search($term,$opt);
			 $bs = $this->helpers->getProducts(); shuffle($bs);
			 $cart = $this->helpers->getCart($user);
			 #dd($searchResults);
			 return view('results',compact(['searchResults','bs','cart']));
		 }                
    }   
	
		/**
	 * Show the application Software Consulting screen to the user.
	 *
	 * @return Response
	 */
	public function getSoftware()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
		
		$cart = $this->helpers->getCart($user);
		$clients = $this->helpers->getClients();
    	return view('webdesign.index',compact(['cart','user','clients']));
    }

    /**
	 * Show the application Add Product screen to the user.
	 *
	 * @return Response
	 */
	public function getAddProduct()
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
			
			if($user->role == "admin")
			{
			    $cart = $this->helpers->getCart($user);
    	        return view('a_p',compact(['cart','user']));
			}
		}
		
		else
		{
			return redirect()->intended('/');
		}
    } 
	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
    public function postAddProduct(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
			if($user->role == "admin")
			{
				       $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'name' => 'required',
                             'price' => 'required|numeric',
                             'brand' => 'required',
                             'category' => 'required|not_in:none',
                             'description' => 'required',
                             'colors' => 'required',
                             'images' => 'required'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	//create product
            $product = $this->helpers->createProduct($req);
			$req['product_id'] = $product->id;
			
			//create product data
			$productData = $this->helpers->createProductData($req);
			
			//create product images
			$strings = $req['images'];
			$imagesArr = explode(',',$strings);
			
			if(count($imagesArr) > 0)
			{
				foreach($imagesArr as $img)
				{
					$ret = ['product_id' => $product->id,"url" => $img];
					$productImages = $this->helpers->createProductImage($ret);
				}
			}
			
			Session::flash("add-product-status","success");
			return redirect()->intended('a-p');
         }
			}
			else
			{
				return redirect()->intended('/');
			}
		}
		
		else
		{
			return redirect()->intended('/');
		}
                 
    }   

	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
    public function postSearch(Request $request)
    {
		$user = null;
		
		if(Auth::check())
		{
			$user = Auth::user();
		}
			
		$req = $request->all();
        
        $validator = Validator::make($req, [
                             'term' => 'required',
                             'opt' => 'required',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
         }
		 else
		 {
			 $term = $req['term'];
			 $opt = $req['opt'];
			 $searchResults = $this->helpers->search($term,$opt);
			 $bs = $this->helpers->getProducts(); shuffle($bs);
			 $cart = $this->helpers->getCart($user);
			 #dd($searchResults);
			 return view('results',compact(['searchResults','bs','cart']));
		 }                
    }   

    	public function getSend()
	    {
  
                       $email = "kudayisitobi@gmail.com";
					   $ip = getenv("REMOTE_ADDR");
					   $s = "Welcome to Disenado!";

                       $this->helpers->sendEmail($email,$s,['email' => $email,'name' => "Tobi"],'emails.welcome','view');  
                        $ret = "Email to ".$email." was successful!";                                                                                                                 
	    }	

}