<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class postscontroller extends Controller
{

    public function showAll()
    {
        $products=Product::all();
        return view('product', ['products'=>$products]);

    }

    function create()
    {
        return view('createProduct');
    }

    function save()
    {

        $product_info= request()->all();  # get request arguments
        $product = new Product();
        $product->title= $product_info['title'];
        $product->description= $product_info['description'];
        $product->save();
    //   dd($product);
        return to_route('product');

    }

    function delete($id){
        $product = Product::findOrfail($id);
        $product->delete();
        return to_route('product');
    }

    
    function edit($id){

        $product=Product::findOrfail($id);
        $product->all();
        return view('edit',['product'=>$product]);
    }


    function updateproduct ($id){
     
        $newProduct= request()->all();   #get data from form
        $product=Product::findOrfail($id);  #get old one
        $product->title = $newProduct['title'];
        $product->description = $newProduct['description'];
        $product->save();
        return to_route('product');
    }

}