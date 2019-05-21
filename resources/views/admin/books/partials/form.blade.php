<form action="" method="post" enctype="multipart/form-data">
<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($book->id))
        <option value="0" @if ($book->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($book->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок книги" value="{{$book->title ?? ""}}" required><br>

<label for="">Выбрать язык поста</label>
<select name="locale" class="form-control" required>
                 <option value=" ">выбрать</option>
                 <option value="ru" {{$book->locale ?? ""}}>ru</option>
                 <option value="kk" {{$book->locale ?? ""}}>kk</option>                                                        
              </select>  
              <br>

<label for="">Slug (Уникальное значение)</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация" value="{{$book->slug ?? ""}}" readonly=""><br>



<div class="form-group">
    <label for="">Изображение</label>
    <input data-preview="#preview" name="image" type="file" id="image">{{$book->image ?? ""}}
    <img class="col-sm-6" id="preview" src="{{ $book ? asset('uploads/' . $book->image_show) : ""}}">
</div>

{{--<div class="form-group">--}}
{{--    <label for="">Изображение</label>--}}
{{--    <input data-preview="#preview" name="image" type="file" id="image">{{$book->image ?? ""}}--}}
{{--    <img class="col-sm-6" id="preview"  src="">--}}
{{--</div>--}}


<label for="">Укажите автора</label>
<textarea class="form-control" id="description_short" name="description_short">{{$book->description_short ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$book->description ?? ""}}</textarea>

<hr />

<label for="">Мета Заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$book->meta_title ?? ""}}">

<label for="">Мета Описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$book->meta_description ?? ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова" value="{{$book->meta_keyword ?? ""}}">

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">
</form>