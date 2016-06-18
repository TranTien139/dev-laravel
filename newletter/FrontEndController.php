<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB,Mail,Cart;
use App\article;
use App\cate;
use App\ProductModel;
use App\CategoryModel;
class FrontEndController extends Controller
{   
    public function gethome()
    { 
      return view('themes.home');
    }
      public function getproduct()
    {   $category_order = CategoryModel::select('id','name','parent_id')->get()->toArray();
        return view('themes.product',compact('category_order'));
    }

    public function filterproduct()
    {
      return view('themes.product_filter');
    }
    public function postnewletter(Request $request)
    {  $data = ['email' =>$request->txtnewletter];
       Mail::send('themes.block.newletter', $data, function ($message) {
       $message->from('quannguyen1105@gmail.com', 'nhận tin khuyễn mãi');
       $message->to('quannguyen1105@gmail.com')->subject('Đăng kí nhận thông tin khuyễn mãi');
       echo "<script>alert('đăng kí thành công! cảm ơn bạn đã đăng kí nhận tin khuyến mại của chúng tôi'); window.location='".url('/')."'</script>";
       return redirect()->back();
});
    }

    public function getmuahang($id){
       $product_buy = DB::table('products')->where('id',$id)->first();
       Cart::add(array('id' =>$id ,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image) ));
       $content = Cart::content();
       return redirect()->route('getgiohang');
    }
   public function getgiohang(){
    $content = Cart::content();
    $total = Cart::total();
    return view('themes.shopping_cart',compact('content','total'));
   }
   public function xoasanpham($id){
      Cart::remove($id);
       return redirect()->route('getgiohang');
   }
 public function detailproduct($id){
       $product_detail = DB::table('products')->where('id',$id)->first();
       return view('themes.productdetail',compact('product_detail'));
        }
  public function detailarticle($id){
      $article_detail = DB::table('articles')->where('id',$id)->first();
       return view('themes.newsdetail',compact('article_detail'));
  }
  public function capnhatgiohang(){
    if (Request::ajax()) {
       $id = Request::get("id");
       $qty = Request::get("qty");
       Cart::update($id,$qty);
       echo "oke";
    }
  }
  public function thuchiendathang(){
    $content = Cart::content();
    $total = Cart::total();
    return view('themes.checkout',compact('content','total'));
  }
   public function posthuchiendathang(Request $request){
       $data = ['name' =>$request->txtname,'phone'=>$request->txtphone,'adress'=>$request->txtadress, 'email'=>$request->txtemail];
       Mail::send('themes.block.orderproduct', $data, function ($message) {
       $message->from('quannguyen1105@gmail.com', 'Đặt mua sản phẩm');
       $message->to('quannguyen1105@gmail.com')->subject('Đặt mua sản phẩm máy tập thể hình');
       echo "<script>alert('gửi thành công! cảm ơn bạn đã mua sản phẩm của chúng tôi, chúng tôi sẽ liên hệ với bạn sớm nhất'); window.location='".url('/')."'</script>";
       return redirect()->back();
});
  }
    public function search($search){
    $search = urldecode($search);
    $keywords = ProductModel::select()
            ->where('name', 'LIKE', '%'.$search.'%')
            ->orderBy('id', 'desc')
            ->paginate(8);
    if (count($keywords) == 0){
        return View('themes.search')
        ->with('message', 'Không có kết quả nào được tìm thấy')
        ->with('search', $search);
    } else{
        return View('themes.search')
        ->with('keywords', $keywords)
        ->with('search', $search);
    }
}

 public function postprice(Request $request)
    {  $data = ['fullname' =>$request->txtfullname,'email' =>$request->txtemail,'phone' =>$request->txtphone];
       Mail::send('themes.block.price', $data, function ($message) {
       $message->from('quannguyen1105@gmail.com', 'Nhận tin báo giá');
       $message->to('quannguyen1105@gmail.com')->subject('Ðăng kí nhận thông tin báo giá sản phẩm  ');
       echo "<script>alert('Ðăng kí thành công! cảm ơn bạn đã đăng kí nhận tin báo giá sản phẩm của chúng tôi , chúng tôi sẽ gửi email cho bạn sớm nhất.'); window.location='".url('/')."'</script>";
       return redirect()->back();
});
    }

    public function filterproductprice(){
        return view('themes.productprice');
    }

}


