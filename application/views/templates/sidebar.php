<style>

.sidebar{
    background: linear-gradient(180deg,#0f4c81,#1e88e5) !important;
    min-height:100vh;
}

.sidebar-brand{
    height:90px;
}

.sidebar-brand-icon{
    font-size:28px;
    color:#ffffff !important;
}

.sidebar-brand-text{
    font-size:18px;
    font-weight:700;
    color:#ffffff !important;
}

.sidebar-divider{
    border-top:1px solid rgba(255,255,255,.15);
}

.sidebar .nav-item{
    margin:6px 10px;
}

.sidebar .nav-link{
    border-radius:12px;
    padding:12px 15px !important;
    transition:.3s;
}

.sidebar .nav-link i{
    margin-right:10px;
}

.sidebar .nav-link:hover{
    background:rgba(255,255,255,.15);
}

.menu-title{
    color:rgba(255,255,255,.7);
    font-size:11px;
    text-transform:uppercase;
    letter-spacing:1px;
    margin:15px 0 10px 20px;
}

.rs-logo{
    width:55px;
    height:55px;
    border-radius:50%;
    background:rgba(255,255,255,.15);
    display:flex;
    align-items:center;
    justify-content:center;
}

.logout-btn:hover{
    background:#dc3545 !important;
}

</style>

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <?php if($this->session->userdata('login')): ?>

    <!-- ADMIN -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="<?= site_url('dashboard'); ?>">

        <div class="rs-logo">
            <i class="fas fa-hospital-alt"></i>
        </div>

        <div class="sidebar-brand-text mx-3">
            RS Sehat Sentosa
        </div>

    </a>

    <hr class="sidebar-divider">

    <div class="menu-title">
        Menu Admin
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('dashboard'); ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('pasien'); ?>">
            <i class="fas fa-user-injured"></i>
            <span>Data Pasien</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('dokter'); ?>">
            <i class="fas fa-user-md"></i>
            <span>Data Dokter</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('pendaftaran'); ?>">
            <i class="fas fa-notes-medical"></i>
            <span>Pendaftaran</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= site_url('laporan'); ?>">
            <i class="fas fa-chart-line"></i>
            <span>Laporan & Statistik</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link logout-btn"
           href="<?= site_url('auth/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <?php elseif($this->session->userdata('login_pasien')): ?>

    <!-- PASIEN -->

    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="<?= site_url('dashboard_pasien'); ?>">

        <div class="rs-logo">
            <i class="fas fa-user-injured"></i>
        </div>

        <div class="sidebar-brand-text mx-3">
            Menu Pasien
        </div>

    </a>

    <hr class="sidebar-divider">

    <div class="menu-title">
        Menu Pasien
    </div>

    <li class="nav-item">
        <a class="nav-link"
           href="<?= site_url('dashboard_pasien'); ?>">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>


    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link logout-btn"
           href="<?= site_url('login_pasien/logout'); ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>
    </li>

    <?php endif; ?>

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">