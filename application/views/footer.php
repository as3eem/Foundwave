<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 27/9/17
 * Time: 11:25 PM
 */
?>
<br><br>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="agileinfo_footer_grids">
            <div class="col-md-4 agileinfo_footer_grid">
                <div class="agile-logo">
                    <h4><a href="<?=base_url()?>">Foundwave</a></h4>
                </div>
                <p>Foundwave is creative and optimised solution to all lost and found items. It takes advantage of user information at very low scale with great reach.</p>
                <div class="agileinfo-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Contact Info</h3>
                <ul class="agileinfo_footer_grid_list">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>KNIT <span>Sultanpur City</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">rudrapratap7518@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                </ul>
            </div>
            <div class="col-md-4 agileinfo_footer_grid">
                <h3>Navigation</h3>
                <ul class="agileinfo_footer_grid_nav">
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?= base_url() ?>">Home</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?= base_url() ?>">About Us</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?= base_url() ?>">Gallery</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?= base_url() ?>">Typography</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?= base_url() ?>">Icons</a></li>
                    <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?= base_url() ?>">Mail Us</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3agile_footer_copy">
            <p>2017 Foundwave Company | Design by Foundwave creative team</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<script type="text/javascript" src="<?= base_url('static')?>/js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url('static')?>/js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>
