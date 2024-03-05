<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product=Product::orderByDesc('created_at')->paginate(10);
        return view('admin.product.index',['products'=>$product,'category'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add',['categorys' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $text = explode(',',$request['text']);
        $images=array();
        foreach ($request->file('photo') as $photo){
            $name=$photo->getClientOriginalName();
            $photo->move('storage/products',$name);
            $images[]=$name;
        }

        $product = new Product();
        $product->category_id = $request['category'];
        $product->name = $request['title'];
        $product->text = json_encode($text);
        $product->photo = json_encode($images);
        $product->status = $request['status'];

        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.product.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.update',['product'=>$product,'categorys' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $product)
    {
        $products=Product::find($product);
        $images=array();
        foreach ($request->file('photo') as $photo){
            $name=$photo->getClientOriginalName();
            $photo->move('storage/products',$name);
            $images[]=$name;
        }
        $text = explode(',',$request['text']);
        $update=Product::where('id',$product)->update([
            'category_id' => $request['category'],
            'name' => $request['name'],
            'text' =>json_encode($text),
            'photo' => json_encode($images),
            'status' => $request['status']
        ]);

        foreach (json_decode($products->photo) as $photo){
            File::delete(public_path('storage/products/'.$photo));
        }

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        foreach (json_decode($product->photo) as $photo){
            File::delete(public_path('storage/products/'.$photo));
        }
        $delte = $product->delete();
        return redirect()->route('product.index');
    }
}
