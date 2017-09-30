<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 26/9/17
 * Time: 6:18 PM
 */
?>

<style>
    .well-block {
        background-color: #fff;
        border: 1px solid #e9e6e8;
        padding: 40px;
    }

    .well-title {
        margin-bottom: 40px;
    }
</style>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well-block">
                <div class="well-title">
                    <h2>Found Something? Help it's owner </h2>
                </div>
                <form action="<?= base_url('user/foundProcess') ?>" method="post">
                    <!-- Form start -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="name">Item Name</label>
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="email">Phone</label>
                                <input id="email" name="phone" type="text" placeholder="Phone" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="date">Found on Date</label>
                                <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="date">Found at Place</label>
                                <input id="date" name="landmark" type="text" placeholder="Place or nearby landmark" class="form-control input-md">
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="appointmentfor">E-Mail</label>
                                <input class="form-control input-lg" type="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="appointmentfor">Description of Item</label>
                                <input class="form-control input-lg" type="text" name="description" placeholder="Description">
                            </div>
<!--                            <label class="control-label" for="appointmentfor">Image of Item</label>-->
<!--                            <input type="file" name="pic" accept="image/*">-->

                        </div>
                        <!-- Button -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <br>
                                <input id="singlebutton" type="submit" name="singlebutton" class="btn btn-default" value="Submit">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- form end -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="well-block">
                <div class="well-title">
                    <h2>Why Appointment with Us</h2>
                </div>
                <div class="feature-block">
                    <div class="feature feature-blurb-text">
                        <h4 class="feature-title">24/7 Hours Available</h4>
                        <div class="feature-content">
                            <p>Integer nec nisi sed mi hendrerit mattis. Vestibulum mi nunc, ultricies quis vehicula et, iaculis in magnestibulum.</p>
                        </div>
                    </div>
                    <div class="feature feature-blurb-text">
                        <h4 class="feature-title">Experienced Staff Available</h4>
                        <div class="feature-content">
                            <p>Aliquam sit amet mi eu libero fermentum bibendum pulvinar a turpis. Vestibulum quis feugiat risus. </p>
                        </div>
                    </div>
                    <div class="feature feature-blurb-text">
                        <h4 class="feature-title">Low Price & Fees</h4>
                        <div class="feature-content">
                            <p>Praesent eu sollicitudin nunc. Cras malesuada vel nisi consequat pretium. Integer auctor elementum nulla suscipit in.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

