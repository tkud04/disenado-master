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
		$cart = $this->helpers->getCart();
		$trending = $this->helpers->getProducts(); shuffle($trending);
		$bs = $this->helpers->getProducts(); shuffle($bs);
		$os = $this->helpers->getProducts(); shuffle($os);
		$ss = $this->helpers->getProducts(); shuffle($ss);

    	return view('index',compact(['cart','bs','os','ss','trending']));
    }
	
	
	/**
	 * Show the application Shop screen to the user.
	 *
	 * @return Response
	 */
	public function getShop()
    {
    	$ret = $this->helpers->getProducts();
		$cart = $this->helpers->getCart();
		return view('shop',compact(['ret','cart']));
    }
	
	/**
	 * Show the application Product details screen to the user.
	 *
	 * @return Response
	 */
	public function getProducts($id="")
    {
		if($id == "")
		{
			return redirect()->intended('shop');
		}

        else
		{
			$p = $this->helpers->getProduct($id);
			$related_products = $this->helpers->getProducts(); shuffle($related_products);
			$cart = $this->helpers->getCart();
			return view('product-details',compact(['p','cart','related_products']));
		}
		
    	
    }
	
	/**
	 * Show the application Contact screen to the user.
	 *
	 * @return Response
	 */
	public function getContact()
    {
		$cart = $this->helpers->getCart();
    	return view('contact',compact(['cart']));
    }
	
	/**
	 * Show the application Cart screen to the user.
	 *
	 * @return Response
	 */
	public function getCart()
    {
		$cart = $this->helpers->getCart();
    	return view('cart',compact(['cart']));
    }
	
	/**
	 * Show the application Cart screen to the user.
	 *
	 * @return Response
	 */
	public function getAddToCart($id)
    {
		if($id == "")
		{
			$cart = $this->helpers->getCart();
			return view('cart',compact(['cart']));
		}
		
		else
		{
			$qty = 1;
			$ip = getenv("REMOTE_ADDR");
			$data = ['user_id' => $ip,'product_id' => $id,'qty' => $qty];
			$status = $this->helpers->addToCart($data);
			Session::flash("add-to-cart-status",$status);
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
		if($id == "")
		{
			$cart = $this->helpers->getCart();
			return view('cart',compact(['cart']));
		}
		
		else
		{
			$qty = 1;
			$ip = getenv("REMOTE_ADDR");
			$data = ['user_id' => $ip,'product_id' => $id,'qty' => $qty];
			$status = $this->helpers->removeFromCart($data);
			Session::flash("remove-from-cart-status",$status);
			return redirect()->intended('shop');
		}
    }

	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
	public function getCheckout()
    {
		$cart = $this->helpers->getCart();
    	return view('checkout',compact(['cart']));
    }

    /**
	 * Show the application Add Product screen to the user.
	 *
	 * @return Response
	 */
	public function getAddProduct()
    {
		$cart = $this->helpers->getCart();
    	return view('a_p',compact(['cart']));
    } 
	/**
	 * Show the application Checkout screen to the user.
	 *
	 * @return Response
	 */
    public function postAddProduct(Request $request)
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

}
