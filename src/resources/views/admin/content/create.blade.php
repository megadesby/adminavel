@extends('megadesby/adminavel::admin.admin')
@section('content')
    <h1>BIR.BY admin/create</h1>
    {!! Form::open(['route' => 'admin.content.index']) !!}
    <div class="form-group">
        {!! Form::label('Name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content', 'Content:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control', 'id' => 'tinytextarea', 'rows' => 25, 'cols' => 40]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'tinytextarea' );
    </script>
@stop
