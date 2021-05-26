@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h3>Nuovo Post</h3>
      </div>
    </div>


    <div class="row justify-content-center">

        <div class="col-md-8">
          <form class="" action="{{route('admin.posts.update', ['post' => $post->id])}}" method="post">
            @csrf
            @method('PATCH')

            <div class="form-group">
              <label for="title">Title</label>
              <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title', $post->title)}}">
              @error('title')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="content">Content</label>
              <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="8" cols="80">{{old('content', $post->content)}}</textarea>
              @error('content')
                <small class="text-danger">{{ $message }}</small>
              @enderror

            </div>

            <button type="submit" class="btn btn-primary" name="button">Salva</button>

          </form>
        </div>

    </div>
  </div>

@endsection