<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        // return view("products.list", compact('products'));
        return view("products.list", ['products'=>$products]);
    }

    public function index_trash(){
        $products = Product::onlyTrashed()->get();
        return view("products.trash", compact('products'));
    }

    public function create(){
        $categories = Category::all();
        return view('products.new', compact('categories'));
    }

    public function store(Request $req){
        $p = new Product;
        $p->name = request("name");
        $p->description = request("description");
        $p->price = request("price");
        $p->stock = request("stock");
        $p->category_id = request("category_id");
        $p->save();
        // INSERT INTO products (name, description, price, stock, category_id) VALUES ('$this->name', '$this->description', '$this->price', '$this->stock', '$this->category_id');
        /***************File Upload ****************/
        $pImage = $req->file('image');
        $ext = $pImage->getClientOriginalExtension();
        $location = "storage/products/";
        $filename = $p->id . "-" . date("Y-m-d-h-i-s") . "." . $ext;
        $pImage->storeAs($location, $filename);
        $p->image = $filename;
        $p->save();
        // $pImage->getClientOriginalName();       -> Get Original File name
        // $pImage->getClientOriginalExtension();  -> Get File Extension
        // $pImage->getType();                     -> Get File Type
        // $pImage->getMimeType();                 -> Get File Mime Type (Category/type)
        // $pImage->getSize();                     -> Get File Size in bytes
        /***************File Upload ****************/
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        return view('products.edit', [
            'product'=> $product, 
            'categories' => $categories
    ]);
    }

    public function update($id){
        $p = Product::find($id);
        $p->name = request("name");
        $p->description = request("description");
        $p->price = request("price");
        $p->stock = request("stock");
        $p->category_id = request("category_id");
        $p->save();
        // UPDATE products SET name = '$this->name', description = '$this->description', price = '$this->price', stock = '$this->stock', category_id = '$this->category_id' WHERE id = '$this->id';
        return redirect('/products');
    }

    public function search(){
        $term = request("term");
        $products = Product::where('name', "LIKE", "%$term%")->get();
        return view('products.search', compact("products"));
    }

    public function show($id){
        $product = Product::find($id);
        return view("products.show", compact("product"));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete(); // DELETE FROM products WHERE id = $this->id;
        return redirect('/products');
    }

    public function restore($id) {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect('/products/trash');
    }

    public function delete_permanently($id) {
        $product = Product::onlyTrashed()->find($id);
        $product->forceDelete();
        return redirect('/products/trash');
    }

}
