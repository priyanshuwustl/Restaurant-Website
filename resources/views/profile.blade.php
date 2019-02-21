<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile/Order List</title>
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
        <h2> Profile Page for {{ Auth::user()->name }} </h2>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Your Orders:</em></h2>
                <?php foreach ($orders as $order):
                  if ($username==$order->user_id):

                    echo "<p>Dish ID (Check Menu): $order->dish_id</p>";

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
