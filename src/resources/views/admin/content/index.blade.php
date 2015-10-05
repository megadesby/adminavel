@extends('megadesby/adminavel::admin.admin')

@section('content')

    <h1>BIR.BY admin/content</h1>

    <a href="{{route('admin.content.create')}}" class="btn btn-success">Добавить контент</a>

    <hr>

    <table class="table table-striped table-bordered table-hover">

        <thead>
        <tr class="bg-info">
            <th>Id</th>
            <th>Name</th>
            <th>Content</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>

        <tbody>

        @foreach ($contents as $content)
            <tr>
                <td>{{ $content->id }}</td>
                <td>{{ $content->name }}</td>
                <td>{{ $content->content }}</td>
                <td><a href="{{route('admin.content.show',$content->id)}}" class="btn btn-primary">Просмотреть</a></td>
                <td><a href="{{route('admin.content.edit',$content->id)}}" class="btn btn-warning">Изменить</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['admin.content.destroy', $content->id]]) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

@endsection