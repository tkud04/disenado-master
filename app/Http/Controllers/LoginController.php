<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\Contracts\HelperContract; 
use Auth;
use Session; 
use Validator; 
use Carbon\Carbon; 

class LoginController extends Controller {

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
    public function postLogin(Request $request)
    {
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'password' => 'required|min:6',
                             'email' => 'required|email|exists:users'
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             return redirect()->back()->withInput()->with('errors',$messages);
             //dd($messages);
         }
         
         else
         {
         	//authenticate this login
            if(Auth::attempt(['email' => $req['email'],'password' => $req['password']]))
            {
            	//Login successful               
               $user = Auth::user();          
           
               if($user->role == "admin"){return redirect()->intended('/');}
               else{return redirect()->intended('/');}
            }
			
			else
			{
				Session::flash("login-status","error");
				return redirect()->intended('/');
			}
         }        
    }
	
    public function postRegister(Request $request)
    {
        $req = $request->all();
        //dd($req);
        
        $validator = Validator::make($req, [
                             'password' => 'required|confirmed',
                             'email' => 'required|email',
                             'fname' => 'required',
                             'lname' => 'required',
                             #'phone' => 'required|numeric',
                             #'g-recaptcha-response' => 'required',
                           # 'terms' => 'accepted',
         ]);
         
         if($validator->fails())
         {
             $messages = $validator->messages();
             //dd($messages);
             
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else
         {
            $req['role'] = "user";
            $req['phone'] = "";
            
                       #dd($req);            

            $user =  $this->helpers->createUser($req); 
			$req['user_id'] = $user->id;
			$req['address'] = "";
			$req['city'] = "";
			$req['state'] = "";
			$req['zipcode'] = "";
            $ud =  $this->helpers->createUserData($req); 
         
             //after creating the user, send back to the registration view with a success message
             #$this->helpers->sendEmail($user->email,'Welcome To Disenado!',['name' => $user->fname, 'id' => $user->id],'emails.welcome','view');
             Session::flash("signup-status", "success");
             return redirect()->intended('/');
          }
    }
	
	
	public function getForgotUsername()
    {
         return view('forgot_username');
    }
    
    /**
     * Send username to the given user.
     * @param  \Illuminate\Http\Request  $request
     */
    public function postForgotUsername(Request $request)
    {
    	$req = $request->all(); 
        $validator = Validator::make($req, [
                             'email' => 'required|email'
                  ]);
                  
        if($validator->fails())
         {
             $messages = $validator->messages();
             //dd($messages);
             
             return redirect()->back()->withInput()->with('errors',$messages);
         }
         
         else{
         	$ret = $req['email'];

                $user = User::where('email',$ret)->first();

                if(is_null($user))
                {
                        return redirect()->back()->withErrors("This user doesn't exist!","errors"); 
                }
                
                $this->helpers->sendEmail($user->email,'Your Username',['username' => $user->username],'emails.username','view');                                                         
            Session::flash("reset-status","success");           
            return redirect()->intended('forgot-username');

      }
                  
    }    
    
    
    public function getLogout()
    {
        if(Auth::check())
        {  
           Auth::logout();       	
        }
        
        return redirect()->intended('/');
    }

}
