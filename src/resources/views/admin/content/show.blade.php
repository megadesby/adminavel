@extends('megadesby/adminavel::admin.admin')
@section('content')
    <h1>BIR.BY content/{{$content->id}}</h1>

    <form class="form-horizontal">

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder={{$content->name}} readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="content" class="col-sm-2 control-label">Content</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="content" placeholder={{$content->content}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ route('admin.content.index')}}" class="btn btn-primary">Назад</a>
            </div>
        </div>
    </form>
@stop