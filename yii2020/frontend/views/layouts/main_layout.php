<?php
/**
 *Team:Internet-2020
 *Coding by 
 *李姝睿，1811485
 *周新星，1811526
 *郑羽辰，1811524
 *姜欣妮，1811482
 *侯潇，1811481
 *前台 页面布局 view层
 */

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
    <title>山河无恙 国泰民安</title>
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
              <!-- <p>Contact us on +420 777 555 333 or hello@universal.com.</p> -->
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="media-author">
                  <a href="<?php echo Url::to(['site/logout']) ?>" style="color:white" data-method="post">
                    <span class="fa fa-power-off pr5" style="font-size: 12px"><?php if(!Yii::$app->user->isGuest) echo "退出"; else echo "登录";?></span>
                  </a>
                  <a href="<?php echo Url::to(['site/signup']) ?>" style="color:white" data-method="post">
                    <i class="fa fa-user"></i>
                    <span class="d-none d-md-inline-block" style="font-size: 12px"><?php if(Yii::$app->user->isGuest) echo "注册";?></span>
                  </a>
                  <a style="font-size: 12px"><?php if(!Yii::$app->user->isGuest) echo Yii::$app->user->identity->username;?></a>
                </div>
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
          <div class="container"><img src="statics/assets/img/logo.png" alt="Universal logo" class="d-none d-md-inline-block"><img src="statics/assets/img/my_logo.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown large"><a href="<?php echo Url::to(['post/index']) ?>" class="dropdown-toggle"  style="font-size: 12px">新闻</a>
                </li>
                <li class="nav-item dropdown large"><a href="#" data-toggle="dropdown" class="dropdown-toggle"  style="font-size: 12px">可视化</a>
                  <ul class="dropdown-menu">
                      <li class="dropdown-item"><a href="<?php echo Url::to(['data/index']) ?>" class="nav-link"  style="font-size: 12px">疫情曲线</a></li>
                      <li class="dropdown-item"><a href="<?php echo Url::to(['data/china']) ?>" class="nav-link"  style="font-size: 12px">中国地图</a></li>
                      <li class="dropdown-item"><a href="<?php echo Url::to(['data/world']) ?>" class="nav-link"  style="font-size: 12px">世界地图</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown large"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="font-size: 12px">栏目</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="<?php echo Url::to(['column/science']) ?>" class="nav-link" style="font-size: 12px">科普栏目</a></li>
                    
                    <li class="dropdown-item"><a href="<?php echo Url::to(['column/prevention']) ?>" class="nav-link" style="font-size: 12px">防疫栏目</a></li>
                  </ul>
                    
                </li>
                <!-- ========== FULL WIDTH MEGAMENU ==================-->
                <li class="nav-item dropdown large"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="font-size: 12px">留言板</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="<?php echo Url::to(['firstlevelmessage/index']) ?>" class="nav-link" style="font-size: 12px">浏览</a></li>
                    
                    <li class="dropdown-item"><a href="<?php echo Url::to(['firstlevelmessage/create']) ?>" class="nav-link" style="font-size: 12px">留言</a></li>
                  </ul>
                </li>
                <!-- ========== FULL WIDTH MEGAMENU END ==================-->
                <!-- ========== Contact dropdown ==================-->
                <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle" style="font-size: 12px">作业</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="<?php echo Url::to(['task/teamwork']) ?>" class="nav-link" style="font-size: 12px">团队作业</a></li>
                    <li class="dropdown-item"><a href="<?php echo Url::to(['task/personalwork1']) ?>" class="nav-link" style="font-size: 12px">个人作业：候潇</a></li>
                    <li class="dropdown-item"><a href="<?php echo Url::to(['task/personalwork2']) ?>" class="nav-link" style="font-size: 12px">个人作业：姜欣妮</a></li>
                    <li class="dropdown-item"><a href="<?php echo Url::to(['task/personalwork3']) ?>" class="nav-link" style="font-size: 12px">个人作业：李姝睿</a></li>
                    <li class="dropdown-item"><a href="<?php echo Url::to(['task/personalwork4']) ?>" class="nav-link" style="font-size: 12px">个人作业：郑羽辰</a></li>
                    <li class="dropdown-item"><a href="<?php echo Url::to(['task/personalwork5']) ?>" class="nav-link" style="font-size: 12px">个人作业：周新星</a></li>        
                  </ul>
                </li>
                <li class="nav-item dropdown large"><a href="<?php echo Url::to(['introduction/index']) ?>" class="dropdown-toggle"  style="font-size: 12px">团队介绍</a>
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
