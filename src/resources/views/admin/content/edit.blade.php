@extends('megadesby/adminavel::admin.admin')
@section('content')
    <h1>BIR.BY content/update</h1>
    {!! Form::model($content,['method' => 'PATCH','route'=>['admin.content.update',$content->id]]) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content', 'Content:') !!}
        {!! Form::text('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop