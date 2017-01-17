@extends('layouts.blog')

@section('head')
    <script>
        $(document).ready(function () {
            $('#viewForm').on('click', function () {
                $('#newComment').toggle();
            });
        });
    </script>
@endsection

@section('container')
    <h1>Post Id: {{ $post->id }}</h1>
    <div class="form-group">
        <label>Título</label>
        {{ $post->title }}
    </div>
    <div class="form-group">
        <label>Atículo</label>
        {{ $post->article }}
    </div>
    <a href="{{ route('posts') }}" class="btn btn-default">Volver</a>
    <a href="#" id="viewForm" class="btn btn-default">Nuevo comentario</a>

    <!-- new comments -->
    <div id="newComment" style="display: none">
        <br><br>
        <form action="{{ route('commentsStore') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="exampleInputComment">Comentario</label>
                <input class="form-control" id="exampleInputComment" name="comment">
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>

    <!-- Comments -->
    @include('blog.comments')

@endsection