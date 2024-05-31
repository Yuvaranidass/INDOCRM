<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item is-size-4 has-text-weight-semibold" href="<?= ROOT ?>">
            INDO CRM
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="<?= ROOT ?>">
                Home
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/departments">
                Leads
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/users">
                Contacts
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/students">
                Accounts
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/classes">
                Deals
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/tests">
                Tasks
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/tests">
                Meetings
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/tests">
                Calls
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/tests">
                Reports
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/tests">
                Services
            </a>
            <a class="navbar-item" href="<?= ROOT ?>/tests">
                Projects
            </a>
        </div>
        <div class="navbar-end mr-1">
            <!-- <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link ">
                    <?= Auth::getFirstname() ?>
                </a>
                <div class="navbar-dropdown is-right">
                    <a class="navbar-item" href="<?= ROOT ?>/profile">
                        Profile
                    </a>
                    <a class="navbar-item" href="<?= ROOT ?>">
                        Dashboard
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="<?= ROOT ?>/logout">
                        Logout
                    </a>
                </div>  
            </div> -->
            <button class="button is-primary has-text-white is-outlined is-rounded my-2 mr-2">Get Started</button>
        </div>
    </div>
</nav>


<script src="<?= ASSETS ?>/nav.js"></script>