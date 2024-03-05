@extends('main.auth')
@section('path','../')
@section('link','href=../css/show.css')
@section('link2','href=../css/show_response.css')
@section('main')
    <div class="container single_product_container">
        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>
                                    @foreach(json_decode($product->photo) as $img)
                                        <li><img class="ac" src="{{url('storage/products/'.$img)}}" alt="" height="136" data-image="{{url('storage/products/'.$img)}}"></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background"
                                     style="background-image:url({{url('storage/products/'.json_decode($product->photo)[0])}})"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2>{{$product->category->name}} to'plami "{{$product->name}}"</h2>
                        <p>
                            Ishlab chiqaruvchidan eng yaxshi taklif!<br>
                            @foreach(json_decode($product->text) as $text)
                                {{$text}}<br>
                            @endforeach
                        </p>
                    </div>
                </div>
                <form method="get">
                    <input type="hidden" name="modal">
                    <input class="btn btn-danger mt-3 price" style="border: 0px;" type="submit" value="Narxni bilish">
                </form>
            </div>
        </div>
    </div>
    @if(isset($_GET['modal']))
        @include('main.showmodal')
    @endif
    <script>
        function active() {
            let a=document.getElementsByClassName("ac");
            a[0].classList='active'
        }
        active();
    </script>
@endsection
