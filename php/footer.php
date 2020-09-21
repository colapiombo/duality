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
        <?php echo $site->footer(); ?>&nbsp;&nbsp;
        Powered by <a target="_blank" href="https://www.bludit.com">Bludit</a>. &nbsp;&nbsp; Duality
        Design by <a title="Colapiombo" href="https://combi.li/">Colapiombo</a>
    </p>

</section>