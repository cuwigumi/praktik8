<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Customers;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function about()
    {
        return view('toko/about');
    }

    public function admin()
    {
        $products = product::all();
        return view('toko/admin', compact('products'));
    }

    public function customers()
    {
        $customers = Customers::all();
        return view('toko/customers', compact('customers'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'product created successfully');
    }

    public function edit(product $product)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('produk.admin')->with('success', 'product deleted successfully');

    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('produk.admin')->with('success', 'product updated successfully');
    }
}
