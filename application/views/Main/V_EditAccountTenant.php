                <div id="flash">
                  
                </div>
                <form method="POST" action="<?= base_url('EditAccountTenant')?>" enctype="multipart/form-data" style="font-size: 20px;">
                    <div class="row my-4">
                        <div class="col-md-2"><label for="nama">Nama</label></div>
                        <div class="col-md-7">
                            <input disabled name="txtNama" type="text" value="<?= $org[0]['fullname']?>" class="pl-4 form-control" id="nama" placeholder="Masukan Nama" style="border-radius: 20px;">
                        </div>
                        <div class="col-md-3 mt-2 mt-md-0"><label for="id">ID <?= $org[0]['username']?></label></div>
                        <input type="hidden" name="txtUserID" value="<?= $org[0]['user_id']?>">
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="deskripsi">Username</label></div>
                        <div class="col-md-9">
                            <input disabled name="txtUsername" type="text" value="<?= $org[0]['username']?>" class="pl-4 form-control" id="nama" placeholder="Masukan Username" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="deskripsi">Password</label></div>
                        <div class="col-md-9">
                            <input name="txpPassword" type="text" value="<?= $org[0]['password']?>" class="pl-4 form-control" id="nama" placeholder="Masukan Password Baru" style="border-radius: 20px;">
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="<?= base_url('assets'); ?>/js/dashboardTenant.js"></script>
    
    <script type="text/javascript" src="<?=base_url('assets/multiselect/dist/')?>js/bootstrap-multiselect.js"></script>

    <script type="text/javascript">
        $(function(){
          $('#demo').multiselect();
        });

        $(document).ready(function() {
        $('#flash').hide();
        <?php if($this->session->flashdata('msg')){ ?>
        $('#flash').html(`
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Success!</strong> <?php echo $this->session->flashdata('msg'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`).show();
        <?php } ?>
        });


        $('.color').click(function () {
            var res = $(this).attr('color')
            // console.log(res)
           $('#colorHdn').val(res).trigger('change')
        })

        function getTriggerSub(th) {
            var category = $(th).val();

            $.ajax({
              type: "POST",
              dataType: "json",
              url: baseurl+"ajax/getTriggerSub",
              data:{
                category:category
              },
              success: function(response) {
                
                let dataItem = ''
                $.each(response, function (i, item) {
                    dataItem += `<option value="${item.id}">${item.name}</option>`
                })

                $('.subkategori').html(`
                                <select class="form-control" multiple="multiple" style="border-radius: 20px;" required name="slcSubs[]" id="demo">
                                    <option value=""> Choose Category First </option>
                                    ${dataItem}
                                </select>`);
                // $('#demo').multiselect();
              }
            })
        }

        // $('#subCategory').selectpicker();
        $(function(){
          $('#demo').multiselect();
        });


    </script>

</body>
</html>