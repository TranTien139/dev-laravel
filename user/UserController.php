<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Hash;
use Input;
use App\UserModel;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ChangePassword;
class UserController extends Controller
{   use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    public function getlogin(){
    	return view('admin.welcome_admin');
    }
    public function getlogout(){
    	Auth::logout();
        return redirect('/admin');
    }
     public function postlogin(UserRequest $request){
      $remember = (Input::has('txtrememberme'))? true: false;
     	$auth = array('email' =>$request->txtemail,'password' =>$request->txtpassword,'level' =>'admin' );
     	if(Auth::attempt($auth,$remember)){
     		return redirect('/admin');
     	}else{
     		return redirect('/admin');
     	}
     }
     public function index()
    { 
      $user_temp = UserModel::all();
      return view('admin.user_list',compact('user_temp'));
    }
    public function create()
    {
        return view('admin.user_add');
    }
    public function store(RegisterRequest $request)
    {
        $user_temp = new UserModel;
        $user_temp->email = $request->txtemail;
        $user_temp->password = Hash::make($request->txtpassword);
        $user_temp->fullname = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = $request->txtlevel;
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
        return redirect()->route('admin.user.index')->with(['flash_message'=>'Tạo thành công']);
    }
    public function show($id)
    {
      echo "string";
    }
    public function edit($id)
    {
    $user_temp =  UserModel::findOrFail($id);
    return view('admin.user_edit',compact('user_temp'));
    }
    public function update($id,Request $request)
    {
        $user_temp =  UserModel::findOrFail($id);
        $user_temp->email = $request->txtemail;
        $user_temp->password = $request->txtpassword;
        $user_temp->fullname = $request->txtfullname;
        $user_temp->birthday = $request->txtbirthday;
        $user_temp->gender = $request->txtgender;
        $user_temp->level = "admin";
        $user_temp->avatar= $request->txtavatar;
        $user_temp->remember_token = $request->_token;
        $user_temp->save();
       return redirect()->route('admin.user.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {      
    $user_temp =  UserModel::findOrFail($id);
    if($user_temp->level=='admin'){return redirect()->route('admin.user.index');}else{
    $user_temp->delete();
    return redirect()->route('admin.user.index')->with(['flash_message'=>'Xóa thành công']);}
    }
    public function changepassword(ChangePassword $request){
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
        return Redirect::to('admin/logout');
       }else{
        return Redirect::to('admin');
       }
      
    }
}
