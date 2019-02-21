<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;


class SessionsController extends Controller
{

  public function create()
  {

      return view('/login');

  }

  public function destroy()
  {

      auth()->logout();

      return redirect()->home();

  }

  public function store()
  {

    if(!auth()->attempt(request(['email', 'password']))){
        return back()->withError([
          'message' => 'Wrong email or password'
        ]);
    }

    // $user = User::create(request(['name', 'email', 'password']));
    //
    // auth()->login($user);

    return redirect()->home();



  }

}
