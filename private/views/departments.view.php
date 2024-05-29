<?php $this->views('includes/header'); ?>
<?php $this->views('includes/nav'); ?>

<div class="container is-fluid" style="max-width: 1000px;">
    <section class="section">
        <?php $this->views('includes/crumbs', ['crumbs' => $crumbs]); ?>
        <p class="has-text-black has-text-weight-semibold is-size-5 has-text-centered mb-2">Departments</p>
        <div class="container">
            <table class="table is-fullwidth is-size-7-mobile is-hoverable has-background-link is-clickable">
                <tr>
                    <thead>
                        <th></th>
                        <th>College</th>
                        <th>Created By</th>
                        <th>Date</th>
                        <th>
                            <a href="<?= ROOT ?>/departments/add">
                                <button class="button is-primary has-text-white is-size-7-mobile"><i class="fa fa-plus"></i>Add New</button>
                            </a>
                        </th>
                    </thead>
                </tr>
                <?php if ($rows) : ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <td><button class="button is-warning has-text-white">Details<i class="fa fa-angle-right is-size-6 ml-1 mt-1" aria-hidden="true"></i></button></td>
                            <td><?= $row->department ?></td>
                            <td><?= $row->user->firstname ?> <?= $row->user->lastname ?></td>
                            <td><?= get_date($row->date) ?></td>
                            <td>
                                <a href="<?= ROOT ?>/departments/edit/<?= $row->id ?>">
                                    <button class="button is-info has-text-white is-size-7-mobile"><i class="fas fa-edit"></i>Edit</button>
                                </a>
                                <a href="<?= ROOT ?>/departments/delete/<?= $row->id ?>">
                                    <button class="button is-danger has-text-white is-size-7-mobile"><i class="fas fa-trash mr-1"></i>Delete</button>
                                </a>
                                <a href="<?= ROOT ?>/switch_department/<?= $row->id ?>">
                                    <button class="button is-success has-text-white is-size-7-mobile">Switch To<i class="fa fa-angle-right is-size-6 ml-1 mt-1" aria-hidden="true"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <center>
                        <h4>No Departments were found at this time</h4>
                    </center>
                <?php endif; ?>
            </table>
        </div>

    </section>


</div>

<?php $this->views('includes/footer'); ?>