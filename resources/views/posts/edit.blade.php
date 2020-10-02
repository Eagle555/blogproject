@extends('layouts.layout', ['title' => "Edit the post №$post->post_id"])

@section('content')
    <form action=" {{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h3>Change the post</h3>
       @include('posts.parts.form')

        <input type="submit" value="Edit post" class="btn btn-outline-primary">
    </form>
@endsection

