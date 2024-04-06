<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function getAllProducts(){
        $product = Products::all();
        return view('products' , ['products' => $product]);
    }
    function deleteProduct($id){
        $product = Products::find($id);
        if ($product) {
            # code...
            $product->delete();
            return redirect()->back()->with('success' , 'Xoá thành công');
        }
    }
    function addProduct(Request $request){
        Products::create(
            [
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]);

            return redirect()->back()->with('success', 'Tạo thành công');
    }
    function update(){

    }
}
