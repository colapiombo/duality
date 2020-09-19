<!-- Static Meta -->

<!-- Character encoding and viewport definitions -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="author" content="Colapiombo"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="index, follow">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<?php echo Theme::favicon('assets/img/favicon.ico'); ?>


<!-- Dynamic Meta -->
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>



<!-- Font Awesome  font and icon toolkit -->
<script src="https://kit.fontawesome.com/c820cdac55.js" crossorigin="anonymous"></script>

<!-- Include CSS Styles from this theme -->
<?php echo Theme::css('assets/css/main.css'); ?>



<!-- if using Internet Explorer less than version 9 (IE8 and lower), do this... -->

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
