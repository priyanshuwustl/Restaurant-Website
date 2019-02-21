<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dish;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Dish $dish)
    {

      $this->validate(request(), ['body' => 'required|min:2', 'rating' => 'required|max:5']);

      Comment::create([

          'body' => request('body'),
          'dish_id' => $dish->id,
          'user_id' => auth()->id(),
          'rating' => request('rating')
      ]);

      return back();
    }
}
