<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <style type="text/css">
        .menu-active {
            font-size: 18px;
        }

        .menu-passive{
            font-size: 18px; background-color: #3a2a67; color: white;
        }
    </style>
</head>
<body class="d-flex flex-column">

    <div class="d-flex justify-content-center" id="wrapper">

            <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-white"><img src="<?= base_url('assets/img')?>/fex1.png" alt=""></div>
                    <div class="list-group list-group-flush">
                        <a href="<?= base_url('DashboardAdmin')?>" class="list-group-item list-group-item-action <?= $active1;?>"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                        <a href="<?= base_url('AdminUserManagement')?>" class="list-group-item list-group-item-action <?= $active2;?>"><i class="fas fa-fw fa-user"></i> User Management</a>
                        <a href="<?= base_url('AdminMenuManagement')?>" class="list-group-item list-group-item-action <?= $active3;?>"><i class="fas fa-fw fa-edit"></i> Menu Management</a>
                    </div>
                </div>
            <!-- /#sidebar-wrapper -->