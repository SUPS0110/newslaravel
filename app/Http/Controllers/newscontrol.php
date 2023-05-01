<?php

namespace App\Http\Controllers;

use App\Models\newsmodel;
use Illuminate\Http\Request;

class newscontrol extends Controller
{
    public function save(request $req){
        $data=newsmodel::all();
        $new= new newsmodel();
        $new->title=$req->title;
        $new->content=$req->content;
        $new->image=$req->image;
        if($new->save()){
            return view("/form");
        }
        else{
            return"failed";
        }
    }
    public function index(){
        $data=newsmodel::all();
        return view('welcome',['data'=>$data]);
    }
    public function edit($id){
        $data=newsmodel::find($id);
        return view('welcome',['data'=>$data]);
    }
    public function update(Request $req){
        $update=newsmodel::find($req->id);
        $update->title=$req->title;
        $update->content=$req->content;
        $update->image=$req->image;
        if($update->save()){
            return redirect("/welcome");
        }
        else{
            return "failed";
        }
    }
}
