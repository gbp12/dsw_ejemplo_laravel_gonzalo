<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda online";
        $viewData["productos"] = $this->getAllProducts();
        return view("products.index")->with("viewData", $viewData);
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda online";
        $viewData["producto"] = $this->getProductById($id);
        return view("products.edit")->with("viewData", $viewData);
    }


    public function new(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'string',
            'image' => 'required|image|mimes:jpeg,png',
        ];

        $request->validate($rules);
        $product = new Product();
        $product->name = $request->input('name');
        $product->precio = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $originalName = $file->getClientOriginalName();

            $fileName = $product->id . "_" . $originalName;

            Storage::disk('public')->put($fileName, file_get_contents($file));

            $product->url =  $fileName;

            $product->save();

            return redirect()->action('App\Http\Controllers\ProductController@index');
        }
    }





    public function create()
    {
        return view("products.create");
    }

    private function getAllProducts()
    {
        return Product::all();
    }

    private function getProductById($id)
    {
        // Use the Product model to fetch a product by its ID from the database
        return Product::find($id);
    }
}
