<!DOCTYPE html>
<html lang="sr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="<?php echo (isset($content)) ? $content : ''; ?>">
    <meta name="keywords" content="<?php echo (isset($keywords)) ? $keywords : ''; ?>">
    <meta name="author" content="Levent Mustafa levent.leki.93@gmail.com">
    <link rel="icon" href="<?php echo base_url(); ?>favicon.ico">
    <title>check IT out | <?php echo (isset($title)) ? $title : ''; ?></title>

		<!--OFFLINE SOURCE NOT USING IN PRODUCTION-->
		
		<!-- Latest compiled and minified CSS for offline use -->
		<!--<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
		<!--font awesome-->
		<!--<link href="<?php echo base_url(); ?>font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>-->
		
		<!--OFFLINE SOURCE-->
		<!--//////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!--ONLINE SOURCE-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!--font awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		
		<!--ONLINE SOURCE-->
		
		<!--Tema za Bootstrap Simplex-->
		<link href="<?php echo base_url(); ?>css/simplex.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<script>
			//Bazna putanja koja mi treba u js fajlovima
			var base_url = "<?php echo base_url(); ?>";
		</script>
  </head>

  <body>

		<!--Za korisnike koji su onemogucili javaScript-->
		<noscript>
		<div class="alert alert-danger text-center" role="alert">
			JavaScript u Vašem browseru je onemogućen! Niste u mogućnosti da koristite funkcionalnosti ovog sajta! Omogućite JavaScript.
		</div>
		</noscript>
