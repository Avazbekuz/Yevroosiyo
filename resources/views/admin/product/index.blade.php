@extends('admin.app')
@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                {{$products->links()}}
                <a href="{{route('product.create')}}" class="btn btn-success" style="margin-bottom: 50px;">Qo'shish</a>
            </div>

        <div class="card-body p-0 b">
            <div class="table-responsive">
                <table class="table table-light">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Categoria</th>
                        <th>Name</th>
                        <th>Text</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="col-2">
                            <th>{{$products->currentPage()-1)*$products->perpage()+($loop -> index+1}}</th>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->name}}</td>
{{--                            @dd($product->text)--}}
                            <td class="td">{{implode( "," , json_decode($product->text))}}</td>
                            <td><img src="{{url('storage/products/'.json_decode($product->photo)[0])}}" alt="rasm"></td>
                            <td><div class="action"><a href="{{route('product.show',['product'=>$product->id])}}" class="btn btn-success"><i class="ti-eye menu-icon"></i></a><a href="{{route('product.edit',['product'=>$product->id])}}" class="btn btn-info"><i class="ti-pencil menu-icon"></i></a><form action="{{route('product.destroy',['product'=>$product->id])}}" method="post">@method('DELETE') @csrf <button class="btn btn-danger"><i class="ti-trash menu-icon"></i></button></form></div></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
