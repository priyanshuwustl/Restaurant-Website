<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
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
                        <a href="/">Maplewood Cafe</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="/">Home</a>
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

                        @if (Auth::check())
                          <li>
                            <a href="/">{{ Auth::user()->name }}</a>
                          </li>

                          <li>
                            <a href="/logout">Logout</a>
                          </li>
                        @endif


                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <main>
        <section class="well well__offset-3">
            <!-- Name: {{ $dish->name }}
            <br>
            Price: {{ $dish->price }}
            <br>
            Description: {{ $dish->description }}
            <br> -->

          <!-- <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img0{{ $dish->id }}.jpg" alt=""></div></div> -->
                <h3>{{ $dish->name }}</h3>
                <h3> Category: {{ $dish->category }}</h3>
                <h3> ID: {{ $dish->id }}</h3>
                <h3> Price: ${{ $dish->price }} </h3>
                <h3> Description: {{ $dish->description }} </h3>
                <hr>

                <h3> Comments: </h3>
                <ul class= "list-group">

                @foreach ($dish->comments as $comment)

                  <li class="list-group-item">

                    <strong>

                      {{ $comment->created_at->diffForHumans() }}:

                    </strong>

                    {{ $comment->body }}

                    -By  {{ $comment->user->name }}      (Rating: {{ $comment->rating }} out of 5!)

                  </li>

                @endforeach

              </ul>
        </section>

        @if (Auth::check())

        <hr>
        <form method="POST" action="/dishes/{{ $dish->id }}/comments">

            {{ csrf_field() }}

            <textarea name="body" placeholder="Enter comment here." required></textarea>

            <input type="number" name="rating" placeholder="Rating out of 5" required>

            <br>

            <button type="submit"> Post Comment </button>
        <form>

        @endif

        @if (count($errors))

          <ul>

            @foreach ($errors->all() as $error)

              <li> {{ $error }}</li>

            @endforeach

          </ul>

        @endif

    </main>

      <footer>
        <a href="/menu">Go back to menu</a>
    </footer>
</div>

<script src="{{ asset('js/script.js') }}"></script></body>
</html>
