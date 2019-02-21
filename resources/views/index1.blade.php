<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
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
                        <li class="active">
                            <a href="/about">About</a>
                        </li>
                        <li>
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
                <h2><em>A Few</em>Words</h2>
                <div class="row row__offset-2">
                    <div class="grid_6">
                        <p class="indents-3">Located in the wonderful place of St. Louis, Missouri, Maplewood Cafe only serves the finest food for the finest people. You will not be dissapointed by our service, our food, and the entire experience of being at our restuarant.</p>
                        <div class="img"><div class="lazy-img" style="padding-bottom: 45.6140350877193%;"><img data-src="images/page-2_img01.jpg" src="images/page-2_img01.jpg" alt=""></div></div>
                    </div>
                    <div class="grid_6">
                        <p class="indents-3">Join us for your night out! You won't be dissaapointed, we promise! <br> <br> <br> </p>
                        <div class="img"><div class="lazy-img" style="padding-bottom: 45.6140350877193%;"><img data-src="images/page-2_img02.jpg" src="images/page-2_img02.jpg" alt=""></div></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="parallax parallax1" data-parallax-speed="-0.4">
            <div class="container">
              <h2><em>Good Food </em>and Big Fun</h2>
                <!--<a href="menu.html" class="btn">View our Menu</a> -->
                <div class="decoration"><a href="/menu" class="btn">View Our Menu</a></div>
                <div class="decoration"><a href="/order" class="btn">Login to Order</a></div>
            </div>
        </section>

    <!--        <section class="parallax parallax2" data-parallax-speed="-0.4">
            <div class="container">
                <h2><em>Good Food </em>and Big Fun</h2>
                <div class="row">
                    <div class="grid_6">
                        <p class="indents-3">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus era nisl auctor venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.<br><br>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convavel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor venenatis nullatibulum volutpat turpis ut massa commodoquis </p>
                    </div>
                    <div class="grid_6">
                        <p class="indents-3">Onteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.<br><br>Vestibulum volutpat turpis ut massa commodo, quis aliquam massa fertoli estibulum volutpat turpis ut massa commodo, quis aliquam massa gertoli facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol sed,pharetra venenatis nulla.</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!--<section class="well well__offset-4">
            <div class="container">
                <h2><em>Why</em>Choose Us</h2>
                <div class="row">
                    <div class="grid_4">
                        <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. </h3>
                        <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus</p>
                    </div>
                    <div class="grid_4">
                        <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. </h3>
                        <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus</p>
                    </div>
                    <div class="grid_4">
                        <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nul. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus</p>
                    </div>
                </div>
                <div class="row">
                    <div class="grid_4">
                        <h3>Onteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. </h3>
                        <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus</p>
                    </div>
                    <div class="grid_4">
                        <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. </h3>
                        <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus</p>
                    </div>
                    <div class="grid_4">
                        <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nul. </h3>
                        <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat. Phasellus</p>
                    </div>
                </div>
            </div>
        </section>-->
        <section class="parallax parallax3" data-parallax-speed="-0.4">
            <div class="container">
                <h2><em>Our Clients </em>Say</h2>
                <div class="row">
                    <div class="grid_4">
                        <h3>“Best food I’ve ever had”</h3>
                        <p>The service was absolutely incredible and Maplewood Café exceeded all expectations. This was the best food I’ve ever had, and my family and I will definitely be returning.</p>
                        <p class="client"><em>Kate Tomson</em>Client</p>
                    </div>
                    <div class="grid_4">
                        <h3>“Impeccable presentation and service”</h3>
                        <p>I couldn’t be happier with Maplewood Café; there was impeccable presentation and service during my last visit, as always. We can always trust Maplewood Café for a great night.</p>
                        <p class="client"><em>Irma King</em>Client</p>
                    </div>
                    <div class="grid_4">
                        <h3>“Highkey the greatest!”</h3>
                        <p>This restaurant is highkey the greatest. Nothing else needs to be said.</p>
                        <p class="client"><em>Linda Herman</em>Client</p>
                    </div>
                </div>
                <!--<div class="decoration"><a href="#" class="btn">Read more</a></div>-->
            </div>
        </section>
    </main>

    <footer><!--
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="tm"><a href="#"><img src="images/TM_logo.png" alt=""></a></div>-->
    </footer>
    </div>

    <script src="js/script.js"></script>
    </body>
    </html>
