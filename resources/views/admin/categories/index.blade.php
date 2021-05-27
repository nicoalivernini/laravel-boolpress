@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      @foreach($categories as $category)
        <div class="col-md-3">
          <div class="card">
            <div class="card-header"><h3>{{ $category->name }}</h3></div>
            <div class="card-body">
              <div class="">
                <a href="{{ route('admin.categories.edit', ['category' => $category->id])}}"><button>Modifica</button></a>
                <form class="form-delete" action="{{ route('admin.categories.destroy', ['category' => $category->id])}}" method="POST">
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
        <a href="{{route('admin.categories.create')}}"><button>Crea Categoria</button></a>
      </div>
    </div>
</div>
@endsection
