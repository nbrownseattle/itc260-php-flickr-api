<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Flickr API Exercise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel -->
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/<?=$this->config->item('style')?>" media="screen"><!--amelia theme-->
	
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/bootswatch.min.css"><!--main theme-->
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<!-- <li class="active"><a href="#" title="">Active Link</a></li> -->
			<li><?=anchor('pics','Pics')?></li>
			<li><?=anchor('pics/Pandas','Pandas')?></li>
			<li><?=anchor('pics/Red Pandas','Red Pandas')?></li>
			<li><?=anchor('pics/Baby Pandas','Baby Pandas')?></li>
        </ul>
        </div>
      </div>
    </div>
    <div class="container">
    <?php
    echo bootswatchFeedback();
    ?>