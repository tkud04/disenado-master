<?php
namespace App\Helpers;

use App\Helpers\Contracts\HelperContract; 
use Crypt;
use Carbon\Carbon; 
use Mail;
use Auth; 
use App\User;
use App\UserData;
use App\Products;
use App\ProductData;
use App\ProductImages;
use App\Cart;
use App\Reviews;

use Illuminate\Pagination\LengthAwarePaginator;

class Helper implements HelperContract
{

         protected $laneBanner = [["img"=>"img/bina/banner-accessories-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-accessories-2.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-accessories-3.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-2.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-3.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-4.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-2.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-3.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-4.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-5.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-phones-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-phones-2.jpg","url"=>"shop"],
		                         ];
								 
		 protected $slideBanner = [["img"=>"img/bina/banner-accessories-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-accessories-2.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-accessories-3.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-2.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-3.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-fashion-4.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-2.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-3.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-4.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-laptops-5.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-phones-1.jpg","url"=>"shop"],
								   ["img"=>"img/bina/banner-phones-2.jpg","url"=>"shop"],
		                         ];
								  
		 protected $brands = ["img/brand/brand3.png",
		                      "img/brand/brand4.png",
		                      "img/brand/brand5.png",
		                      "img/brand/brand6.png",                     
		                      "img/brand/brand12.gif",
		                      ];
          /**
           * Sends an email(blade view or text) to the recipient
           * @param String $to
           * @param String $subject
           * @param String $data
           * @param String $view
           * @param String $image
           * @param String $type (default = "view")
           **/
           function sendEmail($to,$subject,$data,$view,$type="view")
           {
                   if($type == "view")
                   {
                     Mail::send($view,$data,function($message) use($to,$subject){
                           $message->from('info@disenado.com.ng',"Disenado");
                           $message->to($to);
                           $message->subject($subject);
                          if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }

                   elseif($type == "raw")
                   {
                     Mail::raw($view,$data,function($message) use($to,$subject){
                           $message->from('info@disenado.com.ng',"Disenado");
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
           }
           
           
           function isMobile()
           {
           	$ret = false; 
              $useragent=$_SERVER['HTTP_USER_AGENT'];
              if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
                $ret = true; 
                return $ret; 
           }
           
           
           function createUser($data)
           {
           	$ret = User::create(['fname' => $data['fname'], 
                                                      'lname' => $data['lname'],                                                      
                                                      'phone' => $data['phone'], 
                                                      'email' => $data['email'], 
                                                      'role' => $data['role'], 
                                                      'password' => bcrypt($data['password']), 
                                                      ]);
                                                      
                return $ret;
           } 
           
           function createUserData($data)
          {
          	$rd = UserData::create(['user_id' => $data['user_id'], 
                                                      'address' => $data['address'], 
                                                      'city' => $data['city'], 
                                                      'state' => $data['state'], 
                                                      'zipcode' => $data['zipcode'], 
                                                      'country' => "NG", 
                                                      'company' => 'none', 
                                                    ]);
              return $rd;
          }
          
          function createProduct($data)
           {
           	$ret = Products::create(['name' => $data['name'], 
                                                      'price' => $data['price'],                                                      
                                                      'in_stock' => "yes", 
                                                      ]);
                                                      
                return $ret;
           } 
           
           function createProductData($data)
          {
          	$ret = ProductData::create(['product_id' => $data['product_id'], 
                                                      'brand' => $data['brand'],                                                      
                                                      'category' => $data['category'],
                                                      'description' => $data['description'],
                                                       'colors' => $data['colors'],
                                                      ]);
              return $ret;                                 
          }   

          function createProductImage($data)
          {
          	$ret = ProductImages::create(['product_id' => $data['product_id'], 
                                                      'url' => $data['url'],                                                      
                                                      ]);
              return $ret;                                 
          }   

          function addToCart($data)
          {
          	$ret = Cart::create(['user_id' => $data['user_id'], 
                                                      'product_id' => $data['product_id'],                                                      
                                                      'qty' => $data['qty'],                                                      
                                                      ]);
              return $ret;                                 
          }

		  function removeFromCart($id)
          {
			$ip = getenv("REMOTE_ADDR");
          	$ret = Cart::where('id',$id)->first();
					   
		    if($ret != null) $ret->delete();                                
          } 

		  function getCart($user)
          {
			  $ip = getenv("REMOTE_ADDR");
			  $ret = [];
			  $carts = null;
			  
          	  if($user != null) $carts = Cart::where('user_id',$user->id)->get();
					   
		    if($carts != null)
			{
				foreach($carts as $c)
				{
					$temp = [];
					$temp['product'] = $this->getProduct($c->product_id);
					$temp['id'] = $c->id;
					$temp['qty'] = $c->qty;
					array_push($ret,$temp);
				}
			}
			
			else{}
			
            return $ret;			
          }
		  
		  function updateCart($user,$itemID,$newQty)
          {
			  $ip = getenv("REMOTE_ADDR");
			  $ret = [];
			  $carts = null;
			  
          	  if($user != null) $item = Cart::where('user_id',$user->id)
				                             ->where('id',$itemID)->first();
					   
		    if($item != null)
			{
				$item->update(['qty' => $newQty]);
			}
			
			else{}
          } 		  
          
          
          function getProducts()
          {
          	$ret = [];
          	$products = Products::orderBy('created_at', 'desc')->get();
          	 if($products != null)
              {
              	foreach($products as $p){
              	$pd = ProductData::where("product_id", $p->id)->first();
                  $pi = ProductImages::where("product_id", $p->id)->get();
              	$temp = [];
              	$temp['id'] = $p->id;
                  $temp['in_stock'] = $p->in_stock;
                  $images = [];
                  
                  foreach($pi as $img)
                 {
					 $ii = str_replace("t-shirt","tshirt",$img->url);
                 	array_push($images, $ii);
                 }               
                  $temp['images'] = $images;
                  $temp['name'] = $p->name;
                  $temp['price'] = $p->price;
                  $temp['category'] = $pd->category;
                  $temp['colors'] = $pd->colors;
                  $temp['description'] = $pd->description;
                  $temp["date"] = $p->created_at->format("D, jS F Y h:i A");
                  array_push($ret, $temp);
                 } 
              }
              return $ret;
          }
		  
		  
          function getProduct($id)
          {
          	$ret = [];
          	$p = Products::where('id', $id)->first();
          	 if($p != null)
              {
              	$pd = ProductData::where("product_id", $p->id)->first();
                  $pi = ProductImages::where("product_id", $p->id)->get();
              	$temp = [];
              	$temp['id'] = $p->id;
                  $temp['in_stock'] = $p->in_stock;
                  $images = [];
                  
                  foreach($pi as $img)
                 {
                 	array_push($images, $img->url);
                 }               
                  $temp['images'] = $images;
                  $temp['name'] = $p->name;
                  $temp['price'] = $p->price;
				  $temp['category'] = $pd->category;
                  $temp['colors'] = $pd->colors;
                  $temp['description'] = $pd->description;
                  $temp['brand'] = $pd->brand;
                  $temp['category'] = $pd->category;
                  $temp["date"] = $p->created_at->format("D, jS F Y h:i A");
                  $ret = $temp;
              }
              return $ret;
          }
          
          
          function deleteClient($id)
           {
           	$client = Clients::where("id", $id)->first();
           
               if($client != null)
               {
               	$client->delete();
                   $cd = ClientData::where("client_id", $id)->first();
                   if($cd != null) $cd->delete();
               } 
                                                      
           } 
		   		   
		   
		   function searchUsers($term)
		   {
			   $ret = [];
			   $rr = User::SearchByKeyword($term)->get();
			   if($rr != null)
			   {
				   foreach($rr as $r)
				   {
					   array_push($ret,$r->id);
				   }
			   }
			   return $ret;
		   }		   
		   
		   function searchProductData($term,$opt)
		   {
		       $ret = [];
			   $posh = "%".$term."%";
			   $rr = ProductData::where("category",$opt)
				       ->where("brand","LIKE",$posh)
				       ->orWhere("description","LIKE",$posh)
				       ->orWhere("colors","LIKE",$posh)->get();

			   if($rr != null)
			   {
				   foreach($rr as $r)
				   {
					   array_push($ret,$r->product_id);
				   }
			   }		
			   return $ret;
		   }		   
		   
		   function searchProducts($term)
		   {
			   $ret = [];
			   $posh = "%".$term."%";
			   $rr = Products::where("name","LIKE",$posh)->get();
			   {
				   foreach($rr as $r)
				   {
					   array_push($ret,$r->id);
				   }
			   }			   
			   return $ret;
		   }		   
		   
		   function searchUserData($term)
		   {
			   $ret = [];
			   $rr = UserData::SearchByKeyword($term)->get();
			   {
				   foreach($rr as $r)
				   {
					   array_push($ret,$r->user_id);
				   }
			   }			   
			   return $ret;
		   }
		   
		   function search($term,$opt)
           {
			 $ret = [];
			 $switch = 0;
			 
           	 #$u = $this->searchUsers($term);
           	 #$ud = $this->searchUserData($term);
			 $pd = $this->searchProductData($term,$opt);
			 $p = $this->searchProducts($term);
			 
			 $productResults = array_merge($pd,$p);
			 $productResults = array_unique($productResults);
			 
			 
			 foreach($productResults as $pr)
			 {
				 $temp = [];
				 $temp = $this->getProduct($pr);
				 array_push($ret,$temp);
			 }
			 
			 return $ret;
           } 		   
		   
		   function getSlideBanner()
           {
			 $ret = [];
			 shuffle($this->slideBanner);
			 $ret["bottomLeft"] = $this->slideBanner[0];
			 $ret["bottomRight"] = $this->slideBanner[1];
			 return $ret;
           } 		   
		   
		   function getLaneBanner()
           {
			 $ret = [];
			 shuffle($this->laneBanner);
			 $ret["topRight"] = $this->laneBanner[0];
			 $ret["middleRight"] = $this->laneBanner[1];
			 return $ret;
           }

		   function getBrands()
           {
			 shuffle($this->brands);
			 $ret = [];
			 for($i=0; $i < 4; $i++) array_push($ret,$this->brands[$i]);
			 return $ret;
           } 
		   
		   function getSpecials($arr)
           {
			 #bs
			 $ret = ['bs' => [],'ss' => [],'os' => []];
			 $chunks = array_chunk($arr,10);
			 $ret['bs'] = $chunks[0];
			 $ret['ss'] = $chunks[1];
			 $ret['os'] = $chunks[2];
			 return $ret;
           } 


function getClients()
{
   $arr = [
                ["name" => "Disenado Nigeria Stores","image" => "logo.jpg","link" => "www.disenado.com.ng"],
                ["name" => "Barad Innovations","image" => "barad.jpg","link" => "www.baradinnovations.com.ng"],
                ["name" => "Escalate Innovations","image" => "escalate.jpg","link" => "www.escalateinnovations.com.ng"],
                ["name" => "Stan designs","image" => "standesigns.png","link" => "www.standesigns.ml"],
                ["name" => "SafeBets","image" => "safebets.png","link" => "safebets.disenado.com.ng"],
                ["name" => "Doubleyourbtc","image" => "doubleyourbtc.png","link" => "#"]
              ];
              
   return $arr;
}		   
           
           
           /**
     * Create a length aware custom paginator instance.
     *
     * @param  Array  $items
     * @param  int  $perPage
     * @return \Illuminate\Pagination\LengthAwarePaginator
     */
          function paginate($items, $perPage=15)
          {
          	$ret = null;
          
          	//Get current page form url e.g. &page=1
             $currentPage = LengthAwarePaginator::resolveCurrentPage();
             
             //Slice the collection to get the items to display in current page
            $currentPageItems = array_slice($items, ($currentPage - 1) * $perPage, $perPage);

            //Create our paginator and pass it to the view
            $ret = new LengthAwarePaginator($currentPageItems, count($items), $perPage);

            return $ret;
          }
   
}
?>