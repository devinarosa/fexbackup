                        <div class="row">
                        <div class="col-md-11 my-3 ml-md-4">
                            <p class="h3">Menu Management</p>
                            <div id="flash"></div>
                            <form style="font-size: 18px;" action="<?= base_url('submitMenuManagement')?>" enctype="multipart/form-data" method="POST">
                                <div class="row mt-5 mx-md-5 mx-2">
                                    <div class="col-md-2">
                                      <label for="id">Category</label>
                                    </div>
                                    <div class="col-md-9">
                                      <input required placeholder="Insert new category" type="text" class="form-control pl-4" id="new_cat" name="txtCat" style="border-radius: 20px;"> 
                                    </div>
                                </div>

                              <div class="row my-4 mx-md-5 mx-2">
                                  <div class="col-md-2">
                                      <label for="nama">Sub Category</label>
                                  </div>
                                  <div class="col-md-9 row">
                                    <div class="col-10">
                                      <input required type="text" class="form-control pl-4" id="sub_cat" name="txtSubCat[]" aria-describedby="emailHelp" placeholder="Insert new sub category" style="border-radius: 20px;">
                                    </div>
                                    <div class="col-1">
                                      <button type="button" onclick="AddSub(this)" style="border-radius:20%" class="btn btn-secondary btn-xs"><i class="fa fa-plus"></i></button>
                                    </div>
                                  </div>
                              </div>
                              <div class="append">
                              </div>
                              <div class="row my-4 mx-md-5 mx-2">
                                  <div class="col-md-2">
                                      <label for="nama">Icon</label>
                                  </div>
                                  <div class="col-md-4 mb-4 mb-sm-0">
                                      <div class="fotoPreview">
                                          <!-- <i class="far fa-times removeImage"></i> -->
                                          <img src="<?= base_url('assets'); ?>/img/tambahGambar.png" alt="" class="preview w-100">
                                      </div>
                                      <div class="custom-file mt-3" style="font-size: 15px;">
                                          <input required name="txfIcon" type="file" class="custom-file-input inputImg" id="customFile" accept="image/*">
                                          <label class="custom-file-label" for="customFile">Upload/Edit</label>
                                      </div>
                                  </div>
                              </div>

                              <div class="row my-4 mx-md-5 mx-2">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn w-100" style="border-radius: 10px; background-color: #3a2a67; color: white;" id=""><i id="loading"></i> Create</button>
                                    </div>
                                </div>

                          </form>    
                        </div>
                    </div> 

                    <div class="row my-5 pb-5 pr-3 pr-sm-0 mx-md-5 mx-2">
                          <div class="col-md-11 table-responsive">
                              <h5 class="text-center text-md-left">Category List</h5>
                            <table class="table table-hover table-bordered" id="table">
                                <thead style="background-color: #3a2a67; color: white;">
                                  <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Kategori</th>
                                    <th class="text-center" scope="col">Sub - Kategori <small>*click to modify</small></th>
                                    <th class="text-center" scope="col">Icon</th>
                                    <th class="text-center" scope="col" class="text-center">Action</th>
                                  </tr>
                                </thead>
                                <tbody id="kat">
                                    <?php $no=1; foreach ($list as $k) { ?>
                                       <tr id="category<?=$k['id']?>">
                                        <th class="text-center" scope="row"><?=$no;?></th>
                                        <td><span id="namaSub<?= $k['id']?>"><?=$k['name']?></span></td>
                                        <td>
                                          <?php $arr = explode(',', $k['sub']);
                                                $arr_num = explode(',', $k['id_sub']);
                                                foreach ($arr as $b => $value) { ?>
                                                <p id="<?= $arr_num[$b]?>" class="btn bg-purple deleteSub text-white"><?= $value?></p>
                                          <?php }?>
                                        </td>
                                        <td class="text-center"><a onclick="trial(<?=$k['id']?>)"><img src="<?= base_url('assets/'); ?>img/<?= $k['icon']?>" width="75px" alt="" style="filter : invert(1)"></a></td>
                                        <td class="text-center">
                                            <a onclick="editCategory(<?= $k['id']?>)" cat="<?= $k['name']?>" class="fas fa-fw fa-edit"></a>
                                            <a onclick="deleteCategory(<?= $k['id']?>)" cat="<?= $k['name']?>" class="fas fa-fw fa-trash"></a>
                                        </td>
                                      </tr>
                                    <?php $no++;} ?>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th class="text-center" scope="col">No</th>
                                    <th class="text-center" scope="col">Kategori</th>
                                    <th class="text-center" scope="col">Sub - Kategori <small>*click to modify</small></th>
                                    <th class="text-center" scope="col">Icon</th>
                                    <th class="text-center" scope="col" class="text-center">Action</th>
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
    <input type="file" style="display: none" class="swal2-file">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        // filterdata table
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
            <?php }else if ($this->session->flashdata('err')){ ?>
              $('#flash').html(`
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>Error!</strong> <?php echo $this->session->flashdata('err'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`).show();
            <?php } ?>
        });

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

        function trial(th) {

          Swal.fire({
            title: 'Update Icon ID.'+th,
            html:
              '<form method="POST" action="<?= base_url('editImgIcon')?>" enctype="multipart/form-data">' +
              '<center><input type="file" name="cek"><input type="hidden" name="id" value="'+th+'"><br/>' +
              '<button style="margin-top:20px;" class="btn btn-success" type="submit"> Submit </button></center></form>',
            showCloseButton: false,
            showCancelButton: false,
            showConfirmButton: false
          })

        // const { value: file } = await Swal.fire({
        //     title: 'Select image',
        //     input: 'file',
        //     inputAttributes: {
        //       'accept': 'image/*',
        //       'aria-label': 'Upload your profile picture'
        //     }
        //   })

        //   if (file) {
        //     const reader = new FileReader()
        //     reader.onload = (e) => {
        //       Swal.fire({
        //         title: 'Your uploaded picture',
        //         imageUrl: e.target.result,
        //         imageAlt: 'The uploaded picture'
        //       })
        //     }
        //     reader.readAsDataURL(file)
        //   }


          // const { value: file } = Swal.fire({
          //   title: 'Select image',
          //   input: 'file',
          //   inputAttributes: {
          //     'accept': 'image/*',
          //     'aria-label': 'Upload your profile picture'
          //   }
          // }).then((file) => {
          //       if (file.value) {
          //         console.log(file.value)
          //           var aa = file.value
          //           var formData = new FormData();
          //           var file2 = aa.files[0];
          //           formData.append("fileToUpload", file2);
          //           $.ajax({
          //               method: 'post',
          //               url: 'hmm',
          //               data: formData,
          //               processData: false,
          //               contentType: false,
          //               success: function (resp) {
          //                   Swal('Uploaded', 'Your file have been uploaded', 'success');
          //               },
          //               error: function() {
          //                   Swal({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
          //               }
          //           })
          //       }
          //     })
        }

        $('.deleteSub').click(function () {
          var id = $(this).attr('id');

          Swal.fire({
            title: 'Do you want to modify?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Edit`,
            denyButtonText: `Delete`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {

              Swal.fire({
                title: 'Input new change',
                input: 'text',
                inputAttributes: {
                  autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Edit',
                showLoaderOnConfirm: true,
                preConfirm: (login) => {
                    $.ajax({
                      type: "POST",
                      url: baseurl+"ajax/editSubCategory",
                      data:{
                        id:id,
                        login:login
                      },
                      success: function(response) {
                        $('#'+id).html(login)
                        Swal.fire(
                          'Edited!',
                          'Subcategory has been edited into '+login,
                          'success'
                        )
                      }
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
              })

            } else if (result.isDenied) {

              Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {

                $.ajax({
                  type: "POST",
                  url: baseurl+"ajax/deleteSubCategory",
                  data:{
                    id:id
                  },
                  success: function(response) {
                    $('#'+id).hide()
                    Swal.fire(
                      'Deleted!',
                      'Subcategory has been deleted',
                      'success'
                    )
                  }
                })
              }
            })
            }
          })
          
        })

        function editCategory(th) {
          var id  = th

          Swal.fire({
            title: 'Input new change',
            input: 'text',
            inputAttributes: {
              autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Edit',
            showLoaderOnConfirm: true,
            preConfirm: (login) => {
                $.ajax({
                  type: "POST",
                  url: baseurl+"ajax/editCategory",
                  data:{
                    id:id,
                    login:login
                  },
                  success: function(response) {
                    $('#namaSub'+id).html(login)
                    Swal.fire(
                      'Edited!',
                      'Category has been edited into '+login,
                      'success'
                    )
                  }
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
          })
        }

        function deleteCategory(th) {
          
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              var id  = th
              $.ajax({
                type: "POST",
                url: baseurl+"ajax/deleteCategory",
                data:{
                  id:id
                },
                success: function(response) {
                  $('#kat tr#category'+id).hide()
                  Swal.fire(
                    'Deleted!',
                    'Category has been deleted',
                    'success'
                  )
                }
              })
            }
          })
        }


        var num = 1;
        function AddSub(th) {
          var html = `<div class="row my-4 mx-md-5 mx-2 del${num}">
                        <div class="col-md-2 d-none d-sm-block">
                            <label for="nama"></label>
                        </div>
                        <div class="col-md-9 row">
                          <div class="col-10">
                            <input required type="text" class="form-control pl-4" id="sub_cat" name="txtSubCat[]" aria-describedby="emailHelp" placeholder="Insert new sub category" style="border-radius: 20px;">
                          </div>
                          <div class="col-1">
                            <button type="button" style="border-radius:20%" onclick="onClickBakso1(${num})" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                          </div>
                        </div>
                    </div>`;
          num++;
          $('.append').append(html);
        }



        const onClickBakso1 = (th) => { 
          $('.del'+th).remove()
            num -=1
        }

    //inamge handler
    const previewIcon = document.querySelector('.preview');
    const inputIcon = document.querySelector('.inputImg');
    var newImage;

    inputIcon.onchange = e => {
        let previewTarget = e.target.parentElement.parentElement.querySelector('.preview');
        newImage = URL.createObjectURL(e.target.files[0]);
        previewTarget.src = newImage;
        previewTarget.onload = () => {
            URL.revokeObjectURL(newImage);
        }
    }

  </script>
</body>
</html>