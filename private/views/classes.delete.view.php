<?php $this->views('includes/header'); ?>
<?php $this->views('includes/nav'); ?>


<div class="container is-fluid" style="max-width: 1000px;">
    <section class="section">
        <?php $this->views('includes/crumbs', ['crumbs' => $crumbs]); ?>
        <?php if ($row) : ?>
            <form method="post">
                <div class="field smart-colleges">
                    <h3 class="title has-text-black has-text-weight-semibold">Are you sure you want to delete?</h3>
                    <label for="college" class="label has-text-black">Class Name:</label>
                    <div class="control">
                        <input type="text" disabled value="<?= get_var('class', $row[0]->class) ?>" id="class" name="class" class="input has-background-white has-text-black" autocomplete="off" autofocus>
                        <input type="hidden" name="id">
                        <button class="button is-danger has-text-white mt-3">Delete</button>
                        <a href="<?= ROOT ?>/classes">
                            <input class="button is-success has-text-white mt-3 cancel" value="Cancel">
                        </a>
                    </div>
                </div>
            </form>
        <?php else : ?>
            <div class="is-flex is-justify-content-center">
                <p>That Classes was not found !</p>
            </div>
            <div class="is-flex is-justify-content-center">
                <a href="<?= ROOT ?>/classes">
                    <input class="button is-danger has-text-white mt-3 cancel" value="Cancel">
                </a>
            </div>
        <?php endif; ?>
    </section>
</div>
<script src="<?= ASSETS ?>/script.js"></script>

<?php $this->views('includes/footer'); ?>