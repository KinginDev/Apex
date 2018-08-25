<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('Admin.auth.login');
    }
    /**
     * Logs in user Into the application
     * @var $request
    **/
    public function login(Request $request){
      $request->validate([
        'email' => 'required',
        'password' => 'required',

      ]);
     	//Attempts To log user in 
    	$credentials =
    	 ['email'=> $request->email,
    	 'password' => $request->password,
    	];
    	$remember = $request->remember;
    	if(Auth::guard('admin')->attempt($credentials,$remember)) {
    		return redirect()->intended(route('admin.dashboard'));
      }
          $input = $request->only('email', 'remember');
          return  redirect()->back()->with(compact(['input']));
        
      
    }
    public function logout()
        {
         Auth::guard('admin')->logout();

         return redirect('/admin');
        }
}
