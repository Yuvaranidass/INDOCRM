<nav class="breadcrumb is-centered is-size-7-mobile mt-6" aria-label="breadcrumbs">
    <ul>
        <?php if (isset($crumbs)) : ?>
            <?php foreach ($crumbs as $crumb) : ?>
                <li class=""><a href="<?= $crumb[1] ?>"><?= $crumb[0] ?></a></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
</nav>