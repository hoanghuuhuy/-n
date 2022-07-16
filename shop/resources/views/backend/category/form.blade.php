@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên của category</label>
        <input type="text" class="form-control" name="c_name" value="{{ old('c_name', $category->c_name ?? '') }}">
        @if($errors->first('c_name'))
        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('c_name') }}</small>
        @endif 
    </div>