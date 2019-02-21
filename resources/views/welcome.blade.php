<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maplewood Cafe</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/camera.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('js/device.min.js') }}"></script>
</head>

<body>
<div class="page">
    <header>
        <div class="camera_container">
            <div id="camera" class="camera_wrap">
                <div data-thumb="images/slide01_thumb.jpg" data-src="images/slide01.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide02_thumb.jpg" data-src="images/slide02.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
                <div data-thumb="images/slide03_thumb.jpg" data-src="images/slide03.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="./">Maplewood Cafe</a>
                </h1>
            </div>
        </div>

        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <li class="active">
                        <a href="./">Home</a>
                    </li>
                    <li>
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
                        <a href="/profile">{{ Auth::user()->name }}</a>
                      </li>

                      <li>
                        <a href="/logout">Logout</a>
                      </li>
                    @endif

                </ul>
            </nav>
        </div>

    </header>
    <main>
        <section class="well">
            <div class="container">
                <h2><em>Welcome</em>to Maplewood Cafe</h2>
                <div class="row">
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/page-1_img01.jpg" src="images/page-1_img01.jpg" alt=""></div></div>
                        <!--<p class="center indents-1">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
                    --></div>
                    <div class="grid_6">
                        <div class="img img__border"><div class="lazy-img" style="padding-bottom: 63.0282%;"><img data-src="images/page-1_img02.jpg" src="images/page-1_img02.jpg" alt=""></div></div>
                        <!--<p class="center indents-1">Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla. Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. sed,pharetra venenatis nulla.</p>
                    --></div>
                </div>
                <h2><em>Our</em>Cuisine</h2>
            </div>
            <div class="gallery">
                <div class="gallery_col-1">
                    <a data-fancybox-group="gallery" href="images/page-1_img03_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.96551724137931%;">
                        <img data-src="images/page-1_img03.jpg" src="images/page-1_img03.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Smoked Salmon</em></p>
                                <p>Accompanied by peppers, tomatos, and parsley</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img04_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 74.13793103448276%;">
                        <img data-src="images/page-1_img04.jpg" src="images/page-1_img04.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Prosciutto e Melone</em></p>
                                <p>Easy and refreshing starter featuring cantaloupe and cured ham</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img05_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 94.6551724137931%;">
                        <img data-src="images/page-1_img05.jpg" src="images/page-1_img05.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Spicy Tilapia with Wild Rice</em></p>
                                <p>Seasoned with lemon, herb, salt, and pepper</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery_col-2">
                    <a data-fancybox-group="gallery" href="images/page-1_img06_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 52.48322147651007%;">
                        <img data-src="images/page-1_img06.jpg" src="images/page-1_img06.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Traditional Greek Salad</em></p>
                                <p>Featuring our freshest feta cheese and toasted bagutte slices</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img07_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 55.97315436241611%;">
                        <img data-src="images/page-1_img07.jpg" src="images/page-1_img07.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Filet Mignon in Peppercorn Sauce</em></p>
                                <p>16 oz, joined with grilled asparagus, corn, tomato, squash, and onions </p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img08_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 96.10738255033557%;">
                        <img data-src="images/page-1_img08.jpg" src="images/page-1_img08.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Sashimi</em></p>
                                <p>Sliced into thin pieces</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="gallery_col-3">
                    <a data-fancybox-group="gallery" href="images/page-1_img09_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                        <img data-src="images/page-1_img09.jpg" src="images/page-1_img09.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Marinated Sirloin Steak </em></p>
                                <p>Served with garlic butter, herb fries, and cherry tomatoes</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img10_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 72.23168654173765%;">
                        <img data-src="images/page-1_img10.jpg" src="images/page-1_img10.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Ham and Blue Cheese Platter</em></p>
                                <p>Accompanied by salt and olive oil crackers</p>
                            </div>
                        </div>
                    </a>
                    <a data-fancybox-group="gallery" href="images/page-1_img11_original.jpg" class="gallery_item thumb lazy-img" style="padding-bottom: 93.69676320272572%;">
                        <img data-src="images/page-1_img11.jpg" src="images/page-1_img11.jpg" alt="">
                        <div class="gallery_overlay">
                            <div class="gallery_caption">
                                <p><em>Fettuccine Alfredo</em></p>
                                <p>With pine nuts, served with arugula salad</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="parallax parallax1" data-parallax-speed="-0.4">
            <div class="container">
                <h2><em>Our </em>Experience</h2>
                <p class="indents-2">We provide the highest quality experience and care very deeply about our customers. Our French pastries are baked daily and our drinks are made with great detail by our experienced baristas. We value the opinion of our customers which is why our manager makes sure to ask customers how they are doing and how they are enjoying their meals.</p>
                <div class="decoration"><a href="/menu" class="btn">View Our Menu</a></div>
                <div class="decoration"><a href="/order" class="btn">Login to Order</a></div>
                <!--add menu.blade.php-->
            </div>
        </section>
        <section class="well well__offset-1 bg-1">
            <div class="container">
                <h2><em>Our </em>Chefs</h2>
                <div class="row row__offset-1">
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img12.jpg" src="images/page-1_img12.jpg" alt=""></div>
                            <figcaption>Kevin Grey</figcaption>
                        </figure>
                        <h3>The French Pastry School of Kennedy-King College at City Colleges of Chicago</h3>
                      <!-- <p>Specializes in éclairs and croissants</p>-->
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img13.jpg" src="images/page-1_img13.jpg" alt=""></div>
                            <figcaption>Linda Klein</figcaption>
                        </figure>
                        <h3>Le Cordon Bleu</h3>
                          <!--<p>Enjoys making macchiatos, eggnog lattes, and cappuccinos</p>-->
                    </div>
                    <div class="grid_4">
                        <figure>
                            <div class="img lazy-img" style="padding-bottom: 101.0810810810811%;"><img data-src="images/page-1_img14.jpg" src="images/page-1_img14.jpg" alt=""></div>
                            <figcaption>Ann Shelton</figcaption>
                        </figure>
                        <h3>The Culinary Institute of America</h3>
                        <!--<p>Considers macarons to be the finest delight</p>-->
                    </div>
                </div>
              <!--  <div class="decoration"><a href="#" class="btn">Read more</a></div>-->
            </div>
        </section>
        <section class="well well__offset-2">
            <div class="container center">
                <h5>Give us a call or come by...</h5><br>
                <address class="address-1">
                    <!--<h2><bo> -->8547 Oxford Ln, Saint Louis, Missouri 63147    -
                    (314) 642-9939<!-- </bo></h2> -->
                </address>

            </div>
        </section>
      </main>
    <footer>
        <p><strong>Note:</strong> The audio tag is not supported in Internet Explorer 8 and earlier versions, or on iOS devices.</p>
        <br><br>
            <!--<div class="container">
            </div>
            <div class="tm"><a href="#"><img src="images/TM_logo.png" alt=""></a></div>-->
        <audio autoplay loop>
        <source src="audio/music.ogg" type="audio/ogg">
        <source src="audio/music.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
    </footer>
    </div>

    <script src="js/script.js"></script>
    </body>
    </html>
