<?php

use Illuminate\Support\Facades\Input;
Route::group(['middleware' => ['web']], function () {
        Route::group(['prefix'=>'admin'],function(){
		Route::get('/',['as'=>'getlogin','uses'=>'UserController@getlogin']);
		Route::get('/logout',['as'=>'getlogout','uses'=>'UserController@getlogout']);
		Route::post('/',['as'=>'postlogin','uses'=>'UserController@postlogin']);
		Route::resource('user','UserController');
		Route::post('/getchangepassword',['as'=>'changepassword','uses'=>'UserController@changepassword']);
		Route::get('/profile',function(){return view('admin.user_info');});
    Route::get('/setting',function(){return view('admin.setting');});
    // Route::post('/getsetting',['as'=>'getsetting','uses'=>'SettingController@getsetting']);
    Route::post('/getsetting',function(){return 'as';});
		Route::resource('product','ProductController');
		Route::resource('category','CategoryController');
		Route::resource('slider','SliderController');
		Route::resource('block', 'BlockController');
    Route::resource('service', 'ServiceController');
    Route::resource('productprice','ProductpriceController');
    Route::resource('productpricelist','ProductpricelistController');
    Route::get('deleteproductdetail/{id}',function(){
    $id = Request::segment(3);
    $value = DB::table('image_details')->where("id",$id);
    $value1 = $value->first();
    File::delete(public_path().'/image_upload/product/product_detail/'.$value1->imagedetail);
    $value->delete();
    return redirect()->back();
    });
		}); 	
});

   Route::group(['middleware' => 'web'], function() {
   Route::get('/',['as'=>'gethome','uses'=>'FrontEndController@gethome']);
   Route::get('dang-nhap',['as'=>'getlogin_frontend','uses'=>'UserFrontEndController@getlogin_frontend']);
   Route::get('logout',['as'=>'getlogout_frontend','uses'=>'UserFrontEndController@getlogout_frontend']);
   Route::get('tai-khoan',['as'=>'getuser_frontend','uses'=>'UserFrontEndController@getuser_frontend']);  
   Route::get('tai-khoan/sua-tai-khoan/{id}',['as'=>'getedituser_frontend','uses'=>'UserFrontEndController@getedituser_frontend']);
   Route::post('tai-khoan/sua-tai-khoan/{id}',['as'=>'postedituser_frontend','uses'=>'UserFrontEndController@postedituser_frontend']);
   Route::get('tai-khoan/tao-tai-khoan',['as'=>'getcreateuser_frontend','uses'=>'UserFrontEndController@getcreateuser_frontend']);
   Route::post('tai-khoan/tao-tai-khoan',['as'=>'postcreateuser_frontend','uses'=>'UserFrontEndController@postcreateuser_frontend']);   
   Route::post('dang-nhap',['as'=>'postlogin_frontend','uses'=>'UserFrontEndController@postlogin_frontend']);
   Route::get('san-pham/san-pham-chi-tiet/{id}/{name}',['as'=>'detailproduct','uses'=>'FrontEndController@detailproduct']);
   Route::get('san-pham',['as'=>'getproduct','uses'=>'FrontEndController@getproduct']);
   Route::get('gioi-thieu',function(){return view('themes.introduce');});
   Route::get('san-pham/loc-san-pham/{name}',['as'=>'filterproduct','uses'=>'FrontEndController@filterproduct']);
   
   Route::get('bao-gia-san-pham/{name}',['as'=>'filterproductprice','uses'=>'FrontEndController@filterproductprice']);
   Route::get('dich-vu/{name}',function(){return view('themes.helpcustomer');});
   Route::get('dich-vu/hoi-dap',function(){return view('themes.helpcustomer');});
   Route::get('dich-vu/huong-dan-tra-hang',function(){return view('themes.helpcustomer');});
   Route::get('dich-vu/huong-dan-mua-hang',function(){return view('themes.helpcustomer');});
   Route::get('dich-vu/huong-dan-chon-size',function(){return view('themes.helpcustomer');});
   Route::get('dich-vu/chinh-sach-ban-hang',function(){return view('themes.helpcustomer');});
   Route::get('lien-he',function(){return view('themes.contact');});
   Route::get('bao-gia',function(){return view('themes.productprice');});
   Route::post('nhan-tin-khuyen-mai',['as'=>'postnewletter','uses'=>'FrontEndController@postnewletter']);
   Route::post('doi-mat-khau',['as'=>'changepassword1','uses'=>'UserFrontEndController@changepassword1']);
   
   Route::get('home/searchredirect', function(){
  if (empty(Input::get('txtsearch'))) return redirect()->back();
  $search = urlencode(e(Input::get('txtsearch')));
  $route = "tim-kiem/key_word=$search";
  return redirect($route);
  });
  Route::get("tim-kiem/key_word={search}", "FrontEndController@search");  

   Route::get('san-pham/mua-san-pham/{id}/{name}',['as'=>'getmuahang','uses'=>'FrontEndController@getmuahang']);
   Route::get('gio-hang',['as'=>'getgiohang','uses'=>'FrontEndController@getgiohang']);
   Route::get('xoa-san-pham/{id}',['as'=>'xoasanpham','uses'=>'FrontEndController@xoasanpham']);
   Route::get('cap-nhat-gio-hang/{id}/{qty}',['as'=>'capnhatgiohang','uses'=>'FrontEndController@capnhatgiohang']);
   Route::get('thuc-hien-dat-hang',['as'=>'thuchiendathang','uses'=>'FrontEndController@thuchiendathang']);
   Route::post('thuc-hien-dat-hang',['as'=>'posthuchiendathang','uses'=>'FrontEndController@posthuchiendathang']);
   Route::post('nhan-bao-gia',['as'=>'postprice','uses'=>'FrontEndController@postprice']);
});
