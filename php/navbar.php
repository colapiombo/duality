<nav class="navbar navbar-expand-md">
    <a href="<?php echo Theme::siteUrl() ?>" class="navbar-brand title-brand">
        <?php echo $site->title(); ?>
    </a>

    <button type="button" class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarCollapse">
        <div class="navbar-nav">
            <!-- Static pages -->
            <?php foreach ($staticContent as $staticPage): ?>
                <a href="<?php echo $staticPage->permalink() ?>"
                   class="nav-item nav-link <?php echo(($url->slug() == $staticPage->slug()) ? 'active' : '') ?>"><?php echo $staticPage->title() ?></a>
            <?php endforeach ?>
        </div>
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox"/>
                <div class="slider round"></div>
            </label>
        </div>
    </div>

</nav>


