<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--         <link href="<?php echo URL_BASE.'templates/default';?>/css/main.css" 
              rel="stylesheet" type="text/css"/> -->
        <title>MVC_quan</title>
        <?php require 'templates/default/head.php'?>
    </head>
    <body>
        <div class="header_bg">
            <?php require 'templates/default/header_bg.php';?>
        </div>
        <div class="header_btm">
              <?php require 'templates/default/header_btm.php';?>         
        </div>
        <div id="da-slider" class="da-slider">
             <?php require 'templates/default/slider.php';?> 
        </div>
    </div>
    <div class="wrap">
         <?php require 'templates/default/wrap.php';?> 
    </div>
    <div class="main_bg1">
        <div class="wrap">  
            <div class="main1">
                <h2>featured products</h2>
            </div>
        </div>
    </div> 
         <?php
            require TEMPLATE;
         ?>
    <div class="footer_bg">
        <?php require 'templates/default/footer_bg.php';?> 
    </div>
    <div class="footer_bg1">
        <?php require 'templates/default/footer_bg1.php';?> 
    </div>
    </body>
</html>
