@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <a href="{{route('admin.posts.create')}}">
          <button class="btn btn-primary" type="button" name="button">
            Scrivi un nuovo post
          </button>

        </a>
      </div>
    </div>
    <div class="row justify-content-center">
      @foreach ($posts as $post)

        <div class="col-md-3">
          <div class="card mt-3">
            <div class="card-header">

              <a class="mr-5 text-capitalize" href="{{route('admin.posts.show', ['post' => $post->id])}}">
                {{ $post->title }}
              </a>
            </div>

            <div class="card-body">
              {{$post->content}}
              <div class="row justify-content-center mt-5">
                <a class="mr-5" href="{{route('admin.posts.edit', ['post' => $post->id])}}">
                  <button class="btn btn-primary" type="button" name="button">Modifica</button>
                </a>
                <form class="" action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-primary" name="button">Cancella</button>
                </form>
              </div>
            </div>
          </div>
        </div>


      @endforeach
    </div>
  </div>

@endsection
