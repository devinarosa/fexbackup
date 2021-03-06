<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url('assets/multiselect/dist/')?>css/bootstrap-multiselect.css" type="text/css">
    <style type="text/css">
        .menu-active {
            font-size: 18px;
        }

        .menu-passive{
            font-size: 18px; background-color: #3a2a67; color: white;
        }

        .boothColorButton{
            background-color: #C0BDF2;
            cursor: pointer;
            height: 40px;
            position: relative;
        }
        .boothColorButton.checked{
            border: 2px solid black;
        }

        .boothColorButton.checked::before{
            content :'✔';
        }

        .logoPreview{
            width: auto;
            height: auto;
            min-width: 200px;
            max-width: 250px;
            background-color: #ddd;
        }

        .logoPreview .preview{
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .boothPreview{
            position: relative;
        }
        
        .logo{
            position: absolute;
            top: 9.7%;
            left: 28.6%;
            width: 16%;
            height: 19.9%;
            display: flex;
            align-items: center;
        }
        .booth-name{
            position: absolute;
            top: 11%;
            left: 47%;
            width: 39%;
            height: 19%;
            font-size: 1.4rem;
            line-height: 1.5rem;
        }
        .gallery {
            position: absolute;
            top: 41.4%;
            left: 45.72%;
            width: 17.73%;
            height: 16.6%;
            transform: rotate3d(1,0,0,5deg);
        }

        .booth-logo{
            width: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: scale-down;
        }
        .booth-desc{
            position: absolute;
            top: 57.6%;
            left: 25.1%;
            width: 7.3%;
            height: 15.9%;
            font-size: 0.45rem;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .fotoPreview{
            height: 170px;
            background-color: #ddd;
            position: relative;
        }
        .fotoPreview .removeImage{
            position: absolute;
            right: 3%;
            top : 4%;
            background-color: rgb(243, 243, 243);
            padding: 5px;
            cursor: pointer;
        }
        .fotoPreview .preview{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hidden{
            opacity: 0;
            pointer-events: none;
        }

        .plus{
            height: 170px;
            color: #ddd;
            cursor: pointer;
        }
        .fa-plus{
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <script type="text/javascript">
        var baseurl = "<?= base_url('')?>"
    </script>
</head>
<body class="d-flex flex-column">
    
    <div class="d-flex justify-content-center" id="wrapper">

    <!-- Sidebar -->
        <div class="border-right sidebar-wrapper-vendor" id="sidebar-wrapper">
            <div class="sidebar-heading text-white"><img src="<?= base_url('assets/img')?>/fex1.png" alt=""></div>
            <div class="list-group list-group-flush">
                <a href="<?= base_url('DashboardTenant')?>" class="list-group-item list-group-item-action <?= $active1;?>"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                <a href="<?= base_url('TenantEditProfile')?>" class="list-group-item list-group-item-action <?= $active2;?>"><i class="fas fa-fw fa-user"></i> Edit Profile</a>
                <a href="<?= base_url('TenantManageAccount')?>" class="list-group-item list-group-item-action <?= $active3;?>"><i class="fas fa-fw fa-user"></i> Manage Account</a>
            </div>
        </div>
    <!-- /#sidebar-wrapper -->

    <div class="container-xl">

        <section id="nav">
            <nav class="navbar navbar-expand navbar-dark bg-white">
                <div class="container-xl">
                    <a class="navbar-brand d-none d-sm-block text-dark" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                    <a class="navbar-brand d-block d-sm-none text-dark" href="<?= base_url('Dashboard')?>">HMS</a>
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class="nav-item dropdown">
                        <a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/'); ?>img/roles/<?= $org[0]['logo']?>" alt="user" class="img-circle" width="50"></a>
                        <div class="dropdown-menu" aria-labelledby="userMenu" style="transform: translate(-50%, 0)">
                            <a  href="<?= base_url('TenantEditProfile')?>" class="btn dropdown-item" >Edit Profile</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" type="button"><a href="<?= base_url('Logout')?>" class="text-decoration-none text-dark">Logout</a></button>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-4 mt-3" id="menu-toggle">Admin Menu</button>