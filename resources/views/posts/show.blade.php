@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <hr>
    <h4>Comments</h4> 

    @if ($post->count())
        <ul class="list-group mb-3">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">{{ $comment->body }}</li>
            @endforeach
        </ul>
    @else
        <p>No comments yet.</p>
    @endif

    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="body">Add Comment:</label>
            <textarea name="body" id="body" rows="3" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Post Comment</button>
    </form>
@endsection