<!-- Header -->
<header id="header">
    <h1><a href="<?= Theme::siteUrl() ?>"><?= $site->title() ?></a></h1>
    <nav class="links">
        <ul>
            <?php foreach ($staticContent as $staticPage): ?>
                <li>
                    <a href="<?= $staticPage->permalink() ?>"><?= $staticPage->title() ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
    <nav class="main">
        <ul>
            <li class="menu">
                <a class="fa-bars" href="#menu">Menu</a>
            </li>
        </ul>
    </nav>
</header>

<!-- Menu -->
<section id="menu">
    <!-- Links -->
    <section>
        <ul class="links">
            <li>
                <a href="<?= Theme::siteUrl() ?>""><?= $site->title() ?></a>
            </li>
            <?php foreach ($staticContent as $staticPage): ?>
                <li>
                    <a href="<?= $staticPage->permalink() ?>"><?= $staticPage->title() ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>

</section>