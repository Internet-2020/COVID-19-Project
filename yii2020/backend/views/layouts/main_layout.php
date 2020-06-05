<?php
/**
 *Team:Internet-2020
 *Coding by 
 *李姝睿，1811485
 *周新星，1811526
 *郑羽辰，1811524
 *姜欣妮，1811482
 *侯潇，1811481
 *后台 页面布局 view层
 */


/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
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
<head>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="statics/assets/img/favicon.ico" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<?php $this->beginBody() ?>


<!-- Start: Theme Preview Pane -->
  <div id="skin-toolbox">
    <div class="panel">
      <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
        <span class="panel-title"> Theme Options</span>
      </div>
      <div class="panel-body pn">
        <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
          <li class="active">
            <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
          </li>
          <li>
            <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
          </li>
          <li>
            <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
          </li>
        </ul>
        <div class="tab-content p20 ptn pb15">
          <div role="tabpanel" class="tab-pane active" id="toolbox-header">
            <form id="toolbox-header-skin">
              <h4 class="mv20">Header Skins</h4>
              <div class="skin-toolbox-swatches">
                <div class="checkbox-custom checkbox-disabled fill mb5">
                  <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                  <label for="headerSkin8">Light</label>
                </div>
                <div class="checkbox-custom fill checkbox-primary mb5">
                  <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                  <label for="headerSkin1">Primary</label>
                </div>
                <div class="checkbox-custom fill checkbox-info mb5">
                  <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                  <label for="headerSkin3">Info</label>
                </div>
                <div class="checkbox-custom fill checkbox-warning mb5">
                  <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                  <label for="headerSkin4">Warning</label>
                </div>
                <div class="checkbox-custom fill checkbox-danger mb5">
                  <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                  <label for="headerSkin5">Danger</label>
                </div>
                <div class="checkbox-custom fill checkbox-alert mb5">
                  <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                  <label for="headerSkin6">Alert</label>
                </div>
                <div class="checkbox-custom fill checkbox-system mb5">
                  <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                  <label for="headerSkin7">System</label>
                </div>
                <div class="checkbox-custom fill checkbox-success mb5">
                  <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                  <label for="headerSkin2">Success</label>
                </div>
                <div class="checkbox-custom fill mb5">
                  <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                  <label for="headerSkin9">Dark</label>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
            <form id="toolbox-sidebar-skin">
              <h4 class="mv20">Sidebar Skins</h4>
              <div class="skin-toolbox-swatches">
                <div class="checkbox-custom fill mb5">
                  <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                  <label for="sidebarSkin3">Dark</label>
                </div>
                <div class="checkbox-custom fill checkbox-disabled mb5">
                  <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                  <label for="sidebarSkin1">Light</label>
                </div>
                <div class="checkbox-custom fill checkbox-light mb5">
                  <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                  <label for="sidebarSkin2">Lighter</label>
                </div>
              </div>
            </form>
          </div>
          <div role="tabpanel" class="tab-pane" id="toolbox-settings">
            <form id="toolbox-settings-misc">
              <h4 class="mv20 mtn">Layout Options</h4>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" checked="" id="header-option">
                  <label for="header-option">Fixed Header</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" checked="" id="sidebar-option">
                  <label for="sidebar-option">Fixed Sidebar</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" id="breadcrumb-option">
                  <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                </div>
              </div>
              <div class="form-group">
                <div class="checkbox-custom fill mb5">
                  <input type="checkbox" id="breadcrumb-hidden">
                  <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                </div>
              </div>
              <h4 class="mv20">Layout Options</h4>
              <div class="form-group">
                <div class="radio-custom mb5">
                  <input type="radio" id="fullwidth-option" checked name="layout-option">
                  <label for="fullwidth-option">Fullwidth Layout</label>
                </div>
              </div>
              <div class="form-group mb20">
                <div class="radio-custom radio-disabled mb5">
                  <input type="radio" id="boxed-option" name="layout-option" disabled>
                  <label for="boxed-option">Boxed Layout
                    <b class="text-muted">(Coming Soon)</b>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Theme Preview Pane -->

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>管理</b>后台
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">

        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
 <ul class="nav navbar-nav navbar-right">

        <li class="hidden-xs">
                     <a href="<?php echo Url::to(['site/logout']) ?>" data-method="post">
              <span class="fa fa-power-off pr5"></span> 登出 </a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
          	<img src="../web/statics/assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
          	<span class="hidden-xs pl15"> <?php
            if(!Yii::$app->user->isGuest)
                echo Yii::$app->user->identity->username ?> </span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">

            <li class="dropdown-header clearfix">
            
              <div class="pull-left ml10">
                <!-- <select id="user-status"> -->
                  <optgroup label="Current Status:">
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                <!-- </select> -->
              </div>

              <div class="pull-right mr10">
                <!-- <select id="user-role"> -->
                  <optgroup label="Logged in As:">

                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                <!-- </select> -->
              </div>
            </li>
   
          </ul>
        </li>
      
      </ul>
      
      
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img src="../web/statics/assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-author"><?php
                if(!Yii::$app->user->isGuest)
                    echo Yii::$app->user->identity->username ?> </div>
                <div class="media-links"> <a href="<?php echo Url::to(['site/logout']) ?>" data-method="post">登出 </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Menu (slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
             
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
         
          <li class="sidebar-label pt15">信息管理</li>
          <!-- 加的 -->
          <li>
            <a class="accordion-toggle" href="<?php echo Url::to(['user/index']) ?>">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">用户管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?php echo Url::to(['user/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 用户列表</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['admin/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 管理员列表</a>
              </li>
            </ul>
          </li>

          <li>
            <a class="accordion-toggle" href="<?php echo Url::to(['firstlevelmessage/index']) ?>">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">留言管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?php echo Url::to(['firstlevelmessage/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 一级留言列表</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['seclevelmessage/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 二级留言列表</a>
              </li>
            </ul>
          </li>
          <li>

          <li>
            <a class="accordion-toggle" href="<?php echo Url::to(['batch/index']) ?>">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">新闻管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?php echo Url::to(['post/create']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 发布新闻</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['post/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 新闻列表</a>
              </li>
            </ul>
          </li> 

          <li>
            <a class="accordion-toggle" href="<?php echo Url::to(['batch/index']) ?>">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">数据管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="<?php echo Url::to(['china-data/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 国内每日数据</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['domestic-data/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 国内各省市数据</a>
              </li>
              <li>
                <a href="<?php echo Url::to(['foreign-current-data/index']) ?>">
                  <span class="glyphicon glyphicon-book"></span> 世界数据</a>
              </li>
            </ul>
          </li> 

          <li>
            <a href="<?php echo Url::to(['team/index']) ?>">
              <span class="glyphicon glyphicon-fire"></span>
              <span  class="sidebar-title">团队管理</span>
            </a>
          </li>
          <!-- 自己加的结束 -->

        </ul>

        
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      <div id="topbar-dropmenu" class="alt">
        <div class="topbar-menu row">
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-primary light">
              <span class="glyphicon glyphicon-inbox text-muted"></span>
              <span class="metro-title">Messages</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-info light">
              <span class="glyphicon glyphicon-user text-muted"></span>
              <span class="metro-title">Users</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-success light">
              <span class="glyphicon glyphicon-headphones text-muted"></span>
              <span class="metro-title">Support</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-system light">
              <span class="glyphicon glyphicon-facetime-video text-muted"></span>
              <span class="metro-title">Videos</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-warning light">
              <span class="fa fa-gears text-muted"></span>
              <span class="metro-title">Settings</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-alert light">
              <span class="glyphicon glyphicon-picture text-muted"></span>
              <span class="metro-title">Pictures</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
         <?= Breadcrumbs::widget([
          //'itemTemplate' => '<li><a href="index.html"><i class="icon fa fa-home"></i>{link}</a></li>',
          'homeLink' => [
            'label' => '主 页',
            'url' => Yii::$app->homeUrl,
            'template' => '<li class="crumb-active">
              {link} <span class="glyphicon glyphicon-home"></span>
            </li>',
          ],
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []

          ])?>
     
        </div>
        <div class="topbar-right">

        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">
        <?= $content ?>
      
      </section>
      <!-- End: Content -->

    </section>

    <!-- Start: Right Sidebar -->
    
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->


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
