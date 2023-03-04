<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = products::all();

        return view('products.table', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
    public function edit($id)
    {
        $product = products::find($id);
        return view('products.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $products = new products([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);
        $products->save();
        return redirect('/products')->with('success', 'Product saved!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $products = products::find($id);
        $products->name = $request->get('name');
        $products->price = $request->get('price');
        $products->save();

        return redirect('/products')->with('success', 'Product updated!');
    }
}
