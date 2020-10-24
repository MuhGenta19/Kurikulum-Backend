@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post">
            @csrf
        <div class="form-group has-feedback{{ $errors->has('title') ? ' has->error' : '' }}">
                <label for="">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="help block">
                    <p>{{ $errors->first('title') }}</p>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

        <div class="form-group has-feedback{{ $errors->has('content') ? ' has->error' : '' }}">
                <label for="">Content</label>
                @if ($errors->has('content'))
                    <span class="help block">
                    <p>{{ $errors->first('content') }}</p>
                    </span>
                @endif
                <textarea name="content" id="" rows="5" class="form-control" placeholder="Post Content" value="{{ old('content') }}"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection