<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ArticleModel;
use DB;
use App\Http\Requests\ArticleRequest;
class ArticleController extends Controller
{
      public function index()
    { 
      $article_temp = ArticleModel::all();
      return view('admin.article_list',compact('article_temp'));
    }
    public function create()
    {      
        return view('admin.article_add');
    }
    public function store(ArticleRequest $request)
    {   $file_name = $request->file('txtimage')->getClientOriginalName();
        $article_temp = new ArticleModel;
        $article_temp->title = $request->txttitle;
        $article_temp->alias = changeTitle($request->txttitle);
        $article_temp->description = $request->txtdescription;
        $article_temp->content = $request->txtcontent;
        $article_temp->auth = $request->txtauth;
        $article_temp->image = $file_name;
        $article_temp->datetime = $request->txtdatetime;
        $article_temp->ishot = $request->txtishot;
        $article_temp->published = $request->txtpublished;
        $request->file('txtimage')->move('public/image_upload/articles/',$file_name);
        $article_temp->save();
        return redirect()->route('admin.article.index')->with(['flash_message'=>'Thêm thành công']);
    }
    public function show($id)
    {
      echo "string";
    }
    public function edit($id)
    {
    $article_temp =  ArticleModel::findOrFail($id);
    return view('admin.article_edit',compact('article_temp'));
    }
    public function update($id,Request $request)
    {
        $article_temp =  ArticleModel::findOrFail($id);
        $article_temp->title = $request->txttitle;
        $article_temp->alias = changeTitle($request->txttitle);
        $article_temp->description = $request->txtdescription;
        $article_temp->content = $request->txtcontent;
        $article_temp->auth = $request->txtauth;
        $article_temp->ishot = $request->txtishot;
        $article_temp->datetime = $request->txtdatetime;
        $article_temp->published = $request->txtpublished;
        if(!empty($request->file('txtimage'))){
        $file_named = $request->file('txtimage')->getClientOriginalName();
        $request->file('txtimage')->move('public/image_upload/articles/', $file_named);
        $article_temp->image= $file_named;
        }else {
        $article_temp->image = $request->txtimage1;
        }
        $article_temp->save();
       return redirect()->route('admin.article.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {   
    $article_temp =  ArticleModel::findOrFail($id);
    $article_temp->delete();
    return redirect()->route('admin.article.index')->with(['flash_message'=>'Xóa thành công']);;
	}

}
