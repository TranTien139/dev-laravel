<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BlockModel;
class BlockController extends Controller
{
    public function index(){
     $contact_temp =  BlockModel::findOrFail('1');
    return view('admin.contact_list',compact('contact_temp')); }
    public function show($id)
    {
      echo "string";
    }
    public function edit()
    {
    $contact_temp =  BlockModel::findOrFail('1');
    return view('admin.contact_edit',compact('contact_temp'));
    }
    public function update(Request $request)
    {
        $contact_temp =  BlockModel::findOrFail('1');
        $contact_temp->linkfacebook= $request->txtfacebook;
        $contact_temp->linktwitter= $request->txttwitter;
        $contact_temp->linkgoogleplus= $request->txtgoogleplus;
        $contact_temp->phone1= $request->txtphone1;
        $contact_temp->phone2= $request->txtphone2;
        $contact_temp->email= $request->txtemail;
        $contact_temp->adress= $request->txtadress;
        $contact_temp->linkgooglemap= $request->txtgooglemap;
         $contact_temp->introduce= $request->txtintroduce;
       // $img_current = "public/admin/images/logo/".Request::input('img_current');
        if(!empty($request->file('txtlogo'))){
        $file_name = $request->file('txtlogo')->getClientOriginalName();
        $request->file('txtlogo')->move('public/image_upload/logo/', $file_name);
        $contact_temp->logo = $file_name;
           // Request::file('txtimage')->move('public/admin/images/logo/',$file_name);
           // if(File::exits($img_current)){
           //  File::delete($img_current);
           // }
        }else {
        $contact_temp->logo = $request->txtlogo;}
       $contact_temp->save();
       return redirect()->route('admin.block.index')->with(['flash_message'=>'Sửa thành công']);
    }
}
