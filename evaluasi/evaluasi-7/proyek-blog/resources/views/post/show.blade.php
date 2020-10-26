@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-mb-offset-2">
            <div class="card mb-4">
                <div class="card-header">{{ $post->title }} | <small>{{ $post->category->name }}</small></div>

                <div class="card-body">
                    <p>{{ $post->content }}</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Add Comment</div>

                @foreach ($post->comments()->get() as $comment)
                <div class="card-body">
                <h4>{{ $comment->user->name }} - <small>{{ $comment->created_at->diffForHumans() }}</small></h4>

                    <p>{{ $comment->message }}</p>
                    </div>
                @endforeach

                <div class="card-body">
                <form action="{{ route('post.comment.store', $post) }}" method="post" class="form-horizontal">
                        <div class="form-group">
                            @csrf
                            <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Enter your comment here..."></textarea>
                        </div>

                            <input type="submit" value="Send" class="btn btn-primary">

                    </form>
                </div>
        </div>

    </div>
</div>
@endsection