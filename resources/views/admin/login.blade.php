<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('../css_admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('../css_admin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('../css_admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{asset('../css_admin/lib/jquery-switchbutton/jquery.switchButton.css')}}" rel="stylesheet">
    <link href="{{asset('../css_admin/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{asset('../css_admin/lib/chartist/chartist.css')}}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{asset('../css_admin/css/bracket.css')}}">
  </head>

  <body>
        <div class="dropdown show">
            <div class="dropdown-menu bg-white pd-20 pd-xs-40 wd-xs-350 pos-static ft-none shadow-base show" style="margin-left: 500px; margin-top: 100px;">
              <h6 class="tx-gray-800 tx-uppercase tx-bold">Sign In</h6>
              <p class="tx-gray-600 mg-b-30">Signin using your account credentials.</p>

              <form action="" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>UserName:</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button class="btn btn-primary btn-block pd-y-10 mg-b-30">Sign In</button>
<!--                         <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                            </div>
                        </div> -->
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                        </div>
                    </form>
            </div><!-- dropdown-menu -->
          </div>

    <script src="{{asset('../css_admin/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('../css_admin/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('../css_admin/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('../css_admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{asset('../css_admin/lib/moment/moment.js')}}"></script>
    <script src="{{asset('../css_admin/lib/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('../css_admin/lib/jquery-switchbutton/jquery.switchButton.js')}}"></script>
    <script src="{{asset('../css_admin/lib/peity/jquery.peity.js')}}"></script>
    <script src="{{asset('../css_admin/lib/chartist/chartist.js')}}"></script>
    <script src="{{asset('../css_admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('../css_admin/lib/d3/d3.js')}}"></script>
    <script src="{{asset('../css_admin/lib/rickshaw/rickshaw.min.js')}}"></script>


    <script src="{{asset('../css_admin/js/bracket.js')}}"></script>
    <script src="{{asset('../css_admin/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('../css_admin/js/dashboard.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
 