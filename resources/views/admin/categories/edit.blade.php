@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3>Modifica Categoria</h3>
      </div>
    </div>


    <div class="row justify-content-center">

        <div class="col-md-8">
          <form class="" action="{{route('admin.categories.update', ['category' => $category->id])}}" method="post">
            @csrf
            @method('PATCH')


            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name', $category->name)}}">
              @error('name')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary" name="button">Salva</button>

          </form>
        </div>

    </div>
  </div>

@endsection
