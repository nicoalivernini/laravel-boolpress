@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @foreach($posts as $post)
        <div class="col-md-3">
          <div class="card">
            <a href="{{route('admin.posts.show', ['post' => $post->slug])}}">
              <div class="card-header"><h3>{{ $post->title }}</h3></div>
              <div class="card-body">
                <p>{{ $post->content }}</p>
                <div class="">
                  <a href="{{ route('admin.posts.edit', ['post' => $post->id])}}"><button>Modifica</button></a>
                  <form class="form-delete" action="{{ route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="" value="Cancella">
                  </form>
                </div>
              </div>
            </a>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row text-center pt-4">
      <div class="col-md-12">
        <a href="{{route('admin.posts.create')}}"><button>Crea post</button></a>
      </div>
    </div>
</div>
@endsection
