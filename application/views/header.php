<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        //loading url helper
        $this->load->helper('url');?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/libraries/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>media/libraries/css/personal.css">
        <script Language=Javascript SRC="<?php echo base_url(); ?>media/libraries/js/bootstrap.js"></script>
        <script Language=Javascript SRC="<?php echo base_url(); ?>media/libraries/js/bootstrap-slider.js"></script>
        <
        <script src='<?php echo base_url(); ?>media/libraries/js/handleSlider.js' type='text/javascript'></script>

    </head>

    <body>

    <!---------------------------------------------------------- Navigation Bar -------------------------------------->
    <nav class="navbar navbar-inverse barra">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
            <div class="col-md-2 col-md-offset-1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1">
            <div class="collapse navbar-collapse navbar-right"  id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
                </div>
                </div>
                <div class="col-md-2 col-md-offset-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#modal1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
    </nav>