@extends('admin.app')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card-body p-0 b">
                <div class="table-responsive">
                    <table class="table table-light">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr class="col-2">
                                <th>{{$messages->currentPage()-1)*$messages->perpage()+($loop -> index+1}}</th>
                                <td>{{$message->name ?? "Yo'q"}}</td>
                                <td>{{$message->product->name ?? "Yo'q"}}</td>
                                <td class="td">{{$message->phone}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$messages->render()}}
                </div>
            </div>
        </div>
@endsection
