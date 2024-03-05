<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $product=Product::orderBy('id', 'DESC')->get();
        return view('main.index',['products'=>$product,'category'=>Category::all()]);
    }

    public function show(Product $id)
    {
        return view('main.show', ['product' => $id]);
    }
}
