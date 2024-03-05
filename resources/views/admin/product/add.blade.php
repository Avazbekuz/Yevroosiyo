@extends('admin.app')
@section('link','../')
@section('content')
    <div class="main-panel" style="margin-top: 30px;">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @method('POST')
            @csrf
            @include('admin.product.form')
        </form>
    </div>
@endsection
