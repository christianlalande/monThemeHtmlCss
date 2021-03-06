<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php Loader::element('header_required');?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/main.css">
        <link rel="stylesheet" href="<?php echo $this->getThemePath();?>/css/style.css">
        <script src="<?php echo $this->getThemePath();?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <script src="<?php echo $this->getThemePath();?>/js/main.js"></script>
     
        
    <header>
        <div class="row">
            <div class="w-3">
                <div id="logo"><img src="<?php echo $this->getThemePath();?>/img/logo.png" alt="Logo_Polo_360"/></div>                            
            </div>            
            <div class="w-9">
                <?php
                $a = new Area('menu');
                $a->display($c);
                ?>
            </div>           
          <p class="clear"></p>        
        </div>
    </header>

  
    
