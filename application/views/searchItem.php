<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 28/9/17
 * Time: 3:04 AM
 */
?>

<style>
    #custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
    }

    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */

        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    #custom-search-input button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#D9230F;
    }

    .search-query:focus + button {
        z-index: 3;
    }

</style>

<div class="container">
    <div class="row">
        <h2>Search by Item Name</h2>
        <form action="<?= base_url('user/lostProcess') ?>" method="post">
            <div id="custom-search-input">
                <div class="col-md-8">
                    <input type="text" class="  search-query form-control" name="search" placeholder="Search" />
                </div>
                <div class="col-md-4">
                    <input id="singlebutton" type="submit" name="singlebutton" class="btn btn-default" value="Search">
                </div>
                 <br><br><br>
            </div>
        </form>
    </div>
</div>
