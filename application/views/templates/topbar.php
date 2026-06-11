<style>

.topbar-rs{
    background:#ffffff !important;
    border-radius:15px;
    margin:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.page-title{
    color:#0f4c81;
    font-weight:700;
    font-size:18px;
}

.admin-badge{
    background:#e8f4ff;
    color:#0f4c81;
    padding:8px 15px;
    border-radius:30px;
    font-weight:600;
}

.profile-img{
    width:42px;
    height:42px;
    border-radius:50%;
    border:3px solid #0f4c81;
}

.dropdown-menu{
    border:none;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.1);
}

.dropdown-item:hover{
    background:#e8f4ff;
    color:#0f4c81;
}

</style>

<nav class="navbar navbar-expand navbar-light topbar-rs static-top">

    <button id="sidebarToggleTop"
            class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <div class="page-title">
        <i class="fas fa-hospital-alt"></i>
        Sistem Informasi Rumah Sakit
    </div>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown no-arrow">

            <a class="nav-link dropdown-toggle"
               href="#"
               id="userDropdown"
               role="button"
               data-toggle="dropdown">

                <span class="admin-badge mr-3">
                    Admin
                </span>

                <img class="profile-img"
                     src="<?= base_url('assets/img/undraw_profile_2.svg') ?>">

            </a>

            <div class="dropdown-menu dropdown-menu-right animated--grow-in">

                <div class="dropdown-header text-center">
                    Administrator
                </div>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                    <i class="fas fa-user mr-2"></i>
                    Profile
                </a>

                <a class="dropdown-item" href="#">
                    <i class="fas fa-clock mr-2"></i>
                    Last Login
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item text-danger"
                   href="<?= site_url('auth/logout')?>">

                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Logout

                </a>

            </div>

        </li>

    </ul>

</nav>