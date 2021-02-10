<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Login</title>
  </head>
  <body>

    <section id="nav">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container-xl">
                <a class="navbar-brand d-none d-sm-block" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
                <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
            </div>
        </nav>
    </section>


    <section id="hero">
        <div class="container-xl my-5">
            <div class="row">
                <div class="col-md-6 d-none d-md-flex flex-column align-items-center p-5">
                    <img src="<?= base_url('assets')?>/img/fexText.png" alt="" class="img-fluid px-5 pt-5">
                    <img src="<?= base_url('assets')?>/img/fex.gif" alt="" class="img-fluid p-5">
                </div>
                <div class="col-md-6 mt-sm-5 d-flex flex-column align-items-center justify-content-center">
                    <h2 class="my-5 py-sm-3 text-center font-weight-bold">Log In</h2>
                    <img src="<?= base_url('assets')?>/img/fex.png" alt="" class="img-fluid p-5 mb-5 d-md-none">
                    <form action="<?= base_url('Dashboard')?>" class="py-5 w-75" method="post">
                        <div class="form-group d-flex justify-content-center">
                            <input style="width:100%; max-width: 400px; border-radius: 20px; padding-left: 20px;" type="text" class="form-control" name="email_username" id="email_username" placeholder="Username / Email">
                        </div>      
                        <div class="form-group d-flex justify-content-center pb-sm-4">
                            <input style="width:100%; max-width: 400px; border-radius: 20px; padding-left: 20px; margin-left: -10px;" type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <i class="far fa-eye" style="margin-left: -30px; margin-top: 10px; cursor: pointer;" id="togglePassword"></i>
                        </div>                
                            <div class="input-group-append d-flex justify-content-center mt-5 pt-sm-5">
                                <button style="width: 150px; border-radius: 10px; border: none; background-color: #3a2a67;" class="btn btn-outline-dark text-white" type="submit" name="submit" id="button-addon2">Log In</button>
                            </div>
                            <p class="justify-content-center mt-4 d-none d-sm-flex">Doesn’t have an account? Sign Up <a href="<?= base_url('Register')?>" class="pl-1 text-decoration-none">here</a></p>                    
                            <p class="justify-content-center mt-4 d-flex d-sm-none">Doesn’t have an account? <a href="<?= base_url('Register')?>" class="pl-1 text-decoration-none">here</a></p>                    
                            <p class="d-flex justify-content-center mb-5">Forget Password ? <a href="<?= base_url('ResetPassword')?>" class="pl-1 text-decoration-none">here</a></p>                    
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </section>

    <section id="footer">
        <div class="container-xl py-5 px-4">
            <div class="row">
                <div class="col-lg-6 margin">
                    <div class="h4">About Us</div>
                    <div class="h6">Halmahera Music School</div>
                    <div >A Music School located in Semarang City with Yamaha International Curriculum</div>
                    <div class="social-media margin">
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="https://hmssemarang.com" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        var base_url = '<?= base_url('')?>'
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });

        // button redirect
        document.querySelector('button').onclick = e => {
            e.preventDefault();
            window.location.replace(base_url+'Dashboard')
        }
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets')?>/js/login.js"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>