@extends('layouts.app')

@section('content')
  <div class="container main-guest-post-show">
    <div class="row justify-content-center">

        <div class="col-md-6">

          <h1 class="text-capitalize">{{$post->title}}</h1>
            @if ($post->category)
              <h4>Categoria:
              <a class="text-uppercase" href="{{ route('category.index', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a>
            @endif
          </h4>

          @if ($post->cover)
            <img class="cover" src="{{asset($post->cover)}}" alt="{{$post->title}}">
          @endif

          <p>{{$post->content}}</p>

          <div class="">
            @foreach ($post->tags as $tag)
              <a href="{{ route('tag.index', ['slug' => $tag->slug])}}">#{{$tag->name}}</a>
            @endforeach
          </div>

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
