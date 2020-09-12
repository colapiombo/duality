<!-- Sidebar -->
<section id="sidebar">

    <!-- Intro -->
    <section id="intro">
        <a href="#" class="logo"><img src="images/logo.jpg" alt=""/></a>
        <header>
            <h2>Future Imperfect</h2>
            <p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
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
                            <img src="<?= ($lastPages->user('profilePicture') ? $lastPages->user('profilePicture') : Theme::src('img/noimage.png')) ?>" alt=""/>
                        </a>
                    </header>
                    <a href="<?= $lastPages->permalink(); ?>" class="image">
                        <img src="<?= ($lastPages->coverImage() ? $lastPages->coverImage() : Theme::src('img/noimage.png')) ?>" alt=""/>
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


    <!-- Footer -->
    <section id="footer">
        <!-- Social Networks -->
        <ul class="icons">
            <?php foreach (Theme::socialNetworks() as $key => $label): ?>
                <li>
                    <a href="<?= $site->{$key}(); ?>" class="icon brands fa-<?= $key ?>" target="_blank">
                        <span class="label">
                            <?= $key ?>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="copyright">
            &copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.
        </p>

    </section>

</section>

