<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">    <title>Admin</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://link5s.co/img/favicon.ico" type="image/x-icon" rel="icon"><link href="https://link5s.co/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://link5s.co/build/css/dashboard.min.css?ver=5.3.0">    
    <style type="text/css">
      body{    font-size: 15px;}
    </style>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- TrustBox script --> <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script> <!-- End TrustBox script -->
</head>
<body class="skin-green sidebar-mini" style="height: auto;">
<div class="wrapper" style="height: auto;">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo base_url() ?>admin/Master" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                L.C            </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><span class="glyphicon glyphicon-home"></span> Admin</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            
            <!-- Navbar Right Menu -->
           <!-- <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="<?php echo base_url() ?>admin/Master">Log Out</a></li>
    </ul>
  </div> -->
    </header>


    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <?php echo isset($menu)?$menu:""; ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 700px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <?php echo isset($body)?$body:""; ?>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box-short" style="margin-bottom: 10px; display: none;">
                <div class="box box-success box-solid shorten-member">
                    <div class="box-body" style="overflow: hidden;">
                        <form method="post" accept-charset="utf-8" id="shorten" action="/links/shorten"><div style="display:none;"><input type="hidden" name="_method" value="POST"><input type="hidden" name="_csrfToken" autocomplete="off" value="e7eff552b6b7de62e0783d6f5d9928a2b831e784ad30c3f9b9594114ca75598a5fdcd878df0f26bb4ddb9ec46fc318f9d5cd2a0c4b7e81fcf78bb5637d33369f"></div>
<div class="form-group">
    <input type="text" name="url" placeholder="Your URL Here" required="required" class="form-control" id="url"></div>

<div class="advanced-div" style="display: none; overflow: hidden;">

    <div class="row">

                    <div class="col-sm-4">
                <div class="form-group">
                    <label for="alias">Alias</label><input type="text" name="alias" placeholder="Alias" class="form-control input-sm" id="alias">                </div>
            </div>
        
        <div class="col-sm-4">
            <div class="form-group">
                <input type="hidden" name="ad_type" value="2">            </div>
        </div>
                    <div class="col-sm-4">
                            </div>
            </div>
</div>

<button class="btn btn-submit btn-primary btn-xs" type="submit">Shorten</button><button type="button" class="btn btn-default btn-xs advanced">Advanced Options</button>

<div style="display:none;"><input type="hidden" name="_Token[fields]" autocomplete="off" value="85734f5b6925127bcdf68ccb200a9c8a6695c029%3Aad_type"><input type="hidden" name="_Token[unlocked]" autocomplete="off" value="adcopy_challenge%7Cadcopy_response%7Ccoinhive-captcha-token%7Cg-recaptcha-response"></div></form>
<div class="shorten add-link-result"></div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        Copyright © Link5s.Co 2019    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>


</div>

<script type="text/javascript">
  /* <![CDATA[ */
  var app_vars = {"base_url":"https:\/\/link5s.co\/","language":"en_US","copy":"Copy","copied":"Copied!","user_id":9300,"home_shortening_register":"no","enable_captcha":"yes","captcha_type":"recaptcha","reCAPTCHA_site_key":"6Le7SnYUAAAAAKIwK1zs562cBP4gggWCE4l0MXsi","invisible_reCAPTCHA_site_key":"","solvemedia_challenge_key":"","coinhive_site_key":"","coinhive_hashes":"1024","captcha_short_anonymous":"0","captcha_shortlink":"yes","captcha_signin":"no","captcha_signup":"yes","captcha_forgot_password":"yes","captcha_contact":"yes","counter_value":"5","counter_start":"load","get_link":"Get Link","getting_link":"Getting link...","skip_ad":"Skip Ad","force_disable_adblock":"1","please_disable_adblock":"Please disable Adblock to proceed to the destination page.","cookie_notification_bar":true,"cookie_message":"This website uses cookies to ensure you get the best experience on our website. <a href='https:\/\/link5s.co\/pages\/privacy' target='_blank'><b>Learn more<\/b><\/a>","cookie_button":"Got it!"};
  /* ]]> */
</script>

<!--<script src="https://link5s.co/js/ads.js"></script><div id="test-block" style="display: none;"></div><script src="https://link5s.co/build/js/dashboard.min.js?ver=5.3.0"></script><div id="cookie-pop"><div class="container-fluid"><div class="col-xs-9"><div class="cookie-message">This website uses cookies to ensure you get the best experience on our website. <a href="https://link5s.co/pages/privacy" target="_blank"><b>Learn more</b></a></div></div><div class="col-xs-3"><div class="cookie-confirm"><button id="got-cookie" class="btn btn-default" type="submit">Got it!</button></div></div></div></div><!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-127882392-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127882392-1');
</script>

    <link rel="stylesheet" href="//cdn.rawgit.com/almasaeed2010/AdminLTE/v2.3.3/plugins/morris/morris.css">
    <script src="//cdn.rawgit.com/DmitryBaranovskiy/raphael/v2.1.0/raphael-min.js"></script>
    <script src="//cdn.rawgit.com/almasaeed2010/AdminLTE/v2.3.3/plugins/morris/morris.min.js" type="text/javascript"></script>

    <!-- <script>
      jQuery(document).ready(function() {
        new Morris.Line({
          element: 'chart_div',
          resize: true,
          data: [
              {date: "2019-07-01", views: 1025},{date: "2019-07-02", views: 857},{date: "2019-07-03", views: 1087},{date: "2019-07-04", views: 621},{date: "2019-07-05", views: 45},{date: "2019-07-06", views: 5},{date: "2019-07-07", views: 2},{date: "2019-07-08", views: 2},{date: "2019-07-09", views: 1},{date: "2019-07-10", views: 1},{date: "2019-07-11", views: 0},{date: "2019-07-12", views: 3},{date: "2019-07-13", views: 0},{date: "2019-07-14", views: 0},{date: "2019-07-15", views: 0},{date: "2019-07-16", views: 1},{date: "2019-07-17", views: 0},{date: "2019-07-18", views: 0},{date: "2019-07-19", views: 0},{date: "2019-07-20", views: 0},{date: "2019-07-21", views: 0},{date: "2019-07-22", views: 0},{date: "2019-07-23", views: 1},{date: "2019-07-24", views: 1},{date: "2019-07-25", views: 1},{date: "2019-07-26", views: 0},{date: "2019-07-27", views: 0},{date: "2019-07-28", views: 0},{date: "2019-07-29", views: 0},{date: "2019-07-30", views: 0},{date: "2019-07-31", views: 0},          ],
          xkey: 'date',
          xLabels: 'day',
          ykeys: ['views'],
          labels: ['Views'],
          lineColors: ['#3c8dbc'],
          lineWidth: 2,
          hideHover: 'auto',
          smooth: false,
        });
      });
    </script> -->



</body></html>