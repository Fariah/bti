@extends('admin.index')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-bottom">
            {{--<div class="pull-right">--}}
                <a class="btn btn-primary btn-sm" href="{{ url('/admin/news/add') }}">Добавить новость</a>
            {{--</div>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table id="NewsGrid" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Статус</th>
                    <th>Картинка</th>
                    <th>Описание</th>
                    <th>Дата</th>
                    <th class="grid-width-50">Редактирование</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@stop
@section('scripts')
    <script>

    </script>
@stop