@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Tên của menu</label>
        <input type="text" class="form-control" name="mn_name" value="{{ old('mn_name', $menu->mn_name ?? '') }}">
        @if($errors->first('mn_name'))
        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('mn_name') }}</small>
        @endif 
    </div>