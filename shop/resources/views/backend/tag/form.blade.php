    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên của tag</label>
        <input type="text" class="form-control" name="t_name" value="{{ old('t_name', $tag->t_name ?? '') }}">
        @if($errors->first('t_name'))
        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('t_name') }}</small>
        @endif 
    </div>