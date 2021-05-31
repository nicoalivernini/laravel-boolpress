@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Nuovo Tag</h3>
    </div>
  </div>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="{{route('admin.tags.update', ['tag' => $tag->id])}}" method="POST">
          @csrf
          @method('PATCH')

          <div class="form-group">
            <label for="name">name</label>
            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ $tag->name }}">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>


          <button class="btn btn-primary" type="submit">Salva</button>
        </form>
        <a href="{{route('admin.tags.index')}}"><button class="btn btn-primary">Torna indietro</button></a>
      </div>
  </div>
</div>
@endsection
