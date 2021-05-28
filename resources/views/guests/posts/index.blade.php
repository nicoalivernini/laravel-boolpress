@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
  @foreach($posts as $post)
    <div class="col-md-3">
      <div class="card">
          <div class="card-header">{{ $post->title }}</div>
          <div class="card-body">{{ $post->content }}</div>
          <a href="{{ route('posts.show', ['slug' => $post->slug])}}"><button class="btn btn-primary">Leggi di più</button></a>
      </div>
    </div>
  @endforeach
</div>

@endsection
