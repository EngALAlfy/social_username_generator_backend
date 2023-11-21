<!-- Styles -->
<style>
    .nav-link {
        color: #000;
        padding: 15px 20px;
    }

    .nav-link:hover {
        background-color: #e0e0e0;
    }

    .nav-link.active {
        background-color: #e0e0e0;
    }

    .dropdown-divider {
        margin: 0 !important;
    }

    #sidebar {
        height: 100vh;
        max-width: 20% !important;
        position: fixed;
        left: 0;
        z-index: 1;
        margin-top: 60px;
    }

    .sidebar .nav {
        width: 100%;
    }

    .sidebar .nav-item {
        width: 100%;
    }

    .user-details {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    .user-icon {
        margin-right: 10px;
        font-size: 40px;
    }
</style>
<!-- Code -->
<nav id="sidebar" class="col d-md-block bg-light sidebar p-0 border-right">
    <div class="position-sticky">
        <div class="user-details">
            <span class="fa fa-user user-icon"></span>
            <div>
                <div><b>Username:</b> 
                    <?php echo $_SESSION['username']; ?>
                </div>
                <div><b>User ID:</b> 
                    <?php echo $_SESSION['user_id']; ?>
                </div>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="dropdown-divider"></li>
            <li class="nav-item">
                <a class="nav-link <?php echo str_contains($_SERVER['REQUEST_URI'], "/admin/pages/post/index.php") ? 'active' : '' ?>" href="/admin/pages/post/index.php">
                    <span class="fa fa-portrait mr-2"></span> Page Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo str_contains($_SERVER['REQUEST_URI'], "/admin/pages/ads/index.php") ? 'active' : '' ?>" href="/admin/pages/ads/index.php">
                    <span class="fa fa-list mr-2"></span> Ads List
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-item">
                <a class="nav-link  <?php echo str_contains($_SERVER['REQUEST_URI'], "/admin/pages/ads/add.php") ? 'active' : '' ?>" href="/admin/pages/ads/add.php">
                    <span class="fa fa-plus mr-2"></span> Add New Ad
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-item">
                <a class="nav-link  <?php echo str_contains($_SERVER['REQUEST_URI'], "/admin/pages/settings/index.php") ? 'active' : '' ?>" href="/admin/pages/settings/index.php">
                    <span class="fa fa-cog mr-2"></span> Settings
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-item">
                <a class="nav-link  <?php str_contains($_SERVER['REQUEST_URI'], "/admin/pages/change_password.php") ? 'active' : '' ?>" href="/admin/pages/change_password.php">
                    <span class="fa fa-lock mr-2"></span> Change Password
                </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/pages/logout.php">
                    <span class="fa fa-sign-out-alt mr-2"></span> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>