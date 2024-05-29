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
                                <div class="media-content">
                                    <p class="has-text-black has-text-weight-semibold is-size-5 has-text-centered"><?= esc(ucwords($row->class)) ?></p>
                                    <table class="table is-fullwidth is-hoverable has-background-primary">
                                        <tbody>
                                            <tr>
                                                <th>Class Name:</th>
                                                <td><?= esc($row->class) ?></td>
                                            </tr>
                                            <tr>
                                                <th>Created By:</th>
                                                <td><?= esc($row->user->firstname) ?> <?= esc($row->user->lastname) ?></td>
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
                                        <li class="<?= $page_tab == 'staffs' ? 'is-active' : ''; ?>">
                                            <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=staffs">Staffs</a>
                                        </li>
                                        <li class="<?= $page_tab == 'students' ? 'is-active' : ''; ?>">
                                            <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=students">Students</a>
                                        </li>
                                        <li class="<?= $page_tab == 'tests' ? 'is-active' : ''; ?>">
                                            <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=tests">Tests</a>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                                switch ($page_tab) {
                                    case 'staffs':
                                        include(views_path('class-tab-staff'));
                                        break;

                                    case 'students':
                                        $this->views('class-tab-students');
                                        break;

                                    case 'tests':
                                        $this->views('class-tab-tests');
                                        break;

                                    case 'staffs-add':
                                        $this->views('class-tab-staff-add');
                                        break;

                                    case 'students-add':
                                        $this->views('class-tab-students-add');
                                        break;

                                    case 'tests-add':
                                        $this->views('class-tab-tests-add');
                                        break;

                                    default:

                                        break;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <center>
                <h4>That class was not found!</h4>
            </center>
        <?php endif; ?>
    </section>
</div>

<?php $this->views('includes/footer'); ?>