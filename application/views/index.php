
<!-- banner -->
<div class="banner">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner_text">
                            <h3>perfect url for khoya-paaya</h3>
                            <div class="w3ls-line"> </div>
                            <p>Foundwave Creations</p>

                        </div>
                    </li>
                    <li>
                        <div class="banner_text">
                            <h3>Connect with police department</h3>
                            <div class="w3ls-line"> </div>
                            <p>Foundwave Creations</p>

                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- flexSlider -->
        <link rel="stylesheet" href="<?= base_url('static') ?>/css/flexslider.css" type="text/css" media="screen" property="" />
        <script defer src="<?= base_url('static') ?>/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //flexSlider -->
    </div>
</div>
<!-- //banner -->
<!-- services -->
<div class="services">
    <div class="container">
        <div class="services-main">
            <div class="services-heading">
                <h2>services</h2>
                <div class="agileits-line"> </div>
            </div>
            <div class="services-bottom">
                <div class="services-grid">
                    <div class="col-md-6 services-grid-left">
                        <div class="services-icon"><i class="fa fa-envira" aria-hidden="true"></i></div>
                        <div class="services-text">
                            <h4>Claim Found</h4>
                            <p>Report anything you found and want to return to right person.Also you can ask for reward for returning (You deserve it!).</p>
                        </div>
                        <div class="clearfix"> </div>
                        <form action="<?= base_url('user/claimFound') ?>" method="post">
                        <input type="submit" class="btn btn-success" name="submit" value="Click here">
                        </form>
                    </div>
                    <div class="col-md-6 services-grid-right">
                        <img src="<?= base_url('static') ?>/images/3.jpg" alt="" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="services-grid">
                    <div class="col-md-6 services-grid-right ulta-grid">
                        <img src="<?= base_url('static') ?>/images/4.jpg" alt="" />
                    </div>
                    <div class="col-md-6 services-grid-left ulta-grid">
                        <div class="services-icon"><i class="fa fa-magnet" aria-hidden="true"></i></div>
                        <div class="services-text">
                            <h4>Claim Lost</h4>
                            <p>Search for any item you lost anytime or anywhere. Just enter the keyword and start rolling over.</p>
                        </div>
                        <div class="clearfix"> </div>
                        <form action ="<?= base_url('user/claimLost') ?>" method="post">
                        <input type="submit" class="btn btn-success" name="submit" value="Click here">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="services-grid">
                    <div class="col-md-6 services-grid-left">
                        <div class="services-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                        <div class="services-text">
                            <h4>Connect with Police</h4>
                            <p>An elegant portal to connect police department of different area at a single click.</p>
                        </div>
                        <div class="clearfix"> </div>
                        <form action ="<?= base_url('user/policeConnect') ?>" method="post">
                            <input type="submit" class="btn btn-success" name="submit" value="Click here">
                        </form>
                    </div>
                    <div class="col-md-6 services-grid-right">
                        <img src="<?= base_url('static') ?>/images/6.jpg" alt="" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--services -->
<!-- services-bottom -->
<div class="text-grid">
    <div class="container">
        <h4>Get Involved with us</h4>
        <p>Foundwave approach to user's daily need is founded on a simple idea: Public helps public. And that internet can do more to engage this custom and enable this platform to make daily life more easy and better. With a platform to raise common people's concern to claim their belongings</p>
    </div>
</div>
<br>
<br>
<!-- //services-bottom -->
<!-- blog -->
<!--<div class="blog">-->
<!--    <div class="container">-->
<!--        <div class="services-heading">-->
<!--            <h3>Our Blog</h3>-->
<!--            <div class="agileits-line"> </div>-->
<!--        </div>-->
<!--        <div class="agileinfo-blog-grids">-->
<!--            <div class="col-md-4 wthree-blog">-->
<!--                <div class="w3-agileits-blog">-->
<!--                    <div class="w3-agileits-blog-img">-->
<!--                        <a href="single.html"><img src="--><?//= base_url('static') ?><!--/images/7.jpg" alt="" /></a>-->
<!--                    </div>-->
<!--                    <div class="w3-agileits-blog-text">-->
<!--                        <a href="single.html">Fusce nec quam vulputate</a>-->
<!--                        <p>Nunc vitae tempor dolor, sed euismod mauris. Vivamus ornare convallis tincidunt. Morbi orci leo, vulputate et aliquam nec, pulvinar sed nibh.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 wthree-blog">-->
<!--                <div class="w3-agileits-blog">-->
<!--                    <div class="w3-agileits-blog-img">-->
<!--                        <a href="single.html"><img src="--><?//= base_url('static') ?><!--/images/8.jpg" alt="" /></a>-->
<!--                    </div>-->
<!--                    <div class="w3-agileits-blog-text">-->
<!--                        <a href="single.html">Interdum et malesuada</a>-->
<!--                        <p>Nunc vitae tempor dolor, sed euismod mauris. Vivamus ornare convallis tincidunt. Morbi orci leo, vulputate et aliquam nec, pulvinar sed nibh.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-4 wthree-blog">-->
<!--                <div class="w3-agileits-blog">-->
<!--                    <div class="w3-agileits-blog-img">-->
<!--                        <a href="single.html"><img src="--><?//= base_url('static') ?><!--/images/9.jpg" alt="" /></a>-->
<!--                    </div>-->
<!--                    <div class="w3-agileits-blog-text">-->
<!--                        <a href="single.html">Vivamus ornare convallis</a>-->
<!--                        <p>Nunc vitae tempor dolor, sed euismod mauris. Vivamus ornare convallis tincidunt. Morbi orci leo, vulputate et aliquam nec, pulvinar sed nibh.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="clearfix"> </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- //blog -->