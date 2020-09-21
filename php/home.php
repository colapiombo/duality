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

<!-- Main -->
<div id="main">
    <!-- Print all the content -->
    <?php foreach ($content as $page): ?>
        <?php Theme::plugins('pageBegin'); ?>
        <!-- Post -->
        <article class="post">
            <header>

                <div class="title">
                    <h2>
                        <a href="<?= $page->permalink(); ?>">
                            <?= $page->title(); ?>
                        </a>
                    </h2>
                    <p>
                        <?= (empty($page->description()) ? '' : $page->description()) ?>
                        <?php echo $page->readingTime(); ?>
                    </p>
                </div>
                <div class="meta">
                    <time class="published" datetime="<?= $page->date(); ?>">
                        <?= $page->date(); ?>
                    </time>
                    <a href="#" class="author">
                        <span class="name">
                            <?= $page->user('nickname'); ?>
                        </span>
                        <img src="<?= ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('assets/img/favicon-32x32.png')) ?>"
                             alt="Author"/></a>
                </div>
            </header>

            <a href="<?= $page->permalink(); ?>" class="image featured">
                <img src="<?= ($page->coverImage() ? $page->coverImage() : '') ?>" alt=""/>
            </a>
            <?= $page->contentBreak(); ?>

            <footer>
                <!-- Shows "read more" button if necessary -->

                <?php if ($page->readMore()) { ?>
                    <ul class="actions">
                        <li><a href="<?= $page->permalink(); ?>" class="button large"><?= $L->get('Read more'); ?></a>
                        </li>
                    </ul>
                <?php } ?>

                <ul class="stats">
                    <?php
                    if ($page->category() == !"") {
                        echo '<li><a href="' . HTML_PATH_ROOT . $url->filters('category') . '/' . strtolower($page->category()) . '">' . $page->category() . '</a></li>';
                    }
                    ?>
                    <?php
                    $pageTags = $page->tags(true);
                    foreach ($pageTags as $tagKey => $tagName) {
                        echo '<li><a href="' . HTML_PATH_ROOT . $url->filters('tag') . '/' . $tagKey . '">' . $tagName . '</a></li>';
                    }
                    ?>
                </ul>
            </footer>
        </article>
    <?php endforeach ?>


    <!-- Pagination -->
    <?php if (Paginator::numberOfPages() > 1): ?>
        <ul class="actions pagination">
            <li>
                <a href="<?= Paginator::showPrev() ? Paginator::previousPageUrl() : '' ?>"
                   class="<?= Paginator::showPrev() ? '' : 'disabled' ?> button large previous">
                    <?php $language->p('Previous page') ?>
                </a>
            </li>
            <li>
                <a href="<?= Paginator::showNext() ? Paginator::nextPageUrl() : '' ?>"
                   class="<?= Paginator::showNext() ? '' : 'disabled' ?> button large previous">
                    <?php $language->p('Next page') ?>
                </a>
            </li>

        </ul>
    <?php endif ?>
</div>
