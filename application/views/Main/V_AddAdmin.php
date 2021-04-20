                    <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Admin Registration</p>

                            <form style="font-size: 18px;" action="<?= base_url('SubmitAdmin')?>" method="POST">
                                <div class="row mt-5 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="id" class="d-none d-sm-block">Admin No.</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input readonly type="text" class="form-control pl-4" value="<?= $admin_id; ?>" id="id_Admin" name="txtIDAdmin" style="border-radius: 20px;"> 
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="nama">Username</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input required type="text" class="form-control pl-4" id="username_admin" name="txtUsernameAdmin" aria-describedby="emailHelp" value="<?= $username;?>" placeholder="Insert username" readonly style="border-radius: 20px;">
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="nama">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input required type="text" value="<?= $password;?>" class="form-control pl-4" id="password_Admin" name="txtPasswordAdmin" aria-describedby="emailHelp" readonly style="border-radius: 20px;">
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="nama">Admin Name</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input required type="text" class="form-control pl-4" id="nama_admin" name="txtNamaAdmin" aria-describedby="emailHelp" placeholder="Insert Admin's name" style="border-radius: 20px;">
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="email" class="pt-2">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input required type="email" class="form-control pl-4" id="email_admin" name="txtEmailAdmin" aria-describedby="emailHelp" placeholder="Insert email" style="border-radius: 20px;">
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="email">Phone Number</label>
                                        <sup>*start with country code</sup>
                                    </div>
                                    <div class="col-md-9">
                                        <input required type="number" min="0" oninput="this.value = Math.abs(this.value)" class="form-control pl-4" id="phone_number_Admin" name="txtPhoneAdmin" aria-describedby="emailHelp" style="border-radius: 20px;">
                                    </div>
                                </div>

                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                        <label for="email">Validation</label>
                                        <sup>*code+Tab/Space</sup>
                                    </div>
                                    <div class="col-md-9">
                                        <input title="give us prove that you are really an admin!" required type="text" onkeypress="cekEligible(this)" required class="form-control pl-4" id="eligible" aria-describedby="emailHelp" style="text-transform: uppercase;border-radius: 20px;">
                                    </div>
                                </div>


                                <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-2">
                                        <button disabled type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" id="btnSubmitAdmin"><i id="loading"></i> Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                      

                      <div class="row my-5 pr-3 pb-5 pr-sm-0 mx-md-5 mx-2">
                          <div class="col-md-11 table-responsive">
                              <h4 class="text-center text-md-left">All Admins</h4>
                            <table style="min-width:150%" class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Admin ID</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Res Password</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Logs Count</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($admin as $k) { ?>
                                        <tr>
                                            <td><?=$i;?></td>
                                            <td>ADM-<?=$k['admin_id']?></td>
                                            <td>USR-<?=$k['user_id']?></td>
                                            <td><?=$k['fullname']?></td>
                                            <td><?=$k['username']?></td>
                                            <td><?=$k['password']?></td>
                                            <td><?=$k['res_password']?></td>
                                            <td><?=$k['email']?> <br/><?=$k['phone_number']?></td>
                                            <td><?=$k['creation_date']?></td>
                                            <td>0</td>
                                            <td><?php if($k['active_flag'] == 'Y'){echo '<i style="color:green">Active</i>';}else{echo '<i style="color:red">Inactive</i>';}?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-outline-danger" style="width:100px;border-radius: 20px;margin-bottom:5px;"> Inactive</button><br/>
                                                <button type="button" class="btn btn-outline-warning" style="width:100px;border-radius: 20px;margin-bottom:5px;"> Edit</button>
                                                <button type="button" class="btn btn-outline-success" style="width:100px;border-radius: 20px;margin-bottom:5px;"> Logs</button>
                                            </td>
                                        </tr>                                            
                                    <?php $i++;} ?>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Admin ID</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Res Password</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Logs Count</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </tfoot>
                              </table>
                          </div>
                      </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    
    <script>
        $('#hastags').selectpicker();

        function cekEligible(th) {
            var parameter = $(th).val().toUpperCase();
            if (parameter == 'HMSSEMARANG' && parameter.length == 11)
            {
                console.log('matched')
                $(th).prop('disabled', true)
                $('#btnSubmitAdmin').prop('disabled', false)
                Swal.fire({
                  icon: 'success',
                  title: 'Hi Admin! I know you are not spying us ;-)',
                  showConfirmButton: true,
                })
            }else if (parameter !== 'HMSSEMARANG' && parameter.length !== 11){
                console.log('unmatched')
                $(th).prop('disabled', false)
            }
            console.log(parameter)
        }

        // filterdata table
        var table =$('#table').DataTable();

        $('#table tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input class="form-control" type="text" placeholder="Search ' + title + '" />');
        });

        table.columns().every(function() {
            var that = this;
            $('input', this.footer() ).on('keyup change', function() {
                if(that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        
        const kategori = document.querySelector('.kategori');
        const subKategori = document.querySelector('.subKategori');

        subKategori.querySelector(`.${kategori.querySelector('.selected').innerText}`).classList.remove('d-none');

        kategori.querySelectorAll('.selectCategory').forEach(i => {
            i.onclick = e => {
                kategori.querySelector('.selected').classList.remove('selected');
                e.target.classList.add('selected');

                subKategori.childNodes.forEach(a => {
                    if(a.nodeType == 1){
                        a.classList.add('d-none');
                    }
                    
                })
                subKategori.querySelector(`.${kategori.querySelector('.selected').innerText}`).classList.remove('d-none');
            }    
        })

        subKategori.querySelectorAll('.selectCategory').forEach(i => {
            i.onclick = e => {
                e.target.classList.toggle('selected');
            }
        })
    </script>
</body>
</html>