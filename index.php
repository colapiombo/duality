<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
    <?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>
<body>

<div class="main">
    <!-- Load Bludit Plugins: Site Body Begin -->
    <?php Theme::plugins('siteBodyBegin'); ?>

    <!-- Navbar -->
    <?php include(THEME_DIR_PHP . 'navbar.php'); ?>

    <?php
    if ($url->slug() == "blog") {
        include(THEME_DIR_PHP . 'blog.php');
    } elseif ($WHERE_AM_I == 'page') {
        include(THEME_DIR_PHP . 'page.php');
    } elseif (($WHERE_AM_I == 'home')) {
        include(THEME_DIR_PHP . 'home.php');
    }
    ?>
</div>
<?php include(THEME_DIR_PHP . 'footer.php'); ?>


<!-- Javascript -->
<?php
// Include Jquery file from Bludit Core
echo Theme::jquery();

// Include javascript Bootstrap file from Bludit Core
echo Theme::jsBootstrap();
echo Theme::js('js/main.js');

?>
</body>
</html>