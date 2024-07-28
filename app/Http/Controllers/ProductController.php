<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::query()->get();
        return view('admin.product.index', [
            'products' => $products,
        ]);
    }

   
    public function create()
    {
        //
        $suppliers = Supplier::query()->get();
        return view('admin.product.create',[
            'suppliers' => $suppliers,
        ]);
    }

   
    public function store(Request $request ,StoreProductRequest $requestStore)
    {
        $rules = $requestStore->rules();
        Product::query()->create($request->validate($rules));
        
        return view('admin.product.index');
    }

  
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        
    }
}
