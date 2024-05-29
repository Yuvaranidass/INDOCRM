<?php $this->views('includes/header'); ?>
<?php $this->views('includes/nav'); ?>

<div class="container is-fluid" style="max-width: 1000px;">
    <section class="section">
        <?php $this->views('includes/crumbs', ['crumbs' => $crumbs]); ?>
        <div class="field has-addons mr-6 is-flex is-justify-content-space-between">
            <div class="is-flex">
                <div class="control">
                    <input class="input is-size-7 ml-5 has-background-white smart-input" type="text">
                </div>
                <div class="control">
                    <button class="button is-info is-size-7 ml-5">
                        Search
                    </button>
                </div>
            </div>
            <a href="<?= ROOT ?>/signup">
                <button class="button is-primary has-text-white is-size-7-mobile mb-4"><i class="fa fa-plus"></i>Add New</button>
            </a>
        </div>

        <div class="container">
            <div class="columns is-multiline is-centered">
                <?php if ($rows) : ?>
                    <?php $count = 0; ?>
                    <?php foreach ($rows as $row) : ?>
                        <?php
                        $image = get_image($row->image, $row->gender);
                        ?>
                        <div class="column is-full-mobile is-one-fifth-tablet">
                            <div class="card-wrapper">
                                <div class="card has-background-grey-lighter" style="max-width: 14rem; min-width: 14rem;">
                                    <div class="card-image">
                                        <figure class="image">
                                            <img src="<?= $image ?>" alt="Profile Picture" class="image is-rounded">
                                        </figure>
                                    </div>
                                    <div class="card-content">
                                        <div class="media my-2 has-text-centered">
                                            <div class="media-content my-0">
                                                <p class="title is-5 has-text-black has-text-weight-semibold"><?= $row->firstname ?> <?= $row->lastname ?></p>
                                                <p class="subtitle is-6 has-text-grey">Rank: <?= $row->rank ?></p>
                                            </div>
                                        </div>
                                        <a href="<?= ROOT ?>/profile/<?= $row->user_id ?>">
                                            <div class="content">
                                                <button class="button is-info is-fullwidth">Profile</button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $count++;
                        if ($count % 5 === 0) :
                        ?>
            </div>
            <div class="columns is-multiline is-centered">
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else : ?>
        <h4>No Users were fount at this time</h4>
    <?php endif; ?>
            </div>
        </div>

    </section>


</div>

<?php $this->views('includes/footer'); ?>