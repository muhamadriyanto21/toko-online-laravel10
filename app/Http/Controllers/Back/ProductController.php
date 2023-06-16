<?php

namespace App\Http\Controllers\Back;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('back.product.index', compact('products'));
    }

    public function create() {
        return view('back.product.create');
    }

    public function store(Request $request) {
        // dd($request);
        Product::create([
            'name' => $request->name,
           'price' => $request->price,
           'description' => $request->description,
         ]);
        return redirect()->route('product');
    }

     public function edit($id) {
        $product = Product::find($id);
        return view('back.product.edit', compact('product'));
    }
    public function update(Request $request, $id) {
        // dd($request);
        Product::where('id', $id)->update([
            'name' => $request->name,
           'price' => $request->price,
           'description' => $request->description,
         ]);
        return redirect()->route('product');
    }

    public function detail($id) {
        $product = Product::find($id);
        return view('back.product.detail', compact('product'));
    }

    public function delete($id) {
        Product::destroy($id);
        return redirect()->route('product');
    }
}
