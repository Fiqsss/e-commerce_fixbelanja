<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $search;

    public function __construct()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function index()
    {
        $product = Product::all();
        // return response()->json($product);
        return ProductResource::collection($product);
    }
    public function getData()
    {
        return view('page.shop', ['products' => Product::latest()->paginate(12)->onEachSide(0), 'title' => 'home']);
    }

    public function searchProduct(Request $request)
    {
        $key = $request->keyword;
        $key === null ?
            $products = Product::latest()->paginate(12)->onEachSide(1)->fragment('fiqsss') :
            $products = Product::where('name', 'like', '%' . "$key" . '%')->simplePaginate(12)->onEachSide(1)->fragment('fiqsss');

        return view('page.shop')->with([
            'products' => $products,
            'search' => $key,
        ]);
    }

}