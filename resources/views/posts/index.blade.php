@extends('layouts.layout', ['title' => "Main"])

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Results of search "<?=$_GET['search']?>"</h2>
            @if(count($posts)>1)
                <p class="lead">Find {{ count($posts) }} posts</p>
            @else
                <p class="lead">Find {{ count($posts) }} post</p>
            @endif
        @else
            <h2>The "<?=htmlspecialchars($_GET['search'])?>" search request find nothing</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Show all the posts</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header">{{ $post->short_title }}</div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url({{ $post->img ?? asset('img/default.jpg') }})"></div>
                    <div class="card-author">Author: {{ $post->name }}</div>
                    <a href="{{ route('post.show', ['id' => $post->post_id]) }}" class="btn btn-outline-primary">Show the post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @if(!isset($_GET['search']))
    {{ $posts->links() }}
    @endif
@endsection
