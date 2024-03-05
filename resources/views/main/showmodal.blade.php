@if(isset($products))
    @foreach($products as $product)
        @if($product->id==$_GET['id'])
            <div style="opacity: 0.5; background-color: black; outline: 0; width: 100%;height: 100%; position: fixed; left: 0; top: 0; z-index: 1049;"></div>
                <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-labelledby="exampleModalToggleLabel" role="dialog" aria-modal="true" style="display: block;">
                    <div class="modal-dialog" role="dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Model: {{$product->name}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <a href="/" style="color: black;"><span aria-hidden="true">×</span></a>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="show_modal_img">
                                                <img src="{{url('storage/products/'.json_decode($product->photo)[0])}}" alt="" class="modal-img">
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="show_text">
                                                <h6 class="product_info">{{$product->name}}</h6>
                                                <a href="{{route('show',['id'=>$product->id])}}">
                                                    @foreach(json_decode($product->text) as $text)
                                                        {{$text}}<br>
                                                    @endforeach
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col mt-3">
                                        <h5>To'liqroq ma`lumot olmoqchi bo'lsangiz quyidagi raqamlarga qo'ng'iroq qiling</h5>
                                        <strong>+998-93-971-55-33</strong> <br> <strong>+998-91-107-55-33</strong><br>
                                        <h5>Yoki: Ma`lumotlaringizni qoldirsangiz o'zimiz aloqaga chiqamiz</h5>
                                        <form method="post" action="{{route('massage.store')}}">
                                            @method("POST")
                                            @csrf
                                            <div class="form-row">
                                                <input type="hidden" name="id" value="{{$product->id}}">
                                                <div class="form-group col-12">
                                                    <label for="inputEmail4">Ismiz:</label>
                                                    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Ismiz" pattern="[A-Za-z]+}" required>
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="inputPassword4">Telefon raqamingiz: +998</label>
                                                    <input type="tel" id="inputPassword4" class="form-control" name="phone" pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/" class="btn btn-secondary">Yopish</a>
                                                <input type="submit" class="btn btn-danger" value="Yuborish">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
    @endforeach
@else
    <div style="opacity: 0.5; background-color: black; outline: 0; width: 100%;height: 100%; position: fixed; left: 0; top: 0; z-index: 1049;"></div>
    <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-labelledby="exampleModalToggleLabel" role="dialog" aria-modal="true" style="display: block;">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Model: {{$product->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <a href="{{route('show',['id'=>$product->id])}}" style="color: black;"><span aria-hidden="true">×</span></a>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="show_modal_img">
                                    <img src="{{url('storage/products/'.json_decode($product->photo)[0])}}" alt="" class="modal-img">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="show_text">
                                    <h6 class="product_info">{{$product->name}}</h6>
                                    <a href="{{route('show',['id'=>$product->id])}}">
                                        @foreach(json_decode($product->text) as $text)
                                            {{$text}}<br>
                                        @endforeach
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <h5>To'liqroq ma`lumot olmoqchi bo'lsangiz quyidagi raqamlarga qo'ng'iroq qiling</h5>
                            <strong>+998-93-971-55-33</strong> <br> <strong>+998-91-107-55-33</strong><br>
                            <h5>Yoki: Ma`lumotlaringizni qoldirsangiz o'zimiz aloqaga chiqamiz</h5>
                            <form method="post" action="{{route('massage.store')}}">
                                        @method("POST")
                                        @csrf
                                        <div class="form-row">
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <div class="form-group col-12">
                                                <label for="inputEmail4">Ismiz:</label>
                                                <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Ismiz" pattern="[A-Za-z]+}" required>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="inputPassword4">Telefon raqamingiz: +998</label>
                                                <input type="tel" id="inputPassword4" class="form-control" name="phone" pattern="[0-9]{2}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{route('show',['id'=>$product->id])}}" class="btn btn-secondary">Yopish</a>
                                            <input type="submit" class="btn btn-danger" value="Yuborish">
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
