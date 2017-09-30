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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="well-block">
                <div class="well-title">
                    <h2>Lost Something? We are here to help </h2>
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
                                <label class="control-label" for="time">Found at Time</label>
                                <select id="time" name="time" class="form-control">
                                    <option value="8:00 to 9:00">8:00 to 9:00</option>
                                    <option value="9:00 to 10:00">9:00 to 10:00</option>
                                    <option value="10:00 to 1:00">10:00 to 1:00</option>
                                </select>
                            </div>
                        </div>
                        <!-- Select Basic -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="appointmentfor">Description of Item</label>
<!--                                <select id="appointmentfor" name="appointmentfor" class="form-control">-->
<!--                                    <option value="Service#1">Service#1</option>-->
<!--                                    <option value="Service#2">Service#2</option>-->
<!--                                    <option value="Service#3">Service#3</option>-->
<!--                                    <option value="Service#4">Service#4</option>-->
<!--                                </select>-->
                                <input class="form-control input-lg" type="text" name="description">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-md-12">
                            <div class="form-group">
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

