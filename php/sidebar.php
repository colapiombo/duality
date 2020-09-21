<?php
/**
 * @author:	 							html5up.net | @ajlkn
 * 		Wonderfully changed:			Colapiombo
 * @copyright:							Copyright (c) Future Imperfect by HTML5 UP. (https://html5up.net/)
 * @copyright:							Copyright (c) 2020 Paolo Combi. (https://combi.li/)
 * Licensed under the CCA 3.0 license:	https://creativecommons.org/licenses/by/3.0/
 * Licensed under HTML5 UP:				https://html5up.net/license/
 *
 */
?>

<!-- Sidebar -->
<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <a href="#" class="logo"><img src="images/logo.jpg" alt=""/></a>
        <header>
            <h2> <?= $site->title() ?></h2>
            <p><?= $site->slogan() ?></p>
        </header>
        <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox" />
                <div class="slider round"></div>
            </label>
        </div>
    </section>

    <!-- Mini Posts -->
    <section>
        <div class="mini-posts">
            <?php
            // Get the first and second page from the content
            $listOfKeys = $pages->getList(1, 4);
            if ($listOfKeys) :
            foreach ($listOfKeys as $key) :
            $lastPages = new Page($key);
            ?>
                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3>
                            <a href="<?= $lastPages->permalink(); ?>">
                                <?= $lastPages->title(); ?>
                            </a>
                        </h3>
                        <time class="published" datetime="<?= $lastPages->date(); ?>">
                            <?php echo $lastPages->date(); ?> <?php echo $lastPages->readingTime(); ?>
                        </time>
                        <a href="#" class="author">
                            <img src="<?= ($lastPages->user('profilePicture') ? $lastPages->user('profilePicture') : Theme::src('assets/img/favicon-32x32.png')) ?>" alt=""/>
                        </a>
                    </header>
                    <a href="<?= $lastPages->permalink(); ?>" class="image">
                        <img src="<?= ($lastPages->coverImage() ? $lastPages->coverImage() : '') ?>" alt=""/>
                    </a>
                </article>
            <?php endforeach ?>
            <?php endif ?>

        </div>
    </section>
    <section>
        <ul class="posts">
            <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
            <li>
                <article>
                    <header>
                        <h3><a href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a></h3>
                    </header>
                </article>
            </li>
            <?php
            endif;
            endforeach; ?>
        </ul>

    </section>


    <?php         include(THEME_DIR_PHP . 'footer.php');  ?>

</section>

