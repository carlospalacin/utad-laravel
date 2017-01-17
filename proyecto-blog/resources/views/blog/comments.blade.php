<h2>Comments</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->comment }}</td>
                <td>
                    <a href="{{ route('commentsDelete', ['id' => $comment->id]) }}">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>