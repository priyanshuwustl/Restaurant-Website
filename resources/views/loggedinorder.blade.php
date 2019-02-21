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
            <div class="container">
                <h2><em>Our Menu</em></h2>
                <?php foreach ($dishes as $dish):
                  $num=$dish->id;

                  if ((($num-1)%3)==0):
                    echo  "<div class='row box-2'>";
                  endif; ?>

                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img0{{ $dish->id }}.jpg" src="images/page-4_img0{{ $dish->id }}.jpg" alt=""></div></div>
                        <h3>{{ $dish->name }}</h3>
                        <a href="/order/{{ $dish-> id }}" class="btn">Order one item</a>
                    </div>

                <?php if ((($num)%3)==0):
                  echo  "</div>";
                endif;

              endforeach; ?>
            </div>
        </section>
    </main>

      <footer>
    </footer>
</div>

<script src="{{ asset('js/script.js') }}"></script></body>
</html>
