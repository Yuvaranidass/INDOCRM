<?php $this->views('includes/header'); ?>

<div class="smart-login">
    <section class="section has-background-white smart-container-sign">
        <div class="is-flex is-justify-content-space-between mb-3">
            <p class="is-size-5 has-text-black has-text-centered has-text-weight-semibold">ADD USER</p>
        </div>
        <?php if (count($errors) > 0) : ?>
            <div class="notification is-warning is-size-7 errors">
                <?php foreach ($errors as $error) : ?>
                    <p class="mr-6"><?= $error ?></p>
                <?php endforeach ?>
                <button class="delete"></button>
            </div>
        <?php endif; ?>
        <form method="post">
            <div class="columns">
                <div class="column is-6">
                    <div class="field">
                        <label for="firstname" class="label has-text-black">First Name:</label>
                        <div class="control">
                            <input type="text" value="<?= get_var('firstname') ?>" id="firstname" name="firstname" class="input has-background-white has-text-black" autocomplete="off" autofocus>
                        </div>
                    </div>
                    <div class="field">
                        <label for="lastname" class="label has-text-black">Last Name:</label>
                        <div class="control">
                            <input type="text" value="<?= get_var('lastname') ?>" id="lastname" name="lastname" class="input has-background-white has-text-black" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label for="email" class="label has-text-black">Email:</label>
                        <div class="control">
                            <input type="email" value="<?= get_var('email') ?>" id="email" name="email" class="input has-background-white has-text-black" autocomplete="off">
                        </div>
                    </div>
                    <div class="field">
                        <label for="phone" class="label has-text-black">Phone No:</label>
                        <div class="control">
                            <input type="number" value="<?= get_var('phone') ?>" id="phone" name="phone" class="input has-background-white has-text-black" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6">
                    <div class="field">
                        <label for="gender" class="label has-text-black">Gender:</label>
                        <div class="control">
                            <select class="input has-background-white has-text-black" id="gender" name="gender">
                                <option <?= get_select('gender', '') ?> value="" selected disabled hidden>---Select Gender---</option>
                                <option <?= get_select('gender', 'Male') ?> value="Male">Male</option>
                                <option <?= get_select('gender', 'Female') ?> value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <label for="rank" class="label has-text-black">Rank:</label>
                        <div class="control">
                            <?php if ($mode == 'students') : ?>
                                <input class="input has-background-white" type="hidden" name="rank" value="student">
                            <?php else : ?>
                                <select class="input has-background-white has-text-black" id="rank" name="rank">
                                    <option <?= get_select('rank', '') ?> value="" selected disabled hidden>---Select Rank---</option>
                                    <option <?= get_select('rank', 'student') ?> value="student">Student</option>
                                    <option <?= get_select('rank', 'staff') ?> value="staff">Staff</option>
                                    <option <?= get_select('rank', 'admin') ?> value="admin">Admin</option>
                                    <?php if (Auth::getRank() == 'master') : ?>
                                        <option <?= get_select('rank', 'master') ?> value="master">Super Admin</option>
                                    <?php endif; ?>
                                </select>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="field">
                        <label for="password" class="label has-text-black">Password:</label>
                        <div class="control">
                            <input type="password" value="<?= get_var('password') ?>" id="password" name="password" class="input has-background-white has-text-black">
                        </div>
                    </div>
                    <div class="field">
                        <label for="password2" class="label has-text-black">Re-Password:</label>
                        <div class="control">
                            <input type="password" value="<?= get_var('password2') ?>" id="password2" name="password2" class="input has-background-white has-text-black">
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6">
                    <button class="button is-link has-text-white has-text-weight-semibold smart-btn">ADD USER</button>
                </div>
                <?php if ($mode == 'students') : ?>
                    <a href="<?= ROOT ?>/students">
                        <div class="column is-6">
                            <input class="button is-warning has-text-white has-text-weight-semibold smart-cancel" value="Cancel">
                        </div>
                    </a>
                <?php else : ?>
                    <a href="<?= ROOT ?>/users">
                        <div class="column is-6">
                            <input class="button is-warning has-text-white has-text-weight-semibold smart-cancel" value="Cancel">
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </form>
    </section>
</div>
<script src="<?= ASSETS ?>/script.js"></script>

<?php $this->views('includes/footer'); ?>