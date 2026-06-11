<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Rumah Sakit</title>

    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">

    <style>

    /* ================= BODY ================= */

    body{
        background:#f4f8fc;
        font-family:'Nunito',sans-serif;
    }

    /* ================= SIDEBAR ================= */

    #accordionSidebar{
        background:linear-gradient(180deg,#0f4c81,#1976d2) !important;
    }

    .sidebar-brand,
    .sidebar-brand-text,
    .sidebar-brand-icon,
    .sidebar-brand i{
        color:#fff !important;
    }

    .sidebar .nav-item .nav-link{
        color:rgba(255,255,255,.9);
    }

    .sidebar .nav-item .nav-link:hover{
        background:rgba(255,255,255,.12);
        border-radius:10px;
    }

    /* ================= TOPBAR ================= */

    .topbar{
        background:#ffffff !important;
        box-shadow:0 3px 15px rgba(0,0,0,.05);
    }

    /* ================= CARD ================= */

    .card{
        border:none !important;
        border-radius:20px;
        overflow:hidden;
        box-shadow:0 8px 25px rgba(0,0,0,.08);
    }

    .card-header{
        background:linear-gradient(135deg,#0f4c81,#1976d2) !important;
        border:none !important;
        color:white !important;
        padding:18px 25px;
    }

    .card-header h4,
    .card-header h5{
        margin:0;
        color:white !important;
        font-weight:700;
    }

    .card-body{
        padding:30px !important;
    }

    /* ================= FORM ================= */

    .form-group{
        margin-bottom:25px !important;
    }

    .form-group label{
        font-weight:600;
        color:#0f4c81;
        margin-bottom:8px;
    }

    .form-control{
        border:1px solid #dce6f1;
        border-radius:12px;
        min-height:50px;
        padding:12px 15px;
        transition:.3s;
    }

    .form-control:focus{
        border-color:#0f4c81;
        box-shadow:0 0 0 4px rgba(15,76,129,.12);
    }

    .form-control::placeholder{
        color:#adb5bd;
    }

    textarea.form-control{
        min-height:120px;
        resize:none;
    }

    /* ================= BUTTON ================= */

    .btn{
        border-radius:10px;
        font-weight:600;
        padding:10px 20px;
        transition:.3s;
    }

    .btn-primary{
        background:#0f4c81 !important;
        border:none !important;
    }

    .btn-primary:hover{
        background:#0c3d67 !important;
        transform:translateY(-2px);
    }

    .btn-secondary{
        background:#1976d2 !important;
        border:none !important;
        color:white !important;
    }

    .btn-secondary:hover{
        background:#1565c0 !important;
    }

    .btn-danger{
        border:none !important;
    }

    /* ================= TABLE ================= */

    .table{
        border-radius:12px;
        overflow:hidden;
    }

    .table thead{
        background:#0f4c81;
        color:white;
    }

    /* ================= BADGE ================= */

    .badge-info{
        background:#0f4c81 !important;
    }

    .badge-maroon{
        background:#0f4c81 !important;
        color:white !important;
    }

    /* ================= TITLE ================= */

    .text-gray-800{
        color:#0f4c81 !important;
        font-weight:700;
    }

    /* ================= SHADOW ================= */

    .shadow{
        box-shadow:0 .5rem 1.5rem rgba(0,0,0,.08)!important;
    }

    /* ================= LINK ================= */

    a{
        color:#0f4c81;
    }

    a:hover{
        color:#1976d2;
        text-decoration:none;
    }

    </style>

</head>

<body id="page-top">

<div id="wrapper">