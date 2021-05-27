@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

          <h3>{{$post->title}}</h3>

          <p>{{$post->content}}</p>

          <div class="row justify-content-center">
            <a href="{{route('posts.index')}}">
              <button class="btn btn-primary mr-5" type="button" name="button">
                Torna all'indice
              </button>



            </a>
          </div>

        </div>


    </div>
  </div>

@endsection
