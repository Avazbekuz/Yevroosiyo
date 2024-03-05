@extends('main.auth')
@section('link','href=css/main.css')
@section('link2','href=css/responsev.css')
@section('main')
{{--    <div class="lm">--}}
{{--        <div class="fill_height">--}}
{{--            <div class="align-items-center fill_height">--}}
{{--                <div class="col col-sm-12 mt-5 fill_height">--}}
{{--                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">--}}
{{--                        <!-- <div class="carousel-indicators">--}}
{{--                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                        </div> -->--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <img src="img/banner.webp" class="d-block w-100" alt="...">--}}
{{--                                <div class="carousel-caption d-block mb-md-5" style="text-align: left;">--}}
{{--                                    <h3 style="color: black;" class="h" >BAHOR / YOZ KOLEKSIYASI 2023</h3>--}}
{{--                                    <p style="color: white;" class="sm-fs-6 p">30% gacha chegirmaga ega bo'ling</p>--}}
{{--                                    <!-- <div class="red_button shop_now_button"><a href="#" >Batafsil</a></div> -->--}}
{{--                                    <button class="btn btn-danger b" type="button">Button</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <img src="img/yotoqxona-kategoriya.webp" class="d-block w-100" alt="...">--}}
{{--                                <div class="carousel-caption d-block mb-md-5" style="text-align: left;">--}}
{{--                                    <h3 style="color: white;" class="h">BAHOR / YOZ KOLEKSIYASI 2023</h3>--}}
{{--                                    <p style="color: white;" class="sm-fs-6 p">30% gacha chegirmaga ega bo'ling</p>--}}
{{--                                    <!-- <div class="red_button shop_now_button"><a href="#" >Batafsil</a></div> -->--}}
{{--                                    <button class="btn btn-danger b" type="button">Button</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <img src="img/photo1.jpg" class="d-block w-100" alt="...">--}}
{{--                                <div class="carousel-caption d-block mb-md-5" style="text-align: left;">--}}
{{--                                    <h3 style="color: white;" class="h">BAHOR / YOZ KOLEKSIYASI 2023</h3>--}}
{{--                                    <p style="color: white;" class="sm-fs-6 p">30% gacha chegirmaga ega bo'ling</p>--}}
{{--                                    <!-- <div class="red_button shop_now_button"><a href="#" >Batafsil</a></div> -->--}}
{{--                                    <button class="btn btn-danger b" type="button">Button</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button class="carousel-control-prev border-0 pe-auto bg-transparent text-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">--}}
{{--                            <a href="#" class="pe-auto">--}}
{{--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                            </a>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next border-0 pe-auto bg-transparent text-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">--}}
{{--                            <a href="#" class="pe-auto">--}}
{{--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                            </a>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Yangi mebellar</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group btl d-flex justify-content-center">
                           @foreach($category as $filter)
                            <li class="grid_sorting_button button" data-filter=".{{$filter->name}}">{{$filter->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                        @foreach($products as $product)
                            <div class="product-item {{$product->category->name}}">
                                <div class="product discount product_filter">
                                    <a href="{{route('show',['id'=>$product->id])}}">
                                        <div class="product_image">
                                            <img src="{{url('storage/products/'.json_decode($product->photo)[0])}}" alt="rasm">
                                        </div>
                                        <div class="product_name" style="color:black;">
                                            <h6 class="product_info" style="color: #fe4c50;">{{$product->name}}</h6>
                                            <p>
                                                @foreach(json_decode($product->text) as $text)
                                                    {{$text}}<br>
                                                @endforeach
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <form method="get">
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input class="red_button add_to_cart_button" style="border: 0px;" type="submit" value="Batafsil">
                                </form>
                            </div>
{{--                            <a href="#" class="product->iteam">--}}
{{--                                <div class="card" style="width: 18rem;">--}}
{{--                                    <img src="storage/products/{{json_decode($product->photo)[0]}}" class="card-img-top" alt="rasm">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <h5 class="card-title">{{$product->name}}</h5>--}}
{{--                                        <div class="card-text">{{$product->text}}</div>--}}
{{--                                        <form method="get">--}}
{{--                                            <input type="hidden" name="id" value="{{$product->id}}">--}}
{{--                                            <input class="red_button add_to_cart_button" style="border: 0px;" type="submit" value="Batafsil">--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
                        @endforeach
                       @if(isset($_GET['id']))
                           @include('main.showmodal')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="deal_ofthe_week">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6" style="padding: 0;">
                                <div class="deal_ofthe_week_img">
                                    <img src="{{url('storage/img/5.jpg')}}" alt="" id="deal_img">
                                </div>
                            </div>
                            <div class="col-lg-6 text-right deal_ofthe_week_col">
                                <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                                    <div class="section_title">
                                        <h2>Hafta shartnomasi</h2>
                                    </div>
                                    <ul class="timer">
                                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                            <div id="day" class="timer_num">03</div>
                                            <div class="timer_unit">Kun</div>
                                        </li>
                                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                            <div id="hour" class="timer_num">15</div>
                                            <div class="timer_unit">Soat</div>
                                        </li>
                                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                            <div id="minute" class="timer_num">45</div>
                                            <div class="timer_unit">Minut</div>
                                        </li>
                                        <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                            <div id="second" class="timer_num">23</div>
                                            <div class="timer_unit">Sekund</div>
                                        </li>
                                    </ul>
                                    <div class="red_button deal_ofthe_week_button"><a href="#">Batafsil</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
