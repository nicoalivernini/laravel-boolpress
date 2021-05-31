@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @foreach($tags as $tag)
        <div class="col-md-3">
          <div class="card">
            <div class="card-header"><a href="{{route('admin.tags.show', ['tag' => $tag->id])}}"><h3>{{ $tag->name }}</h3></a></div>
            <div class="card-body">
              <div class="">
                <a href="{{ route('admin.tags.edit', ['tag' => $tag->id])}}"><button class="btn btn-primary">Modifica</button></a>
                <form class="form-delete" action="{{ route('admin.tags.destroy', ['tag' => $tag->id])}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="" value="Cancella">
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row text-center pt-4">
      <div class="col-md-12">
        <a href="{{route('admin.tags.create')}}"><button class="btn btn-primary">Crea tags</button></a>
        <a href="{{route('admin.index')}}"><button class="btn btn-primary">Torna indietro</button></a>
      </div>
    </div>
</div>
@endsection
