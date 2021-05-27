@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

          <h1>{{$post->title}}</h1>
            @if ($post->category)
              <h4>Categoria:
              <a href="{{ route('category.index', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a>
            @endif
          </h4>

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
