<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
    <?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>
<body class="is-preload <?= ($WHERE_AM_I == 'page' ? 'single': '') ?>">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Load Bludit Plugins: Site Body Begin -->
    <?php Theme::plugins('siteBodyBegin'); ?>

    <!-- Navbar -->
    <?php include(THEME_DIR_PHP . 'header.php'); ?>

    <?php
    if ($WHERE_AM_I == 'page') {
        include(THEME_DIR_PHP . 'page.php');
    } elseif (($WHERE_AM_I == 'home')) {
        include(THEME_DIR_PHP . 'home.php');
       include(THEME_DIR_PHP . 'sidebar.php');
    }
    ?>

</div>

</body>

<!-- Javascript -->
<?php
// Include Jquery file from Bludit Core
echo Theme::jquery();

// Include javascript Bootstrap file from Bludit Core
echo Theme::js('assets/js/jquery.min.js');
echo Theme::js('assets/js/browser.min.js');
echo Theme::js('assets/js/breakpoints.min.js');
echo Theme::js('assets/js/util.js');
echo Theme::js('assets/js/main.js');

?>
</body>
</html>