@extends('admin.index')
@section('content')
    <form action="{{ url('/admin/home/update') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @foreach($formData as $inputData)
            <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                        <label for="title">{{ $titles[$inputData->code] }}</label>
                        @if($inputData->input == 'textarea')
                            <textarea id="Description" class="form-control" name="{{ $inputData->code }}" rows="3">{{ $inputData->content }}</textarea>
                        @elseif($inputData->input == 'file')
                            <input type="{{ $inputData->input }}" class="form-control" id="{{ $inputData->code }}" name="{{ $inputData->code }}" placeholder="{{ $titles[$inputData->code] }}">
                            <img src="/img/static/{{ $inputData->content }}">
                        @else
                            <input type="{{ $inputData->input }}" class="form-control" id="{{ $inputData->code }}" name="{{ $inputData->code }}" placeholder="{{ $titles[$inputData->code] }}" value="{{ $inputData->content }}">
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
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

    </script>
@stop