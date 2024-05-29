<?php $this->views('includes/header'); ?>
<?php $this->views('includes/nav'); ?>

<div class="container is-fluid has-background-white" style="max-width: 1000px;">
    <section class="section">
        <?php $this->views('includes/crumbs', ['crumbs' => $crumbs]); ?>

        <?php if ($row) : ?>
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-half-desktop is-full-mobile">
                        <div class="box has-background-white">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-128x128">
                                        <?php
                                        $image = get_image($row->image, $row->gender);
                                        ?>
                                        <img src="<?= $image ?>" alt="Profile Picture" class="image is-rounded">
                                        <h3 class="is-size-5 has-text-centered has-text-black"><?= esc($row->firstname) ?> <?= esc($row->lastname) ?></h3>
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <table class="table is-fullwidth is-hoverable has-background-primary">
                                        <tbody>
                                            <tr>
                                                <th>First Name:</th>
                                                <td><?= esc($row->firstname) ?> <?= esc($row->lastname) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Rank:</th>
                                                <td><?= esc($row->rank) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Gender:</th>
                                                <td><?= esc($row->gender) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Date Created:</th>
                                                <td><?= get_date($row->date) ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content">
                                <div class="tabs is-small mr-5">
                                    <ul>
                                        <li class="<?= $page_tab == 'basic-info' ? 'is-active' : ''; ?>">
                                            <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=basic-info">Basic Info</a>
                                        </li>
                                        <li class="<?= $page_tab == 'classes' ? 'is-active' : ''; ?>">
                                            <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=classes">Classes</a>
                                        </li>
                                        <li class="<?= $page_tab == 'tests' ? 'is-active' : ''; ?>">
                                            <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=tests">Tests</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="field has-addons">
                                    <div class="control">
                                        <input class="input is-size-7 ml-5 has-background-white smart-input" type="text">
                                    </div>
                                    <div class="control">
                                        <button class="button is-info is-size-7 ml-5">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <center>
                <h4>That profile was not found!</h4>
            </center>
        <?php endif; ?>
    </section>
</div>

<?php $this->views('includes/footer'); ?>