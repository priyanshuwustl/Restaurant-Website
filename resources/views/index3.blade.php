@if (Auth::check())
  <a href="/loggedinorder"> You are logged in! Click here to order... </a>
@endif

@if (!Auth::check())
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
                        </li>
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
        <section class="well well__offset-3"> </section>
            <div class="container">
                <h2><em>Order From Our Menu</em></h2>
                <div class="row box-2">
                      <h5>But first, log in to your account</h5>
<!--
                        <form action = "/~shadidav/final/cafe/login.html">
                        <center><button class="button button2">Login</button> </form>

                        <form action = "/~shadidav/final/cafe/register.html">
                       <button class="button button2">Register</button> </center>
 -->
 						<P class="blocktext"><a href="/login">Login</a>
 						<P class="blocktext"><a href="/register">Register</a>
            <br><br>
                        <!-- <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img01.jpg" alt=""></div></div>
                        <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img02.jpg" alt=""></div></div>
                        <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat.</h3>
                        <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequatre. </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img03.jpg" alt=""></div></div>
                        <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequ.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="row box-2">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img04.jpg" alt=""></div></div>
                        <h3>Onteger convallis orci vel mi nelaoreet, at ornare lorem consequate. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequa.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img05.jpg" alt=""></div></div>
                        <h3>Fenteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Vestibulum volutp turpis ut massa commodo, quis aliquam massa facilisis.Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img06.jpg" alt=""></div></div>
                        <h3>Dernteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem conseasellus era nisl. </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="row box-2">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img07.jpg" alt=""></div></div>
                        <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat.</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img08.jpg" alt=""></div></div>
                        <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat.</h3>
                        <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequatre. </p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img09.jpg" alt=""></div></div>
                        <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequ.</p>
                        <a href="#" class="btn">Read more</a>
                      -->
                    </div>
                </div>
    </main>
      <footer>
    </footer>
</div>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
@endif
