<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserFrontEndRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\ChangePassword;
use Illuminate\Support\Facades\Redirect;
use App\user;
use App\UserModel;
use Auth;
use Hash;
use Input;
class UserFrontEndController extends Controller
{
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    public function  getlogin_frontend(){
    	return view('themes.login');
    }
    public function getlogout_frontend(){
       Auth::logout();    	
       return redirect('/');
    }
    public function postlogin_frontend(UserFrontEndRequest $request){
        $remember = (Input::has('remember_me'))? true: false;
    	$auth =array('email' =>$request->txtemail, 'password' =>$request->txtpassword,'level'=>'member');
    	if(Auth::attempt($auth,$remember)){
    		return redirect('/');
    	} else{
    	    return view('themes.login');
    	}
    }
    public function getuser_frontend()
    { 
      return view('themes.user_detail');
    }
    public function getcreateuser_frontend()
    {
        return view('themes.user_add');
    }
    public function postcreateuser_frontend(UserRegisterRequest $request)
    {
        $user_temp = new user;
        $user_temp->email = $request->txtemail;
        $user_temp->password = Hash::make($request->txtpassword);
        $user_temp->name = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = $request->txtlevel;
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
        return redirect("tai-khoan")->with(['level_message'=>'success','flash_message'=>'update success']);
    }
    public function getedituser_frontend($id)
    {
    $user_temp =  user::findOrFail($id);
    return view('themes.user_edit',compact('user_temp'));
    }
      public function changepassword1(ChangePassword $request){
        $id = $request->txtid;
        $user_temp = UserModel::findOrFail($id);
        if(Hash::check(Input::get('txtold_password'),$user_temp->getAuthPassword()))
        {
        $user_temp->password = Hash::make($request->txtchangepassword);
        $user_temp->email = $request->txtemail;
        $user_temp->fullname = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = $request->txtlevel;
        $user_temp->avatar= $request->txtavatar;
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
        return Redirect::to('logout');
       }else{
        return Redirect::to('/');
       }
      
    }


    public function postedituser_frontend($id,UserRegisterRequest $request)
    {
        $user_temp =  user::findOrFail($id);
        $user_temp->email = $request->txtemail;
        $user_temp->password = Hash::make($request->password);
        $user_temp->name = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = $request->txtlevel;
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
      return redirect("tai-khoan")->with(['level_message'=>'success','flash_message'=>'update success']);
    }
}

