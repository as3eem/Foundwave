<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 27/9/17
 * Time: 11:06 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foundwave | Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Foundwave FoundwaveFoundwaveFoundwave Foundwave Foundwave Foundwave" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link href="<?= base_url('static') ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('static') ?>/css/style.css" type="text/css" media="all" />
    <!--// css -->
    <!-- font-awesome icons -->
    <link href="<?= base_url('static') ?>/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="<?= base_url('static') ?>/js/jquery-1.11.1.min.js"></script>
    <script src="<?= base_url('static') ?>/js/bootstrap.js"></script>
    <script src="<?= base_url('static') ?>/js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
</head>

<!-- header -->
<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3layouts-logo">
                    <h1><a href="<?= base_url() ?>">Foundwave</a></h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
<!--                        <li><a href="about.html" class="hvr-sweep-to-bottom">About</a></li>-->
<!--                        <li><a href="gallery.html" class="hvr-sweep-to-bottom">Gallery</a></li>-->
                        <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="hvr-sweep-to-bottom" href="<?=base_url('user/claimFound')?>">Found Claim</a></li>
                                <li><a class="hvr-sweep-to-bottom" href="<?=base_url('user/claimLost')?>">Lost Claim</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login / Register<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="hvr-sweep-to-bottom" href="<?=base_url('user/login')?>">Login</a></li>
                                <li><a class="hvr-sweep-to-bottom" href="<?=base_url('user/signup')?>">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
