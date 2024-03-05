<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages=Message::orderByDesc('created_at')->paginate(10);
        return view('admin.message.message',['messages'=>$messages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request['id']){
            Message::create([
                'product_id'=>$request['id'],
                'name'=>$request['name'],
                'phone'=>$request['phone'],
            ]);
            $apiToken = "6868943340:AAHxow43fyX9HRLWIKLcyy7sr3xpAo-IR_k";
            $product=Product::find($request['id']);
            $data = [
                'chat_id' => -4016994097,
                'text' => "Ismi: ".$request['name'].",\n Telefon raqam: +998".$request['phone'].",\n Product: ".$product['name']."\n http://127.0.0.1:8000/product/".$product['id'],
            ];
            file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
            return redirect('/');
        }
        else{
            Message::create([
                'phone'=>$request['phone'],
            ]);
            $apiToken = "6868943340:AAHxow43fyX9HRLWIKLcyy7sr3xpAo-IR_k";
            $data = [
                'chat_id' => -4016994097,
                'text' => "Telefon raqam: +998".$request['phone'],
            ];
            file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?".http_build_query($data));
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
