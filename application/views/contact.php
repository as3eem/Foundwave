<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 30/9/17
 * Time: 4:11 PM
 */
?>
<style>
    body {padding-top:20px;}
</style>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" action="<?=base_url('user/mailFounder')?>" method="post">
                    <fieldset>
                        <legend class="text-center">Contact Founder</legend>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9">
                                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Your message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                            </div>
                        </div>
                        <!--hidden content-->
                        <input type="hidden" name="x" value="<?=$email?>">

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Send Mail">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>