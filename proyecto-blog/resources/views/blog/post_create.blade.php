@extends('layouts.blog')

@section('container')
    <h1>Nuevo Post</h1>
    <form action="{{ route('postsStore') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputTitle">Título</label>
            <input type="text" class="form-control" id="exampleInputTitle" name="title" placeholder="Título">
        </div>
        <div class="form-group">
            <label for="exampleInputArticle">Atículo</label>
            <textarea class="form-control" id="exampleInputArticle" name="article"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
        <a href="{{ route('posts') }}" class="btn btn-default">Cancelar</a>
    </form>
@endsection