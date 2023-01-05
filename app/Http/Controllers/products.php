<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\products as productsModel;

class products extends Controller
{
    public function index(){
        $product = productsModel::all();
        return view('index',compact('product'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            "title"=> "required|min:2"
        ]);
        DB::table("products")->insert([
            "title"=> $request->title,
            "discription"=>$request->discription
        ]);
        return redirect("index");
    }

    public function delete($id){
        DB::table("products")->delete($id);
        return redirect("index");
    }

    public function edit($id){
        $product = DB::table("products")->find($id);
        return view("edit" ,compact('product'));
    }

    public function update(Request $request){
        $request->validate([
            "title"=> "required|min:2|max:20",
            "discription"=> "required|min:2"
        ]);
        DB::table("products")->where("id",$request->id)->update([
            "title"=>$request->title,
            "discription"=>$request->discription
        ]);
        return redirect("index");
    }
}