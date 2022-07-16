@csrf
    <div class="row">
        <div class="col-sm-7 card p-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên của sản phẩm</label>
                <input type="text" class="form-control" name="a_name" value="{{ old('a_name', $article->a_name ?? '') }}">
                @if($errors->first('a_name'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_name') }}</small>
                @endif 
            </div>

            <div class="form-group">
                <label for="exampleInputEmaill">Danh mục</label>
                <select name="a_menu_id" class="form-control" id="">
                    <option value="">_____Thuộc Menu_____</option>
                    @foreach ($menus as $item)
                        <option value="{{ $item->id }}" 
                        {{ old('a_menu_id', $article->a_menu_id ?? 0) == $item->id ? "selected" : "" }}>
                        {{ $item->mn_name }}</option>
                    @endforeach
                </select>
                @if($errors->first('a_menu_id'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_menu_id') }}</small>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputEmaill">Tags</label>
                <select name="tags[]" class="form-control js-tags" id="" multiple>
                    <option value="">_____Tags_____</option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}" {{ in_array($tag->id, $tagsOld) ? "selected" : "" }}>{{ $tag->t_name }}</option>
                    @endforeach
                </select>   
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea  class="form-control" name="a_description" id = "" cols="10" rows = "4">{{ old('a_description', $article->a_description ?? '') }}</textarea>
                @if($errors->first('a_description'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_description') }}</small>
                @endif 
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <textarea  class="form-control" name="a_content" id="" cols="50" rows = "15">{{ old('a_content', $article->a_content ?? '') }}</textarea>
                @if($errors->first('a_content'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('a_content') }}</small>
                @endif 
            </div>
        </div>

        <div class = "col-sm-5 card p-3">
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" accept="image/*" id="customFile" name="a_avatar">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            @if(isset($article) && $article->a_avatar)
                <img src = "{{ pare_url_file($article->a_avatar) }}" class = "img-thumbnail" style = "width: 100%; height: auto; max-width: 100%; padding-top: 5px">
            @endif
        </div>

    </div>