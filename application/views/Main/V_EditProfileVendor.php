                <div  id="flash">
                  
                </div>
                <form method="POST" action="<?= base_url('EditProfileVendor')?>" enctype="multipart/form-data" style="font-size: 20px;">
                    <div class="row my-4">
                        <div class="col-md-2"><label for="nama">Nama</label></div>
                        <div class="col-md-7">
                            <input name="txtNama" type="text" value="<?= $org[0]['fullname']?>" class="form-control" id="nama" placeholder="Masukan Nama" style="border-radius: 20px;">
                        </div>
                        <div class="col-md-3 mt-2 mt-md-0"><label for="id">ID <?= $org[0]['username']?></label></div>
                            <input type="hidden" name="txtUserID" value="<?= $org[0]['user_id']?>">
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="deskripsi">Deskripsi</label></div>
                        <div class="col-md-9">
                            <pre><textarea name="txaDeskripsi" id="deskripsi" rows="5" style="width: 100%; border-radius: 15px;"><?=$org[0]['deskripsi']?></textarea></pre>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 my-4 my-md-0">
                            <label for="logo">Logo</label>
                        </div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <div class="col-4 col-md-2 rounded logoPreview">
                                    <img src="<?= base_url('assets'); ?>/img/roles/<?= $org[0]['logo']?>" class="preview" alt="">
                                </div>
                    
                                <div class="col-md-6 my-2 my-md-0">
                                    <div class="custom-file" style="font-size: 15px;">
                                        <input type="file" name="txfLogo" class="custom-file-input inputLogo" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-md-5">
                                <label for="warna_booth" class="pl-3">Warna Booth</label>
                                <div class="row pl-0 pl-md-4" style="font-size: 16px;">
                                        <?php if (isset($org[0]['color_id'])) { ?>
                                        <?php if ($org[0]['color_id'] == '0'){ ?>
                                            <div color="1" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color checked"></div>
                                            <?php for ($i=2; $i < 10; $i++) { ?>
                                            <div color="<?=$i?>" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <?php } ?>

                                        <?php }else if ($org[0]['color_id'] !== ''){?>

                                            <div color="1" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color checked"></div>
                                            <div color="2" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="3" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="4" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="5" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="6" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="7" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="8" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="9" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>

                                        <?php }}else{ ?>
                                            <div color="1" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color checked"></div>
                                            <div color="2" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="3" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="4" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="5" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="6" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="7" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="8" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                            <div color="9" class="col-md-2 mx-4 mx-md-2 my-2 p-2 rounded text-center boothColorButton color"></div>
                                        <?php } ?>
                                     
                                    <input type="hidden" name="txcColor" value="<?= $org[0]['color_id']?>" id="colorHdn">
                                </div>
                            </div>
                            <div class="col-md-6 boothPreview">
                                <img src="<?= base_url('assets'); ?>/img/booth.png" class="img-fluid p-4 preview" alt="">
                                <div class="logo"><img src="<?= base_url('assets'); ?>/img/roles/<?= $org[0]['logo']?>" alt="" srcset="" class="booth-logo"></div>
                                <div class="booth-name d-flex align-items-center font-weight-bold"><?= $org[0]['fullname']?></div>
                                <div class="gallery"> <img src="<?= base_url('assets'); ?>/upload/foto/<?php if (empty($foto)){ echo "tambahGambar.png";}else{ echo $foto[0]['filename'];} ?>" alt="" srcset="" class="booth-img"></div>
                                <div class="booth-desc"><?=$org[0]['deskripsi']?></div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="email">Email</label></div>
                        <div class="col-md-9">
                            <input type="text" name="txtEmail" value="<?= $org[0]['email']?>" class="form-control pl-4" id="email" placeholder="Masukan Email" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="no_telp">No Telepon</label></div>
                        <div class="col-md-9">
                            <input type="text" name="txtTelpon" value="<?= $org[0]['phone_number']?>" class="form-control pl-4" id="no_telp" placeholder="Masukan Nomor Telepon" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="alamat">Alamat</label></div>
                        <div class="col-md-9">
                            <input type="text" name="txtAlamat" value="<?= $org[0]['alamat']?>" class="form-control pl-4" id="alamat" placeholder="Masukan Alamat" style="border-radius: 20px;">
                        </div>
                    </div>

                        <div class="row my-4">
                            <div class="col-md-2">
                              <label for="id" class="pt-2">Category</label>
                            </div>
                            <div class="col-md-9">
                                <select required id="category" name="slcCat" onchange="getTriggerSub(this)" style="border-radius: 20px;" placeholder="Choose Category" class="form-control pl-4">
                                    <!-- <option value=""> Choose Category </option> -->
                                    <?php foreach ($category as $f) { if ($f['id'] == $org[0]['id_category']) {$selected = 'selected';}else{$selected = '';}?>
                                        <option value="<?= $f['id']?>" <?=$selected;?>> <?= $f['name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row my-4">
                            <div class="col-md-2">
                              <label for="id" class="pt-2">Sub-kategori</label>
                            </div>
                            <div class="col-md-9 subkategori">
                                <select class="form-control" style="border-radius: 20px;" required name="slcSubs[]" >
                                    <?php $g = explode(',', $org[0]['id_subcategory']); foreach ($g as $z) { ?>
                                       <?php foreach ($subs as $y){ if ($z == $y['id']){ ?>
                                        <option value="<?= $z?>"> <?=$y['name']?> </option>
                                       <? }?>
                                    <?php }} ?>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="row my-4 addother">
                            
                        </div> -->


                    <div class="row my-3">
                        <div class="col-md-2"><label for="url_video">URL Video</label></div>
                        <div class="col-md-9">
                            <input type="text" name="txtURL" value="<?= $org[0]['url']?>" class="form-control pl-4" id="url_video" placeholder="Masukan Embed URL Video" style="border-radius: 20px;">
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-2"><label for="fitur_tambahan">Fitur Tambahan</label></div>
                        <div class="col-md-9">
                            <pre><textarea name="txaFiturTambahan" id="fitur_tambahan" rows="5" style="width: 100%; border-radius: 15px;"><?= $org[0]['fitur']?></textarea></pre>
                        </div>
                    </div>

                    <div class="row my-4 foto">
                        <div class="col-md-2"><label for="foto">Foto</label></div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <?php if (!empty($foto)) { ?>

                                    <?php foreach ($foto as $d) { ?>
                                        <div class="col-md-4 mb-4 mb-sm-0">
                                            <div class="rounded border fotoPreview">
                                                <i class="far fa-times removeImage"></i>
                                                <img src="<?= base_url('assets'); ?>/upload/foto/<?= $d['filename']?>" alt="" class="preview">
                                            </div>
                                            <div class="custom-file mt-3" style="font-size: 15px;">
                                                <input name="txfFoto<?=$d['order_num']?>" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                            </div>
                                        </div>
                                    <?php } ?>

                                <?php }else if (empty($foto)){ ?>

                                    <?php for ($i=0; $i < 3; $i++) { ?>
                                        <div class="col-md-4 mb-4 mb-sm-0">
                                            <div class="rounded border fotoPreview">
                                                <i class="far fa-times removeImage"></i>
                                                <img src="<?= base_url('assets'); ?>/img/tambahGambar.png" alt="" class="preview">
                                            </div>
                                            <div class="custom-file mt-3" style="font-size: 15px;">
                                                <input multiple="multiple" name="txfFoto[]" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                            </div>
                                        </div>
                                    <?php } ?>

                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="row my-5 fasilitas">
                        <div class="col-md-2"><label for="fasilitas">Fasilitas</label></div>
                        <div class="col-md-9">
                            <div class="row d-flex align-items-end">
                                <?php if (!empty($fasilitas)) { ?>

                                    <?php foreach ($fasilitas as $c) { ?>
                                        <div class="col-md-4 mb-4">
                                            <div class="rounded border fotoPreview">
                                                <i class="far fa-times removeImage"></i>
                                                <img src="<?= base_url('assets/upload/fasilitas/'.$c['filename'])?>" class="preview">
                                            </div>
                                            <div class="custom-file mt-3" style="font-size: 15px;">
                                                <input type="file" class="custom-file-input inputImg" id="customFile" name="txfFasilitas<?=$c['order_num']?>" accept="image/*">
                                                <label class="custom-file-label">Upload/Edit</label>
                                            </div>
                                            <input type="text" class="form-control pl-3 mt-3" id="nama_fasilitas" name="txtKeteranganFasilitas<?= $c['order_num']?>" value="<?= $c['note']?>" placeholder="Nama Fasilitas" style="border-radius: 20px;">
                                        </div>
                                    <?php } ?>
                                        <div class="col-md-4 mb-4 p">
                                            <div class="rounded border plus">
                                                <i class="far fa-plus fa-4x"></i>
                                            </div>
                                            <div class="custom-file mt-3 hidden" style="font-size: 15px;">
                                                <input multiple="multiple" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                            </div>
                                            <input type="text" class="form-control pl-3 mt-3 hidden" id="nama_fasilitas" placeholder="Nama Fasilitas" style="border-radius: 20px;">
                                        </div>

                                <?php }else if (empty($fasilitas)){ ?>

                                        <div class="col-md-4 mb-4 p">
                                            <div class="rounded border plus">
                                                <i class="far fa-plus fa-4x"></i>
                                            </div>
                                            <div class="custom-file mt-3 hidden" style="font-size: 15px;">
                                                <input multiple="multiple" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                                <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                            </div>
                                            <input type="text" class="form-control pl-3 mt-3 hidden" id="nama_fasilitas" placeholder="Nama Fasilitas" style="border-radius: 20px;">
                                        </div>

                                <?php }?>

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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> -->
    <script src="<?= base_url('assets'); ?>/js/dashboardVendor2.js"></script>
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