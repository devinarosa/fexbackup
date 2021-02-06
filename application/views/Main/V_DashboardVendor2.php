<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        .boothColorButton{
            /* background-color: #D0BDE7; */
            background-color: #C0BDF2;
            cursor: pointer;
            height: 40px;
            position: relative;
        }
        .boothColorButton.checked{
            border: 2px solid black;
        }

        /* wkwkwkwkwkw
            nyusahi anjer centang e.
            jajal kei iki = <i class="fas fa-check"></i>
            pie, ki neng njero css raiso ngono. deloki wes.
            karo nek ngesave ono peringatan e og nek liyane ngedit hahah.
            wes ki, nggo windows emoji hahah.
        */
        .boothColorButton.checked::before{
            content :'✔';
        }
    </style>
</head>
<body class="d-flex flex-column">

    <section id="nav">
        <nav class="navbar navbar-expand navbar-dark bg-white">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block text-dark" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
                  <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a  href="<?= base_url('Logout')?>" class="px-3 text-dark pt-1">Logout</a>
                    </li>
                  </ul>
            </div>
        </nav>
    </section>
    
    <div class="d-flex justify-content-center" id="wrapper">

    <!-- Sidebar -->
        <div class="border-right sidebar-wrapper-vendor2" id="sidebar-wrapper">
            <div class="sidebar-heading text-white"><img src="<?= base_url('assets')?>/img/fex1.png" alt=""></div>
            <div class="list-group list-group-flush">
                <a href="<?= base_url('DashboardVendor')?>" class="list-group-item list-group-item-action" style="font-size: 18px; background-color: #3a2a67; color: white;"><i class="fas fa-fw fa-home"></i> Dashboard</a>
                <a href="<?= base_url('DashboardVendor2')?>" class="list-group-item list-group-item-action" style="font-size: 18px;"><i class="fas fa-fw fa-user"></i> Ubah Profil</a>
            </div>
        </div>
    <!-- /#sidebar-wrapper -->

    <div class="container-xl">

        <button style="width: 200px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white ml-2 ml-md-4 mt-3" id="menu-toggle">Admin Menu</button>

        <section id="dashboard" class="flex-grow-1">
            <div class="container-xl my-5 m-md-3">
                <div class="row"><div class="h1 font-weight-bold px-2">Edit Profil</div></div>

                <form action="" style="font-size: 20px;">
                    <div class="row my-4">
                        <div class="col-md-2"><label for="nama">Nama</label></div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" style="border-radius: 20px;">
                        </div>
                        <div class="col-md-3 mt-2 mt-md-0"><label for="id">ID 123456</label></div>
                    </div>

                    
                    <!-- hidden input buat ngirim data warna -->
                    <div class="row">
                        <input type="hidden" class="form-control input_warna" id="warna" placeholder="warna">
                    </div>

                    <div class="row">
                        <div class="col-md-2 my-4 my-md-0">
                            <label for="logo">Logo</label>
                        </div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-2 rounded border col-4 mx-3" style="height: 150px; background-color: #ddd;"></div>
                                <div class="col-md-1 rounded border col-3" style="height: 75px; background-color: #ddd;"></div>
                                <div class="col-md-6 my-2 my-md-0">
                                    <div class="custom-file" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-5">
                                <label for="warna_booth" class="pl-3">Warna Booth</label>
                                <div class="row pl-0 pl-md-4" style="font-size: 16px;">
                                    <div class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton"></div>
                                    <div class="col-md-2 mx-4 mx-md-2  my-2 p-2 rounded text-center boothColorButton checked"></div>
    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/')?>img/booth_crop.png" class="img-fluid p-4 previewBooth" alt="">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="alamat">Alamat</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control pl-4" id="alamat" placeholder="Masukan Alamat" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="deskripsi">Deskripsi</label></div>
                        <div class="col-md-9">
                            <pre><textarea name="deskripsi" id="deskripsi" rows="5" style="width: 100%; border-radius: 15px;"></textarea></pre>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-2"><label for="url_video">URL Video</label></div>
                        <div class="col-md-9">
                            <input type="text" class="form-control pl-4" id="url_video" placeholder="Masukan URL Video" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="foto">Foto</label></div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-4">
                                    <div class="rounded border" style="height: 170px; background-color: #ddd;"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="rounded border my-2 my-md-0" style="height: 170px; background-color: #ddd;"></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-file" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Tambah Gbr (maks 3)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="fasilitas">Fasilitas</label></div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="rounded border mb-3" style="height: 170px; background-color: #ddd;"></div>
                                    <input type="text" class="form-control pl-4" id="url_video" placeholder="Masukan Fasilitas" style="border-radius: 20px;">
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="rounded border mb-3" style="height: 170px; background-color: #ddd;"></div>
                                    <input type="text" class="form-control pl-4" id="url_video" placeholder="Masukan Fasilitas" style="border-radius: 20px;">
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-file" style="font-size: 15px;">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Tambah Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-5 py-5">
                        <div class="col-md-9"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" name="buat">Edit</button>
                        </div>
                    </div>
                </form>

            </div>
        </section>

    </div>

    
    </div>
    
    <section id="footer">
        <div class="container-xl py-5 px-4">
            <div class="row">
                <div class="col-lg-6 margin">
                    <div class="h4">About Us</div>
                    <div class="h6">Halmahera Music School</div>
                    <div >A Music School located in Semarang City with Yamaha International Curriculum</div>
                    <div class="social-media margin">
                        <i class="fab fa-instagram fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-facebook-square fa-2x"></i>
                        <i class="fab fa-youtube fa-2x"></i>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-firefox fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="back mb-5 lead"><a href="#nav">Back to Top <i class="fas fa-arrow-to-top pl-2"></i></a></div>
                    <p>© 2020 Halmahera Music School Semarang. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        //boothColor
        const boothColorChoices = document.querySelectorAll('.boothColorButton');
        var interval = 360/boothColorChoices.length ;
        var hueShift = 0;

        const previewBooth = document.querySelector('.previewBooth');
        const inputWarna = document.querySelector('.input_warna');

        boothColorChoices.forEach(e => {
            //add filter to change color
            e.style.filter = `hue-rotate(${hueShift}deg)`;
            hueShift += interval;

            //radio
            e.onclick = i => {
                i.target.parentElement.querySelector('.checked').classList.remove('checked');
                i.target.classList.add('checked');
                previewBooth.style.filter = document.querySelector('.checked').style.filter;
                inputWarna.value = document.querySelector('.checked').style.filter;
            }
        }  
        );

        previewBooth.style.filter = document.querySelector('.checked').style.filter;
        


    </script>

</body>
</html>