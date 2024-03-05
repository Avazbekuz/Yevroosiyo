@extends('admin.app')
@section('link','../../')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div style="background-color: white; border-radius: 5px; align-items: center; margin-left: 100px; height: auto; width: 600px;">
                <div style="margin-left: 20px; padding-top: 20px;">
                    <h1>{{$product->category->name}}</h1>
                    <h1>{{$product->name}}</h1>
                    {!!html_entity_decode($product->text)!!}
                    <div style="display: flex; align-items: center; flex-wrap: wrap;">
                        @foreach(json_decode($product->photo) as $photo)
                            <img src="{{url('storage/products/'.$photo)}}" alt="rasm" width="100" height="100">
                        @endforeach
                    </div>
                    <div style="margin-top: 20px; padding-bottom: 20px;">
                        <a href="{{route('product.index')}}" class="btn btn-info">Chiqish</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
