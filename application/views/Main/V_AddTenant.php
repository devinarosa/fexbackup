                    <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Tenant Registration</p>
                        </div>
                    </div>

                      <form style="font-size: 18px;" action="<?= base_url('SubmitTenant')?>" method="POST">
                          <div class="row my-4 mx-5">
                              <div class="col-md-2">
                                <label for="id" class="d-none d-sm-block">Tenant No.</label>
                              </div>
                              <div class="col-md-9">
                                <input readonly type="text" class="form-control" value="<?= $tenant_id; ?>" id="id_tenant" name="txtIDTenant" style="border-radius: 20px;"> 
                              </div>
                          </div>

                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                                <label for="nama">Username</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="text" class="form-control pl-4" id="username_tenant" name="txtUsernameTenant" aria-describedby="emailHelp" value="<?= $username;?>" placeholder="Insert username" readonly style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                                <label for="nama">Password</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="text" value="<?= $password;?>" class="form-control pl-4" id="password_Tenant" name="txtPasswordTenant" aria-describedby="emailHelp" readonly style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                                <label for="nama">Tenant Name</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="text" class="form-control pl-4" id="nama_Tenant" name="txtNamaTenant" aria-describedby="emailHelp" placeholder="Insert Tenant's name" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                                <label for="email" class="pt-2">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="email" class="form-control pl-4" id="email_Tenant" name="txtEmailTenant" aria-describedby="emailHelp" placeholder="Insert email" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                                <label for="email">Phone Number</label>
                                <sup>*start with country code</sup>
                            </div>
                            <div class="col-md-9">
                                <input required type="number" min="0" oninput="this.value = Math.abs(this.value)" class="form-control pl-4" id="phone_number_Tenant" name="txtPhoneTenant" aria-describedby="emailHelp" style="border-radius: 20px;">
                            </div>
                        </div>

                        <div class="row my-3 mx-5">
                            <div class="col-md-2">
                              <label for="id" class="pt-2">Category</label>
                            </div>
                            <div class="col-md-9">
                                <select required id="category" name="txtCategoryTenant" onchange="getTriggerSub(this)" style="border-radius: 20px;" class="form-control pl-4">
                                    <option value=""> Choose Category </option>
                                    <?php foreach ($category as $a) { ?>
                                        <option value="<?= $a['id']?>"> <?= $a['name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                              <label for="id" class="pt-2">Sub-kategori</label>
                            </div>
                            <div class="col-md-9">
                                <select required disabled name="txtSubTenant" style="border-radius: 20px;" id="subCategory" onchange="getOther(this)" class="form-control pl-4">
                                    <option value=""> Choose Category First! </option>
                                </select>
                            </div>
                        </div>

                        <div class="row my-4 mx-5 addother">
                            
                        </div>

                        <div class="row my-4 mx-5">
                            <div class="col-md-2">
                              <label for="id" class="pt-2">Hastags </label><br/>
                              <sup>*3(three) tags maximum</sup>
                            </div>
                            <div class="col-md-9">
                                <select required class="form-control selectpicker" style="border-radius: 20px;" id="hastags" name="slcHastags[]" multiple data-live-search="true">
                                  <?php foreach ($hastag as $c) { ?>
                                        <option value="<?= $c['tag']?>"> <?= $c['tag']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="row my-4 mx-5">
                            <div class="col-md-9"></div>
                            <div class="col-md-2">
                                <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" id="btnSubmitTenant"><i id="loading"></i> Create</button>
                            </div>
                        </div>
                      </form>

                      <div class="row my-5 pr-3 pr-sm-0 mx-5">
                          <div class="col-md-11 table-responsive">
                              <h4>All Tenants</h4>
                            <table style="min-width:150%" class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tenant ID</th>
                                    <th scope="col">User ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Res Password</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Tags</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Logs Count</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($tenant as $k) { ?>
                                        <tr>
                                            <td><?=$i;?></td>
                                            <td>TE-<?=$k['tenant_id']?></td>
                                            <td>USR-<?=$k['user_id']?></td>
                                            <td><?=$k['fullname']?></td>
                                            <td><?=$k['username']?></td>
                                            <td><?=$k['password']?></td>
                                            <td><?=$k['res_password']?></td>
                                            <td><?=$k['email']?> <br/><?=$k['phone_number']?></td>
                                            <td><?=$k['tags']?><br/>
                                                <b>Category</b> : 
                                                    <code><?= $k['kategori']?></code><br/>
                                                <b>Sub</b> : 
                                                    <code><?= $k['sub']?></code>
                                            </td>
                                            <td><?=$k['creation_date']?></td>
                                            <td>0</td>
                                            <td><?php if($k['valid_flag'] == 'Y'){echo '<i style="color:green">Active</i>';}else{echo '<i style="color:red">Inactive</i>';}?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-outline-danger" style="width:100px;border-radius: 20px;margin-bottom:5px;"> Inactive</button><br/>
                                                <button type="button" class="btn btn-outline-warning" style="width:100px;border-radius: 20px;margin-bottom:5px;"> Edit</button>
                                                <button type="button" class="btn btn-outline-success" style="width:100px;border-radius: 20px;margin-bottom:5px;"> Logs</button>
                                            </td>
                                        </tr>                                            
                                    <?php $i++;} ?>
                                </tbody>
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

        function getTriggerSub(th) {
            var category = $(th).val();
            var subs = $('#subCategory');

            $.ajax({
              type: "POST",
              dataType: "json",
              url: baseurl+"ajax/getTriggerSub",
              data:{
                category:category
              },
              success: function(response) {
                subs.prop('disabled', false)
                let dataItem = ''
                $.each(response, function (i, item) {
                    dataItem += `<option value="${item.id}"> ${item.name} </option>`
                })
                subs.html('<option value=""> Choose Sub Category </option>'+dataItem)
                getOther()
              }
            })
        }

        function getOther(th) {

            var subs = $(th).val();
            var cats = $('#category').val();

            if (subs == '14' && cats == '3'){
                Swal.fire({
                  icon: 'info',
                  title: 'Please add other category',
                  showConfirmButton: false,
                  timer: 1000
                })

                $('.addother').html(`
                            <div class="col-md-2">
                              <label for="id" class="pt-3">+ Add Other</label>
                            </div>
                            <div class="col-md-9">
                                <input required type="text" class="form-control pl-4" id="category_lain" name="txtOther" aria-describedby="emailHelp" placeholder="Insert matched subcategory" style="border-radius: 20px;"> 
                            </div>`)
            }else if (subs !== '14' || cats !== '3'){
                $('.addother').html('')
            }
        }

        $('#btnSubmitTenant').click(function() {
            $('#loading').addClass('fa fa-spinner-spin');
            localStorage.setItem('saved', '1');
        })


        $(document).ready(function() {
            $('#table').DataTable();
        } );

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