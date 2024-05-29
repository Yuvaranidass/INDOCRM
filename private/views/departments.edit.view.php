<?php $this->views('includes/header'); ?>
<?php $this->views('includes/nav'); ?>


<div class="container is-fluid" style="max-width: 1000px;">
    <section class="section">
        <?php $this->views('includes/crumbs', ['crumbs' => $crumbs]); ?>
        <?php if ($row) : ?>
            <form method="post">
                <div class="field smart-colleges">
                    <?php if (count($errors) > 0) : ?>
                        <div class="notification is-warning is-size-7 mt-6 mr-6">
                            <?php foreach ($errors as $error) : ?>
                                <p class="mr-6"><?= $error ?></p>
                            <?php endforeach ?>
                            <button class="delete"></button>
                        </div>
                    <?php endif; ?>
                    <h3 class="title has-text-black has-text-weight-semibold">Edit Department</h3>
                    <label for="college" class="label has-text-black">Department Name:</label>
                    <div class="control">
                        <input type="text" value="<?= get_var('department', $row[0]->department) ?>" id="department" name="department" class="input has-background-white has-text-black" autocomplete="off" autofocus>
                        <button class="button is-primary has-text-white mt-3">Save</button>
                        <a href="<?= ROOT ?>/departments">
                            <input class="button is-danger has-text-white mt-3 cancel" value="Cancel">
                        </a>
                    </div>
                </div>
            </form>
        <?php else : ?>
            <div class="is-flex is-justify-content-center">
                <p>That College was not found !</p>
            </div>
            <div class="is-flex is-justify-content-center">
                <a href="<?= ROOT ?>/departments">
                    <input class="button is-danger has-text-white mt-3 cancel" value="Cancel">
                </a>
            </div>
        <?php endif; ?>
    </section>
</div>
<script src="<?= ASSETS ?>/script.js"></script>

<?php $this->views('includes/footer'); ?>