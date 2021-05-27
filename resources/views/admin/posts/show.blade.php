@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">

          <h1>{{$post->title}}</h1>
          @if ($post->category)
            <h4>Categoria: {{$post->category->name}}</h4>
          @endif

          <p>{{$post->content}}</p>

          <div class="row justify-content-center">
            <a href="{{route('admin.posts.index')}}">
              <button class="btn btn-primary mr-5" type="button" name="button">
                Torna all'indice
              </button>

              <a class="mr-5" href="{{route('admin.posts.edit', ['post' => $post->id])}}">
                <button class="btn btn-primary" type="button" name="button">Modifica</button>
              </a>

              <form class="" action="{{route('admin.posts.destroy', ['post' => $post->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary" name="button">Cancella</button>
              </form>


            </a>
          </div>

        </div>


    </div>
  </div>

@endsection
