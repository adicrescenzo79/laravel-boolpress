@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    </div>
    <div class="row justify-content-center">
      <div class="vol-md-8">
        {{-- @if ($post->category)
          <h4>Categoria:
          <a class="text-uppercase" href="{{ route('category.index', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a>
        @endif --}}

      </div>
      @foreach ($posts as $post)

        <div class="col-md-3">
          <div class="card mt-3">
            <div class="card-header">

              <a class="mr-5 text-capitalize" href="{{route('posts.show', ['slug' => $post->slug])}}">
                {{ $post->title }}
              </a>
            </div>

            <div class="card-body">
              {{$post->content}}
            </div>
          </div>
        </div>


      @endforeach
    </div>
  </div>

@endsection
