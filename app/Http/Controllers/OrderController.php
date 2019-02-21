<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dish;
use App\User;
use App\Order;

class OrderController extends Controller
{
    protected $guarded = [];

    public function store(Dish $dish)
    {

      Order::create([
          'dish_id' => $dish->id,
          'user_id' => auth()->id()
      ]);

      return back();
    }

    public function show()
    {

        //$tasks = DB::table('tasks')->latest()->get();

        $orders = Order::all();
        $username = auth()->id();

        // return $tasks;
        return view('profile', compact('orders','username'));

    }
}
