@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-header">
                    <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
                    
                        <div class=" float-right">
                        <form action="{{ route('post.destroy', $post) }}" method="post">
                            @csrf
                        <a href="{{ route('post.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        </div>
                    </div>

                    <div class="card-body">
                        <p>{{ substr($post->content, 0, 100) }}</p>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection