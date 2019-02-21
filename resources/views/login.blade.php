@if (Auth::check())
  <a href="/"> You are logged in! Go back to home. </a>
@endif

@if (!Auth::check())
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('js/device.min.js') }}"></script>

</head>

<body>

<div class="page">
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">Maplewood Cafe</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li><!--
                        <li>
                            <a href="index-2.html">What We Do</a>
                        </li>-->
                        <li class="active">
                            <a href="/order">Order</a>
                        </li>
                        <li>
                            <a href="/contacts">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Login</em></h2>

                <!--<bug>-->
    <form method="POST" action="/login">

    {{ csrf_field() }}

    <h6><label for="email">Email:</label></h6>
    <input type="email" id="email" name="email" placeholder="Email address">

    <h6><label for="password">Password:</label></h6>
    <input type="password" id="password" name="password" placeholder="Your password">

    <!--<label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>-->

    <center><button type="submit" class="button button2">Go</button>
    </form>

    @if (count($errors))
      <hr>
      <ul>
        @foreach ($errors->all() as $error)
          <li> {{ $error }}</li>
        @endforeach
      </ul>
    @endif
<!--</bug>-->
@endif
