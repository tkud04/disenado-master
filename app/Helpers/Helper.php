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
                           $message->from('info@worldlotteryusa.com',"WorldLotteryUSA");
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
                           $message->from('info@worldlotteryusa.com',"WorldLotteryUSA");
                           $message->to($to);
                           $message->subject($subject);
                           if(isset($data["has_attachments"]) && $data["has_attachments"] == "yes")
                          {
                          	foreach($data["attachments"] as $a) $message->attach($a);
                          } 
                     });
                   }
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
          	$ret = Cart::where('user_id',$ip)
          	    	   ->where('product_id',$id)->first();
					   
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
                 	array_push($images, $img->url);
                 }               
                  $temp['images'] = $images;
                  $temp['name'] = $p->name;
                  $temp['price'] = $p->price;
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
		   
		   function search($term)
           {
           	$client = Clients::where("id", $id)->first();
           
               if($client != null)
               {
               	$client->delete();
                   $cd = ClientData::where("client_id", $id)->first();
                   if($cd != null) $cd->delete();
               } 
                                                      
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