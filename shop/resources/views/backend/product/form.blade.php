@csrf
    <div class="row">
        <div class="col-sm-7 card p-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên của sản phẩm</label>
                <input type="text" class="form-control" name="pro_name" value="{{ old('pro_name', $product->pro_name ?? '') }}">
                @if($errors->first('pro_name'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_name') }}</small>
                @endif 
            </div>

            <div class="form-group">
                <label for="exampleInputEmaill">Danh mục</label>
                <select name="pro_category_id" class="form-control" id="">
                    <option value="">_____Thuộc danh mục_____</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" 
                        {{ old('pro_category_id', $product->pro_category_id ?? 0) == $item->id ? "selected" : "" }}>
                        {{ $item->c_name }}</option>
                    @endforeach
                </select>
                @if($errors->first('pro_category_id'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_category_id') }}</small>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Giá của sản phẩm</label>
                <input type="text" class="form-control" name="pro_price" value="{{ old('pro_price', $product->pro_price ?? 0) }}">
                @if($errors->first('pro_price'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_price') }}</small>
                @endif 
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Số lượng</label>
                <input type="text" class="form-control" name="pro_number" value="{{ old('pro_number', $product->pro_number ?? 0) }}">
                @if($errors->first('pro_number'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_number') }}</small>
                @endif 
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea  class="form-control" name="pro_description" id = "" cols="30" rows = "5">{{ old('pro_description', $product->pro_description ?? '') }}</textarea>
                @if($errors->first('pro_description'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_description') }}</small>
                @endif 
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea  class="form-control" name="pro_content" id = "" cols="20" rows = "3">{{ old('pro_content', $product->pro_content ?? '') }}</textarea>
                @if($errors->first('pro_content'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('pro_content') }}</small>
                @endif 
            </div>
        </div>

        <div class = "col-sm-5 card p-3">
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" accept="image/*" id="customFile" name="pro_avatar">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
                @if(isset($product) && $product->pro_avatar)
                    <img src = "{{ pare_url_file($product->pro_avatar) }}" class = "img-thumbnail" style = "width: 100%; height: auto; max-width: 100%; padding-top: 5px">
                @endif
        </div>
    </div>