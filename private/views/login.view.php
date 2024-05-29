<?php $this->views('includes/header'); ?>

<?php if (count($errors) > 0) : ?>
    <div class="notification is-warning is-size-7 errors">
        <?php foreach ($errors as $error) : ?>
            <p class="mr-6"><?= $error ?></p>
        <?php endforeach ?>
        <button class="delete"></button>
    </div>
<?php endif; ?>

<div class="smart-login">
    <section class="section has-background-white smart-container-login">
        <h2 class="is-size-4 has-text-black has-text-centered has-text-weight-semibold">MY COLLEGE</h2>
        <img src="<?= ROOT ?>/assets/logo.jpg" alt="logo" class="image is-128x128 smart-img">
        <h3 class="is-size-5 has-text-weight-semibold">LOGIN</h3>
        <form method="post">
            <div class="field">
                <label for="email" class="label has-text-black">Email:</label>
                <div class="control">
                    <input type="email" value="<?= get_var('email') ?>" id="email" name="email" class="input has-background-white has-text-black" autocomplete="off" autofocus>
                </div>
            </div>
            <div class="field">
                <label for="password" class="label has-text-black">Password:</label>
                <div class="control">
                    <input type="password" value="<?= get_var('password') ?>" id="password" name="password" class="input has-background-white has-text-black">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-primary smart-btn">Login</button>
                </div>
            </div>
        </form>
    </section>
</div>
<script src="<?= ASSETS ?>/script.js"></script>

<?php $this->views('includes/footer'); ?>