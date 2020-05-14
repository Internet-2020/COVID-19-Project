<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>




<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal - All In 1 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="statics/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="statics/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="statics/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="statics/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="statics/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="statics/assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="statics/assets/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="statics/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="statics/assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="statics/assets/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="statics/assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="statics/assets/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="statics/assets/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="statics/assets/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="statics/assets/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="statics/assets/img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

  <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

  </head>
  <body>
    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +420 777 555 333 or hello@universal.com.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="hidden-xs"><a href="<?php echo Url::to(['site/logout']) ?>" data-method="post"><span class="fa fa-power-off pr5">Sign In</span></a><a href="<?php echo Url::to(['site/signup']) ?>" data-method="post"><i class="fa fa-user"></i><span class="d-none d-md-inline-block">Sign Up</span></a></div>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="email" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Not registered yet?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="statics/assets/img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="statics/assets/img/logo-small.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown active"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="<?php echo Url::to(['site/index']) ?>" class="nav-link">Option 1: Default Page</a></li>
                    <li class="dropdown-item"><a href="index2.html" class="nav-link">Option 2: Application</a></li>
                    <li class="dropdown-item"><a href="index3.html" class="nav-link">Option 3: Startup</a></li>
                    <li class="dropdown-item"><a href="index4.html" class="nav-link">Option 4: Agency</a></li>
                    <li class="dropdown-item dropdown-submenu"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown link</a>
                      <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">
                        <li class="dropdown-item"><a href="#" class="nav-link">Action</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link">Another action</a></li>
                        <li class="dropdown-item"><a href="#" class="nav-link">Something else here</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features<b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="statics/assets/img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Shortcodes</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-accordions.html" class="nav-link">Accordions</a></li>
                            <li class="nav-item"><a href="template-alerts.html" class="nav-link">Alerts</a></li>
                            <li class="nav-item"><a href="template-buttons.html" class="nav-link">Buttons</a></li>
                            <li class="nav-item"><a href="template-content-boxes.html" class="nav-link">Content boxes</a></li>
                            <li class="nav-item"><a href="template-blocks.html" class="nav-link">Horizontal blocks</a></li>
                            <li class="nav-item"><a href="template-pagination.html" class="nav-link">Pagination</a></li>
                            <li class="nav-item"><a href="template-tabs.html" class="nav-link">Tabs</a></li>
                            <li class="nav-item"><a href="template-typography.html" class="nav-link">Typography</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Header variations</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="template-header-default.html" class="nav-link">Default sticky header</a></li>
                            <li class="nav-item"><a href="template-header-nosticky.html" class="nav-link">No sticky header</a></li>
                            <li class="nav-item"><a href="template-header-light.html" class="nav-link">Light header</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Portfolio <b class="caret"></b></a>
                  <ul class="dropdown-menu megamenu">
                    <li>
                      <div class="row">
                        <div class="col-lg-6"><img src="statics/assets/img/template-homepage.png" alt="" class="img-fluid d-none d-lg-block"></div>
                        <div class="col-lg-3 col-md-6">
                          <h5>Portfolio</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="portfolio-2.html" class="nav-link">2 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-2.html" class="nav-link">2 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-3.html" class="nav-link">3 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-3.html" class="nav-link">3 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-4.html" class="nav-link">4 columns</a></li>
                            <li class="nav-item"><a href="portfolio-no-space-4.html" class="nav-link">4 columns with negative space</a></li>
                            <li class="nav-item"><a href="portfolio-detail.html" class="nav-link">Portfolio - detail</a></li>
                            <li class="nav-item"><a href="portfolio-detail-2.html" class="nav-link">Portfolio - detail 2</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <h5>About</h5>
                          <ul class="list-unstyled mb-3">
                            <li class="nav-item"><a href="about.html" class="nav-link">About us</a></li>
                            <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                            <li class="nav-item"><a href="team-member.html" class="nav-link">Team member</a></li>
                            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                          </ul>
                          <h5>Marketing</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
                <li class="nav-item dropdown large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">MESSAGEBOX<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="<?php echo Url::to(['hlw-firstlevelmessage/index']) ?>" class="nav-link">CHECK OUT</a></li>
                    
                    <li class="dropdown-item"><a href="<?php echo Url::to(['hlw-firstlevelmessage/create']) ?>" class="nav-link">HAVE A MESSAGE</a></li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contact <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="contact.html" class="nav-link">Contact option 1</a></li>
                    <li class="dropdown-item"><a href="contact2.html" class="nav-link">Contact option 2</a></li>
                    <li class="dropdown-item"><a href="contact3.html" class="nav-link">Contact option 3</a></li>
                  </ul>
                </li>
                <!-- ========== Contact dropdown end ==================-->
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->


      <!-- Begin: Content -->

      <section id="content" class="table-layout animated fadeIn">
      <?= $content ?>
      </section>
      <!-- End: Content -->



    <!-- Javascript files-->
    <script src="statics/vendor/jquery/jquery.min.js"></script>
    <script src="statics/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="statics/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="statics/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="statics/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="statics/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="statics/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="statics/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="statics/assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="statics/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="statics/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="statics/assets/js/front.js"></script>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

 
 <script type="text/javascript">
 <?php $this->beginBlock('js_end') ?>
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();

    var msgListing = $('#message-table > tbody > tr > td');
    var msgCheckbox = $('#message-table > tbody > tr input[type=checkbox]');

    // on message table checkbox click, toggle highlighted class
    msgCheckbox.on('click', function() {
      $(this).parents('tr').toggleClass('highlight');
    });

    // on message table row click, redirect page. Unless target was a checkbox
    msgListing.not(":first-child").on('click', function(e) {

      // stop event bubble if clicked item is not a checkbox
      e.stopPropagation();
      e.preventDefault();

      // Redirect to message compose page if clicked item is not a checkbox
      window.location = "pages_compose.html";
    });

    // On button click display quick compose message form
    $('#quick-compose').on('click', function() {

      // Admin Dock Plugin
      $('.quick-compose-form').dockmodal({
        minimizedWidth: 260,
        width: 470,
        height: 480,
        title: 'Compose Message',
        initialState: "docked",
        buttons: [{
          html: "Send",
          buttonClass: "btn btn-primary btn-sm",
          click: function(e, dialog) {
            // do something when the button is clicked
            dialog.dockmodal("close");

            // after dialog closes fire a success notification
            setTimeout(function() {
              msgCallback();
            }, 500);
          }
        }]
      });
    });

    // example email compose success notification
    function msgCallback() {
      (new PNotify({
        title: 'Message Success!',
        text: 'Your message has been <b>Sent.</b>',
        hide: false,
        type: 'success',
        addclass: "mt50",
        buttons: {
          closer: false,
          sticker: false
        },
        history: {
          history: false
        }
      }));
    };

    // Init Summernote
    $('.summernote-quick').summernote({
      height: 275, //set editable area's height
      focus: false, //set focus editable area after Initialize summernote
      toolbar: [
        ['style', ['bold', 'italic', 'underline', ]],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
      ]
    });

  });
  <?php $this->endBlock() ?>
  </script>
  <?php $this->registerJs($this->blocks['js_end'], yii\web\View::POS_LOAD) ?>
  
  <!-- END: PAGE SCRIPTS -->
<?php $this->endBody() ?>

  </body>
</html>

<?php $this->endPage() ?>



