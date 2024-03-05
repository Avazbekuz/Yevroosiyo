{{--{{dd($product->category->id)}}--}}
<div style="width: 800px; margin-left: auto; margin-right: auto;">
    <div class="form-group">
        <label for="exampleInputCity1">Categriya</label>
        <select name="category" class="form-select" id="inputGroupSelect01">
            <option value="0" disabled>Categriya</option>
            @foreach($categorys as $category)
                @if(isset($product) && $category===$product->category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
        @if(isset($product))
            <div class="form-group">
                <label for="exampleInputCity1">Name</label>
                <input class="form-control" required type="text" name="name" value="{{old('name') ?? $product->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Text</label>
                <textarea class="form-control" name="text">{{implode(',',json_decode($product->text))}}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Photo</label>
                <input type="file" name="photo[]" multiple="multiple" class="form-control" required accept="image/png, image/jpeg, image/svg">
            </div>
        @else
        <div class="form-group">
            <label for="exampleInputCity1">Name</label>
            <input class="form-control" type="text" name="title" value="" required>
        </div>
            <div class="form-group">
                <label for="exampleInputCity1">Text</label>
                <textarea class="form-control" name="text"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Photo</label>
                <input type="file" name="photo[]" multiple="multiple" class="form-control" required accept="image/png, image/jpeg, image/svg">
            </div>
        @endif
    <input type="hidden" name="status" value="active">
    <div class="gap-2 d-md-block">
        <a href="/product" class="btn btn-light">Chiqish</a>
        <button class="btn btn-success">Saqlash</button>
    </div>
</div>
