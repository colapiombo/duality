<!-- Main -->
<div id="main">
    <!-- Load Bludit Plugins: Page Begin -->
    <?php Theme::plugins('pageBegin'); ?>
    <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="<?= $page->permalink(); ?>"><?= $page->title(); ?></a></h2>
                <p><?= $page->description() ?></p>
                <ul class="tags">
                    <?php if ($page->category() == !""): ?>
                        <li>
                            <a href="<?= HTML_PATH_ROOT . $url->filters('category') . '/' . strtolower($page->category()) ?>"><?= $page->category(); ?></a>
                        </li>
                    <?php endif ?>

                    <?php foreach ($page->tags(true) as $tagKey => $tagName): ?>
                        <li><a href="<?php echo DOMAIN_TAGS . $tagKey ?>"><?php echo $tagName; ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="meta">
                <time class="published" datetime="<?= $page->date(); ?>">
                    <?= $page->date(); ?>
                </time>
                <time class="published">
                    <?= $L->get('Reading time') . ': ' . $page->readingTime() ?>
                </time>
                <a href="#" class="author">
                    <span class="name">
                        <?= $page->user('nickname'); ?>
                    </span>
                    <img src="<?= ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('assets/img/favicon-32x32.png')) ?>" alt="Author"/>
                </a>

            </div>
        </header>
        <!-- Cover image -->
        <?php if ($page->coverImage()): ?>
            <span class="image featured"><img src="<?= $page->coverImage(); ?>" alt=""/></span>
        <?php endif ?>
        <?= $page->content(); ?>
        <!-- Begin Tags -->
        <h5>
            Share on :
        </h5>
        <!-- End Tags -->
        <footer>
                <ul class="icons">
                    <li>
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode($page->title()) ?>&amp;url=<?php echo urlencode($page->permalink()) ?>" class="icon brands fa-twitter" title="Share on Twitter" target="_blank">
                            <span class="label">Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page->permalink()) ?>" class="icon brands fa-facebook-f"  title="Share on Facebook" target="_blank">
                            <span class="label">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.reddit.com/submit?url=<?php echo urlencode($page->permalink()) ?>&amp;title=<?php echo urlencode($page->title()) ?>" class="icon brands fa-reddit" title="Share on Reddit" target="_blank">
                            <span class="label">Rettid</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:?subject=<?php echo rawurlencode($page->title()) ?>&amp;body=<?php echo urlencode($page->permalink()) ?>" class="icon solid fa-envelope" title="Share by Email" target="_blank">
                            <span class="label">Email</span>
                        </a>
                    </li>
                </ul>
        </footer>
    </article>
</div>
<?php  include(THEME_DIR_PHP . 'footer.php');  ?>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>


