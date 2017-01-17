@extends('layouts.blog')

@section('container')
    <h1>Posts - Listado</h1>
    <a href="{{ route('postsCreate') }}" class="btn btn-default">Nuevo post</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <a href="{{ route('postsShow', ['id' => $post->id]) }}">Ver</a>
                        <a href="{{ route('postsDelete', ['id' => $post->id]) }}">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection