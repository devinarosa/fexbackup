<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Verification</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">
</head>

<body class="d-flex flex-column">
  <section id="nav">
    <nav class="navbar navbar-expand navbar-dark">
      <div class="container-xl">
        <a class="navbar-brand d-none d-sm-block" href="<?= base_url('Dashboard') ?>">Halmahera Music School</a>
        <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard') ?>">HMS</a>
        <ul class="navbar-nav ml-auto d-flex align-items-center">
          <li class="nav-item">
            <a href="<?= base_url('Logout') ?>" class="px-3 text-white pt-1">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>

  <div class="d-flex justify-content-center" id="wrapper" style="min-height: 90vh;">
    <div class="container-xl py-4">
      <section id="dashboard" class="flex-grow-1">
        <div class="container-xl my-5 m-md-3">
          <div class="row">
            <div class="h1 font-weight-bold px-2">Verifikasi Alamat Email</div>
          </div>
          <div id="flash"></div>
          <div class="column my-1">
            <span>Kami telah mengirimkan pesan berupa kode verifikasi ke alamat email anda, silahkan cek dan masukkan kode tersebut ke kolom di bawah ini</span>
            <form action="<?= base_url('VerifyEmail') ?>" method="POST" class="col-12 col-md-3 mt-3">
              <input type="hidden" name="token" value="<?= $token ?>">
              <input type="text" class="form-control pl-4" name="code" placeholder="Verification Code" style="border-radius: 20px;">
              <button type="submit" class="btn w-100 mt-2" style="border-radius: 10px; background-color: #3a2a67; color: white;">Verify</button>
            </form>
          </div>

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
          <div>A Music School located in Semarang City with Yamaha International Curriculum</div>
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
    var interval = 360 / boothColorChoices.length;
    var hueShift = 0;
    boothColorChoices.forEach(e => {
        //add filter to change color
        e.style.filter = `hue-rotate(${hueShift}deg)`;
        hueShift += interval;

        //radio
        e.onclick = i => {
          i.target.parentElement.querySelector('.checked').classList.remove('checked');
          i.target.classList.add('checked');
        }
      }

    )

    $(document).ready(function() {
      $('#flash').hide();
      <?php if ($this->session->flashdata('msg')) { ?>
        $('#flash').html(`
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Success!</strong> <?php echo $this->session->flashdata('msg'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`).show();
      <?php } else if ($this->session->flashdata('del')) { ?>
        $('#flash').html(`
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>Error!</strong> <?php echo $this->session->flashdata('del'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`).show();
      <?php } ?>
    });
  </script>

</body>

</html>