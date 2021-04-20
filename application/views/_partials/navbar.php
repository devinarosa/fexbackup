<section id="nav">
    <nav class="navbar navbar-expand navbar-dark">
        <div class="container-xl">
            <a class="navbar-brand d-none d-sm-block" href="<?= base_url('Dashboard')?>">Halmahera Music School</a>
            <a class="navbar-brand d-block d-sm-none" href="<?= base_url('Dashboard')?>">HMS</a>
                <ul class="navbar-nav ml-auto d-flex align-items-center">

                <?php $profile=''; if($diri['access_id'] == '1'){

                    $profile = '<a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/roles/'.$org[0]['logo'].'" alt="user" style="border-radius:50%" width="50" height="50px"></a>';
                    $link = '<button class="dropdown-item" type="button"><a href="DashboardAdmin" class="text-decoration-none text-dark">Dashboard Admin</a></button>';

                }elseif ($diri['access_id'] == '2') {

                    $profile = '<a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/roles/'.$org[0]['logo'].'" alt="user" style="border-radius:50%" width="50" height="50px"></a>';
                    $link = '<button class="dropdown-item" type="button"><a href="DashboardVendor" class="text-decoration-none text-dark">Dashboard Vendor</a></button>';

                }elseif ($diri['access_id'] == '3') {

                    $profile = '<a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/roles/'.$org[0]['logo'].'" alt="user" style="border-radius:50%" width="50" height="50px"></a>';
                    $link = '<button class="dropdown-item" type="button"><a href="DashboardTenant" class="text-decoration-none text-dark">Dashboard Tenant</a></button>';

                }elseif ($diri['access_id'] == '4') {

                    $profile = '<a class="dropdown-toggle text-muted px-3 waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/roles/'.$org[0]['logo'].'" alt="user" style="border-radius:50%" width="50" height="50px"></a>';
                    $link = '
                    <button class="dropdown-item" type="button"><a href="Explore" class="text-decoration-none text-dark">Explore</a></button>
                    <button class="dropdown-item" type="button"><a href="Livestream" class="text-decoration-none text-dark">Livestream</a></button>
                    <button class="dropdown-item" type="button"><a href="PostMessage" class="text-decoration-none text-dark">Post Message</a></button>
                    <button class="dropdown-item" type="button"><a href="EditProfile" class="text-decoration-none text-dark">Edit Profile</a></button>
                    ';

                } ?>

                <li class="nav-item dropdown">
                        <a class="text-white waves-effect waves-dark text-decoration-none" href="" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('fullname'); ?></a>
                        <?= $profile;?>
                        <div class="dropdown-menu" aria-labelledby="userMenu" style="transform: translate(20%, 5%)">
                            <?= $link;?>
                            <button class="dropdown-item" type="button"><a href="<?= base_url('Logout')?>" class="text-decoration-none text-dark">Logout</a></button>
                        </div>
                    </li>
                    </a>
                </ul>
        </div>
    </nav>
</section>