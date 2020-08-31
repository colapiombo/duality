<!-- Static Meta -->

<!-- Character encoding and viewport definitions -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="author" content="Colapiombo"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index, follow">


<!-- Dynamic Meta -->
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>

<!-- Include Favicon -->
<?php echo Theme::favicon('img/favicon.png'); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">

<!-- Font Awesome  font and icon toolkit -->
<script src="https://kit.fontawesome.com/c820cdac55.js" crossorigin="anonymous"></script>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::cssBootstrap(); ?>
<?php echo Theme::css('css/normalize.css'); ?>
<?php echo Theme::css('css/transition.css'); ?>
<?php echo Theme::css('css/main.css'); ?>
<?php echo Theme::css('css/type.css'); ?>


<!-- if using Internet Explorer less than version 9 (IE8 and lower), do this... -->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
