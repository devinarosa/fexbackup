<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title;?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
</head>
<body class="d-flex flex-column">
    
    <div class="d-flex justify-content-center" id="wrapper">

    <!-- Sidebar -->
        <div class="border-right sidebar-wrapper-vendor" id="sidebar-wrapper">
            <div class="sidebar-heading text-white"><img src="<?= base_url('assets/img')?>/fex1.png" alt=""></div>
            <div class="list-group list-group-flush">
                <a href="<?= base_url('DashboardVendor')?>" class="list-group-item list-group-item-action <?= $active1;?>"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                <a href="<?= base_url('VendorEditProfile')?>" class="list-group-item list-group-item-action <?= $active2;?>"><i class="fas fa-fw fa-user"></i> Edit Profile</a>
            </div>
        </div>
    <!-- /#sidebar-wrapper -->