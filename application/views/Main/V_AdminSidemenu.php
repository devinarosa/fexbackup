<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script type="text/javascript">
        var baseurl = "<?= base_url('')?>"
    </script>
</head>
<body class="d-flex flex-column">

    <div class="d-flex justify-content-center" id="wrapper">

            <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-white"><img src="<?= base_url('assets/img')?>/fex1.png" alt=""></div>
                    <div class="list-group list-group-flush">
                        <a href="<?= base_url('DashboardAdmin')?>" class="list-group-item list-group-item-action <?= $active1;?>"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                        <a href="<?= base_url('AddVendor')?>" class="list-group-item list-group-item-action <?= $active2;?>"><i class="fas fa-fw fa-dollar-sign"></i> Add Vendor</a>
                        <a href="<?= base_url('AddTenant')?>" class="list-group-item list-group-item-action <?= $active3;?>"><i class="fas fa-fw fa-school"></i> Add Tenant</a>
                        <a href="<?= base_url('AddAdmin')?>" class="list-group-item list-group-item-action <?= $active4;?>"><i class="fas fa-fw fa-user"></i> Add Admin</a>
                        <a href="<?= base_url('MenuSetup')?>" class="list-group-item list-group-item-action <?= $active6;?>"><i class="fas fa-fw fa-edit"></i> Menu Setup</a>
                        <a href="<?= base_url('DisplaySetting')?>" class="list-group-item list-group-item-action <?= $active5;?>"><i class="fas fa-fw fa-eye"></i> Display Settings</a>
                        <a href="<?= base_url('ExportImport')?>" class="list-group-item list-group-item-action <?= $active7;?>"><i class="fas fa-fw fa-file-export"></i> Export/Import</a>
                    </div>
                </div>
            <!-- /#sidebar-wrapper -->



                <div class="container-xl sidebar-konten">

                    <section id="nav">
                        <nav class="navbar navbar-expand navbar-dark bg-white">
                            <div class="container-xl">
                                <a class="navbar-brand d-none d-sm-block text-dark" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                                <a class="navbar-brand d-block d-sm-none text-dark" href="<?= base_url('Dashboard')?>">HMS</a>
                                <ul class="navbar-nav ml-auto d-flex align-items-center">
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/roles/<?= $org[0]['logo']; ?>" alt="user" class="img-circle" width="50"></a>
                                        <div class="dropdown-menu" aria-labelledby="userMenu" style="transform: translate(-50%, 0)">
                                            <button class="dropdown-item" type="button"><a href="<?= base_url('Dashboard')?>" class="text-decoration-none text-dark">Dashboard</a></button>
                                            <button class="dropdown-item" type="button"><a href="<?= base_url('Logout')?>" class="text-decoration-none text-dark">Logout</a></button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </section>

                    <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-md-4 mt-3" id="menu-toggle">Admin Menu</button>