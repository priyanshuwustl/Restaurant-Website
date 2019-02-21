<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('css/grid.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/contact-form.css')); ?>">

    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-migrate-1.2.1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/device.min.js')); ?>"></script>
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
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                          </li>
                        <li>
                            <a href="/order">Order</a>
                        </li>
                        <li class="active">
                            <a href="/contacts">Contacts</a>
                        </li>

                        <?php if(Auth::check()): ?>
                          <li>
                            <a href="/"><?php echo e(Auth::user()->name); ?></a>
                          </li>

                          <li>
                            <a href="/logout">Logout</a>
                          </li>
                        <?php endif; ?>

                    </ul>
                </nav>
            </div>
        </div>

    </header>

    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Our Location: Saint Louis</em></h2><br><br>
                <P class="blocktext"> <iframe src="http://free.timeanddate.com/clock/i5owdrvz/n605/fn4/fs24/ftb/pd2/tt0/tw1/tm1/ts1/tb4" width="199" height="58"></iframe>
              </P>
                <br>
                <iframe width="1200" height="600" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-Y7t-qm02IcRW-C7IsrqOb4&key=AIzaSyAf8mBo6djKEMsimOd3ozRTEwHboXcoFDg" allowfullscreen></iframe>
<!--
                <div class="map">
                  <div id="google-map" class="map_model"></div>
                  <ul class="map_locations">
                    <li data-x="-73.9874068" data-y="40.643180">
                      <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
                    </li>
                  </ul>
                </div>
              -->
                <div class="row box-3">
                    <div class="grid_5">
                        <h2>Contacts Form</h2>
                        <form id="contact-form" class='contact-form'>
                            <div class="contact-form-loader"></div>
                            <fieldset>
                                <label class="name">
                                    Your Name:
                                    <input type="text" name="name" placeholder="" value=""
                                           data-constraints="@Required  @JustLetters"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>

                                <label class="email">
                                    Your E-mail:
                                    <input type="text" name="email" placeholder="" value=""
                                           data-constraints="@Required  @Email"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid email.</span>
                                </label>

                                <label class="Subject">
                                    Subject:
                                    <input type="text" name="phone" placeholder="" value=""
                                           data-constraints="@Required"/>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid phone.</span>
                                </label>

                                <label class="message">
                                    Message:
                                    <textarea name="message" placeholder=""
                                              data-constraints='@Required  @Length(min=20,max=999999)'></textarea>
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>

                                <div class="btn-wr">
                                    <a class="" href="#" data-type="reset">Clear</a>
                                    <a class="" href="#" data-type="submit">Send</a>
                                </div>
                            </fieldset>
                            <div class="modal fade response-message">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">
                                                &times;
                                            </button>
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            You message has been sent! We will be in touch soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="preffix_1 grid_6">
                      <h2>Contact Information</h2>
                      <h3>We care deeply about you and your concerns. <br>Please reach out to us if you need anything at all...
                      </h3>
                      <p>Of course, in person communication is the easiest, but any form of communication works, don't hesistate!
                      <br><br> "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you
                      believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet,
                      keep looking. Don't settle. As with all matters of the heart, you'll know when you find it."
                      <br> -Steve Jobs</p>
                      <address class="address-2">
                          <div class="address_container"><p>Maplewood Cafe <br> 8547 Oxford Ln, Saint Louis, Missouri 63147</p></div>
                          <dl>
                              <dt>Telphone:</dt> <dd>(314) 642-9939</dd>
                              <!--<dt>E-mail:</dt> <dd><a href="mailto:mail@demolink.org">mail@demolink.org</a></dd>-->
                          </dl>
                        </address><br><br>
                      <h3> Countdown until Washington D.C. grand opening:</h3>
                        <h3 id="demo"></h3>

  <script>
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 1, 2018 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + " days " + hours + " hours "
      + minutes + " minutes " + seconds + " seconds ";

      // If the count down is over, write some text
      if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
      }
  }, 1000);
  </script>
  </div>
  </div>
  </div>
  </section>
  </main>
  <footer>
  </footer>
  </div>

  <script src="js/script.js"></script>
  </body>
  </html>
