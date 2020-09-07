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
                <p><?= $L->get('Reading time') . ': ' . $page->readingTime() ?></p>

            </div>
            <div class="meta">
                <time class="published" datetime="<?= $page->date(); ?>"><?= $page->date(); ?></time>
                <a href="#" class="author"><span class="name"><?= $page->user('nickname'); ?></span><img
                            src="images/avatar.jpg" alt=""/></a>
            </div>
        </header>
        <!-- Cover image -->
        <?php if ($page->coverImage()): ?>
            <span class="image featured"><img src="<?= $page->coverImage(); ?>" alt=""/></span>
        <?php endif ?>
        <?= $page->content(); ?>
        <footer>
            <ul class="icons">
                <li><a href="https://twitter.com/share?text=<?php echo urlencode($page->title()) ?>&amp;url=<?php echo urlencode($page->permalink()) ?>" class="icon brands fa-twitter">
                        <span class="label">Twitter</span>
                    </a>
                </li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
                <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <div class="share">
                <p>Share on:</p>
                <span class="twitter" data-url="https://twitter.com/share?text=<?php echo urlencode($page->title()) ?>&amp;url=<?php echo urlencode($page->permalink()) ?>"
                      rel="nofollow noreferrer" title="Share on Twitter">
                    <i class="icon-twitter"></i>
                </span>
                <span class="facebook"
                                  data-url="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page->permalink()) ?>"
                                  data-toggle="tooltip" data-placement="top" rel="nofollow noreferrer"
                                  data-original-title="Share on Facebook">
                    <i class="icon-facebook"></i>
                </span>
                <span data-url="https://www.reddit.com/submit?url=<?php echo urlencode($page->permalink()) ?>&amp;title=<?php echo urlencode($page->title()) ?>"
                                  data-toggle="tooltip" data-placement="top" class="reddit" rel="nofollow noreferrer"
                                  data-original-title="Share on Reddit">
                    <i class="icon-reddit"></i>
                </span>
                <a href="mailto:?subject=<?php echo rawurlencode($page->title()) ?>&amp;body=<?php echo urlencode($page->permalink()) ?>"
                   data-toggle="tooltip" data-placement="top" class="email" rel="nofollow noreferrer"
                   data-original-title="Share by Email">
                    <i class="icon-envelope"></i>
                </a>
            </div>
            <!-- Begin Tags -->
            <ul class="stats">
                <?php if ($page->category() == !""): ?>
                    <li>
                        <a href="<?= HTML_PATH_ROOT . $url->filters('category') . '/' . strtolower($page->category()) ?>"><?= $page->category(); ?></a>
                    </li>
                <?php endif ?>

                <?php foreach ($page->tags(true) as $tagKey => $tagName): ?>
                    <li><a href="<?php echo DOMAIN_TAGS . $tagKey ?>"><?php echo $tagName; ?></a></li>
                <?php endforeach ?>
            </ul>
            <!-- End Tags -->
        </footer>

    </article>
</div>

<!-- Load Bludit Plugins: Page End -->
<?php Theme::plugins('pageEnd'); ?>


