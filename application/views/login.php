<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 30/9/17
 * Time: 12:39 AM
 */
?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900);
    * {
        margin: 0;
        padding: 0;
    }
    html,
    body {
        height: 100%;
        width: 100%;
        font-family: "Lato";
        overflow-x: hidden;
    }
    .preload * {
        -webkit-transition: none !important;
        -moz-transition: none !important;
        -ms-transition: none !important;
        -o-transition: none !important;
        transition: none !important;
        -webkit-animation: none !important;
        -moz-animation: none !important;
        -ms-animation: none !important;
        -o-animation: none !important;
        animation: none !important;
    }
    #hero {
        height: 350px;
        background: #1CB0EC;
        position: relative;
        overflow: hidden;
    }
    #hero figure {
        position: absolute;
        right: 80px;
        top: 100px;
        color: #fff;
    }
    #hero figure blockquote {
        font-weight: 100;
    }
    #hero h1 {
        font-weight: 100;
        color: #fff;
        font-size: 88px;
        padding-top: 60px;
        padding-left: 80px;
    }
    #hero span {
        position: absolute;
        bottom: -50px;
        width: 250px;
        left: 0;
        right: 0;
        margin: 0 auto;
        z-index: 10;
    }
    #hero .img_holder.password .left_arm img {
        left: 78px;
        bottom: 47px;
    }
    #hero .img_holder.password .right_arm img {
        right: 86px;
        bottom: 47px;
    }
    #hero .img_holder.password:before {
        left: 78px;
        bottom: 105px;
    }
    #hero .img_holder.password:after {
        right: 85px;
        bottom: 105px;
    }
    #hero .img_holder img.dr-glue-little {
        width: 250px;
        z-index: 10;
    }
    #hero .img_holder:before {
        content: '';
        position: absolute;
        height: 20px;
        width: 40px;
        background: #E9C09B;
        left: 10px;
        bottom: 40px;
        z-index: 999;
        border-radius: 100%;
        transition: 1s;
        -webkit-transition: 1s;
        -moz-transition: 1s;
    }
    #hero .img_holder:after {
        content: '';
        position: absolute;
        height: 20px;
        width: 40px;
        background: #E9C09B;
        right: 10px;
        bottom: 40px;
        z-index: 999;
        border-radius: 100%;
        transition: 1s;
        -webkit-transition: 1s;
        -moz-transition: 1s;
    }
    #hero .img_holder .left_arm img,
    #hero .img_holder .right_arm img {
        position: absolute;
        transition: 1s;
        -webkit-transition: 1s;
        -moz-transition: 1s;
        z-index: 9999;
        width: 45px;
    }
    #hero .img_holder .left_arm img {
        left: 9px;
        bottom: -22px;
    }
    #hero .img_holder .right_arm img {
        right: 7px;
        bottom: -22px;
    }
    form {
        position: relative;
        width: 400px;
        height: 280px;
        margin: 0 auto;
        z-index: 999999999;
    }
    form .input_holder {
        position: relative;
        width: 300px;
        margin: 0 auto;
    }
    form .input_holder:nth-of-type(1) {
        margin-top: 40px;
    }
    form .input_holder:nth-of-type(2) {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    form .input_holder span {
        position: absolute;
        left: 10px;
        top: 8px;
    }
    form .input_holder span:after {
        content: '';
        position: absolute;
        width: 1px;
        height: 20px;
        background: #ccc;
        left: 21px;
        top: 0;
    }
    form .input_holder input {
        display: block;
        width: 300px;
        margin: 0 auto;
        background: #fafafa;
        border: 0;
        outline: 0;
        margin: 10px 0;
        padding: 10px;
        text-indent: 30px;
        font-weight: 300;
    }
    form .input_holder input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px #fafafa inset;
    }
    form .submit_button {
        width: 320px;
        height: 36px;
        border: 0;
        color: #fff;
        position: relative;
        margin-left: 50px;
        cursor: pointer;
        background: #1CB0EC;
        border-bottom: 4px solid #1091c5;
    }
    form .submit_button:active {
        outline: 0;
        border-bottom: none;
    }
    #footer {
        color: #000;
        text-align: center;
    }
    #footer p {
        font-size: 16px;
    }
    #footer p a {
        text-decoration: none;
        color: #1CB0EC;
        position: relative;
        transition: .5s;
        -webkit-transition: .5s;
    }
    #footer p a:hover {
        color: #4bc0f0;
    }
    #footer p a:before,
    #footer p a:after {
        content: '';
        position: absolute;
        background: #1CB0EC;
        height: 2px;
        left: 0;
        right: 0;
        opacity: 0;
        transition: .5s;
        -webkit-transition: .5s;
    }
    #footer p a:before {
        top: -10px;
    }
    #footer p a:after {
        bottom: -10px;
    }
    #footer p a:hover:before,
    #footer p a:hover:after {
        opacity: 1;
    }
    #footer p a:hover:before {
        top: -3px;
    }
    #footer p a:hover:after {
        bottom: -5px;
    }

</style>


<div id="hero">
    <div id="background_animate"></div>
    <h1><b>Login to explore</b></h1>
    <span class="img_holder">
                <img class="dr-glue-little" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/63425/drglue.png" alt="Dr Glue Little">
                <div class="left_arm">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/63425/left-arm.png" alt="Left Arm">
                </div>
                <div class="right_arm">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/63425/right-arm.png" alt="Right Arm">
                </div>
            </span>
</div>
<form action="loginProcess" method="post" accept-charset="utf-8">
    <div class="input_holder">
        <span><i class="fa fa-user"></i></span><input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="input_holder">
        <span><i class="fa fa-lock"></i></span><input type="password" name="password" id="password_field" placeholder="Password" required>
    </div>
    <input type="submit" class="submit_button" name="log" value="Login">
    <p align="center">Don't have an account yet.  <a href="<?=base_url('user/signup')?>">  Signup here</a></p>
</form>

<script>
    window.onload = function() {
        var p = document.getElementById("password_field");

        p.onfocus = function() {
            document.querySelector(".img_holder").className += " password";
        }

        p.onblur = function() {
            document.querySelector(".password").className = "img_holder";
        }

        document.querySelector("body").className = "";
    }
</script>