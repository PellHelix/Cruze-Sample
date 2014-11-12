<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Chevrolet Cruze</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>
</body>
</html>
<?php 
        	if(isset($_SERVER['HTTP_REFERER'])) :$referer = $_SERVER['HTTP_REFERER']; endif;
        	$security_code = md5(uniqid(rand(), true));
                include_once('includes/vars.php');
                $car = new CarType("CRUZE", "Downpayment", "Paid Search");  
	?>
    </head>
    <body id="<?php echo $car->car_type; ?>">
    <div class="navbar navbar-top" role="navigation">
      <div class="container-fluid width-max">
	<div class="row">
            <div class="col-md-10">
                <a class="logo col-xs-12 col-sm-5 col-md-4 no-pad"> <img src="img/logo.png" alt="George Matick Logo" /> </a>
                <p class="top-get">Get Your Cruze Today!</p>
                <a class="top-tele" href="tel:<?php echo $car->tel; ?>"><?php echo $car->tel; ?></a>
            </div>
            <address class="top-location md-grey hidden-xs col-sm-3 col-md-2 no-pad">
                            George Matick Chevrolet<br />
                            14001 Telegraph Road<br />
                            Redford, MI 48239
            </address>
	 </div>
      </div>
    </div>
    <div class="jumbotron no-pad container-fluid">
		<div class="container-fluid car-bkg no-pad">
      		<div class="width-max">
			<!-- Desktop Red Slant + Text -->
      			<span class="hidden-xs hidden-sm bkg-red-slant"> <!-- Desktop Jumbotron -->
				<div class="text-inverse-red text-car-name"><?php echo $car->car_name ;?><div class="text-lt"><?php echo $car->cruze_sup ;?></div></div>
		  		<div class="text-inverse-red text-offer"><?php echo $car->offer; ?></div>
		  		<div class="text-inverse-red text-monthly"><?php echo $car->monthly; ?>/<sub>mo</sub></div>
			</span>
			<!-- Mobile Red Slant + Text -->
			<span class="visible-xs visible-sm mobile-bkg-red-slant"> 
				<div class="text-inverse-red mobile-text-car-name"><?php echo $car->car_name ;?><div class="mobile-text-lt"><?php echo $car->cruze_sup ;?></div></div>
		  		<div class="text-inverse-red mobile-text-offer"><?php echo $car->offer; ?></div>
		  		<div class="text-inverse-red mobile-text-monthly"><?php echo $car->monthly; ?>/<sub>mo</sub></div>
			</span>
			<!-- Mobile Blue Slant + Text -->
			    <img class="visible-xs visible-sm img-responsive col-xs-12 no-pad mobile-car" style="z-index: 3;" src="img/<?php echo $car->car_img; ?>" />
			<span class="visible-xs visible-sm mobile-bkg-blue-slant"> <!-- Mobile Jumbotron -->
			    <div class="visible-xs visibile-sm text-inverse mobile-text-better">MORE REALLY IS BETTER</div>
			    <div class="visible-xs visible-sm text-inverse mobile-text-selection">MATICK HAS MORE SAVINGS AND MORE SELECTION</div>
			</span>
			<!-- Desktop Blue Slant + Text -->
			<span class="hidden-xs hidden-sm bkg-blue-slant"> <!-- Desktop Jumbotron -->
			    <div class="hidden-xs hidden-sm text-inverse text-better">MORE REALLY IS BETTER</div>
			    <div class="hidden-xs hidden-sm text-inverse text-selection">MATICK HAS MORE SAVINGS AND MORE SELECTION</div>
			</span>
      		</div>
		<!-- START QUOTE FORM -->
	<div class="hidden-xs hidden-sm col-sm-4 col-xs-12 quote-form">
         	<form class="form-text" method="POST" id="ajax_form" action="email.php" class="col-xs-12 col-sm-12">
         		<p class="error white"></p>
         		<h5 class="cap white bold personal-quote">DON'T MISS OUT ON THIS LOW PRICE</h5>
			 	<input class="text_input clear" type="text" name="name" id="name" value="Name" onblur="if(this.value == '') {value='Name'}" onfocus="if(this.value == 'Name') {value=''}" />
			 	<input class="text_input clear" type="email" name="email" id="email" value="Email or Phone" onblur="if(this.value == '') {value='Email or Phone'}" onfocus="if(this.value == 'Email or Phone') {value=''}"  />
			 	<input class="text_input clear" type="text" pattern="[0-9]*" name="zip" id="zip" value="ZIP Code" onblur="if(this.value == '') {value='ZIP Code'}" onfocus="if(this.value == 'ZIP Code') {value=''}"  />
			 	<input type="hidden" name="security_code" id="security_code" value="<?php echo $security_code; ?>" />
			 	<input type="hidden" name="car_type" id="car_type" value="<?php echo $car->car_type; ?>" />
			 	<input type="hidden" name="monthly" id="monthly" value="<?php echo $car->monthly; ?>" />
			 	<input type="hidden" name="downpayment" id="downpayment" value="<?php echo $car->downpayment; ?>" />
			 	<input type="hidden" name="year" id="year" value="<?php echo $car->year; ?>" />
			 	<input type="hidden" name="refererUrl" id="refererUrl" value="<?php echo $car->referer; ?>" />
			 	<input type="hidden" name="test" id="test" value="<?php echo $car->test; ?>" />
			 	<button class="claim-button submit btn cap col-xs-12 col-sm-8" type="submit" onclick="ga('send', 'event', 'click', 'get quote', 'cruze-downpayment-a-ppc')"><div class="text-inverse-red">CLAIM YOURS</div></button>
				<div class="claim-disclaimer-text">Claiming your Cruze does not obligate you to purchase or lease the vehicle.</div>
		
		</form>
        </div>
		<!-- END QUOTE FORM -->
    </div>
      </div>
		<!-- START MOBILE QUOTE FORM -->
    <div class="container-fluid">
       <div class="visible-xs visible-sm col-xs-4 col-xs-offset-1 col-sm-4 col-sm-offset-4 quote-form">
         	<form class="form-text" method="POST" id="ajax_form" action="email.php" class="col-xs-12 col-sm-12">
         		<p class="error white"></p>
         		<h5 class="cap white bold personal-quote">DON'T MISS OUT ON THIS LOW PRICE</h5>
			 	<input class="text_input clear" type="text" name="name" id="name" value="Name" onblur="if(this.value == '') {value='Name'}" onfocus="if(this.value == 'Name') {value=''}" />
			 	<input class="text_input clear" type="email" name="email" id="email" value="Email or Phone" onblur="if(this.value == '') {value='Email or Phone'}" onfocus="if(this.value == 'Email or Phone') {value=''}"  />
			 	<input class="text_input clear" type="text" pattern="[0-9]*" name="zip" id="zip" value="ZIP Code" onblur="if(this.value == '') {value='ZIP Code'}" onfocus="if(this.value == 'ZIP Code') {value=''}"  />
			 	<input type="hidden" name="security_code" id="security_code" value="<?php echo $security_code; ?>" />
			 	<input type="hidden" name="car_type" id="car_type" value="<?php echo $car->car_type; ?>" />
			 	<input type="hidden" name="monthly" id="monthly" value="<?php echo $car->monthly; ?>" />
			 	<input type="hidden" name="downpayment" id="downpayment" value="<?php echo $car->$downpayment; ?>" />
			 	<input type="hidden" name="year" id="year" value="<?php echo $car->year; ?>" />
			 	<input type="hidden" name="refererUrl" id="refererUrl" value="<?php echo $car->referer; ?>" />
			 	<input type="hidden" name="test" id="test" value="<?php echo $car->test; ?>" />
			 	<button class="claim-button submit btn cap col-xs-12 col-sm-8" type="submit" onclick="ga('send', 'event', 'click', 'get quote', 'cruze-downpayment-a-ppc')"><div class="text-inverse-red">CLAIM YOURS</div></button>
				<div class="claim-disclaimer-text">Claiming your Cruze does not obligate you to purchase or lease the vehicle.</div>
		
		</form>
        </div>
    </div>
                <!-- END MOBILE QUOTE FORM -->
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//use.typekit.net/qtz2frr.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>
</html>
