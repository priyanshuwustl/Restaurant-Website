<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Dish;

class DishesController extends Controller
{
  public function index(){
    //$tasks = DB::table('tasks')->latest()->get();

    $dishes = Dish::all();

    // return $tasks;
    return view('menu', compact('dishes'));
  }

  public function show($id){
    //$task = DB::table('tasks')->find($id);

    $dish = Dish::find($id);

    // return $task;
    return view('showdish', compact('dish'));
  }
}
