<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
  public function index(string $slug)
  {
    // stampare tutti i post di una data Categoria
    $tag = Tag::with('posts')->where('slug', '=', $slug)->first();

    return view('guests.posts.index')->with('posts', $tag->posts);
  }
}
