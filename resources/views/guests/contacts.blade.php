@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3>Contattaci</h3>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <form class="" action="{{route('contact')}}" method="post">
          @csrf
          @method('POST')

          <div class="form-group">
            <label for="name">Nome</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name" value="{{old('name')}}">
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{old('email')}}">
              @error('email')
                <small class="text-danger">{{ $message }}</small>
              @enderror
          </div>


              <div class="form-group">
                <label for="title">Soggetto</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">
                  @error('title')
                    <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="content">Messaggio</label>
                  <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="8" cols="80">{{old('content')}}</textarea>
                    @error('content')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <button type="submit" class="btn btn-primary" name="button">Invia</button>

                  </form>
                </div>
              </div>
  </div>
  </div>
@endsection
