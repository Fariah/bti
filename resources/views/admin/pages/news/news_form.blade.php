@extends('admin.index')
@section('content')
    <form action="@if($news) {{ url('/admin/news/edit/' . $news->id) }} @else {{ url('/admin/news/add') }} @endif" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="@if($news) {{ $news->title }} @endif">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6">
                <label for="radio">Статус</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="status" value="1" @if($news && $news->status == 1) checked @elseif(!$news) checked @endif >
                        Active
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="status" value="0" @if($news && $news->status == 0) checked @endif>
                        Disabled
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="exampleInputFile">Описание</label>
                    <textarea id="Description" class="form-control" name="description" rows="3">
                        @if($news) {{ $news->description }} @endif
                    </textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="image" id="exampleInputFile">
                    @if($news) <img src="/img/news/{{ $news->image }}"> @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <button type="button" class="btn btn-info pull-left">Назад</button>
                    <button type="submit" class="btn btn-success pull-right">Сохранить</button>
                </div>
            </div>
        </div>
    </form>

@stop
@section('scripts')
    <script>
        CKEDITOR.replace('Description');
    </script>
@stop