@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên của keyword</label>
        <input type="text" class="form-control" name="k_name" value="{{ old('k_name', $keyword->k_name ?? '') }}">
        @if($errors->first('k_name'))
        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('k_name') }}</small>
        @endif 
    </div>