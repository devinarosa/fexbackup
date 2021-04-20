<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?= base_url('assets/img/icon.png')?>">

    <script type="text/javascript">
        var baseurl = "<?= base_url('')?>"
    </script>
    <script type="text/javascript" src="<?= base_url('assets')?>/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/bootstrap-multiselect.css">
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/style.css">
    
</head>
<body class="d-flex flex-column">

    <?php $this->load->view('_partials/navbar.php'); ?>

    <section id="postMessage" class="flex-grow-1">
    <form method="POST" action="<?= base_url('doPost')?>" enctype="multipart/form-data">

        <div class="container-xl my-5 px-4 px-md-5">
            <div class="row my-5">
                <div class="col d-flex flex-column">
                    <div class="h1 font-weight-bold">Post A Message</div>
                    <p class="lead">We will forward your message to all of the schools and vendors in this event. And soon you’ll be contacted by one of them.</p>
                </div>
                <div class="col d-none d-md-block"></div>
            </div>
            <div  id="flash">
                  
            </div>
            <div class="row border rounded">
                <div class="container-xl">
                    <div class="row">
                        <div class="col-sm-1 my-3 ml-2 ml-sm-0 d-sm-flex justify-content-center">
                            <i class="far fa-user fa-3x"></i>
                        </div>
                        <div class="col-sm-11 mt-3">
                            <div class="form-group">
                                <textarea name="txaPost" class="form-control border-0 post-text-area" id="exampleFormControlTextarea1" rows="3" placeholder="Make your wish comes true! ..."></textarea>
                                <input type="hidden" class="khususEditFlag" name="txtEditFlag" value="N">
                                <input type="hidden" class="khususIDPost" name="txtIDPost">
                            </div>
                        </div>
                    </div>
                    <div class="row my-4 d-flex align-items-center">
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="custom-file">
                                            <input name="txfPost" type="file" class="custom-file-input" id="inputGroupFile02">
                                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose Image ... </label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group-append my-3 my-md-0">
                                                    <select name="slcCategory" onchange="getTriggerSub(this)" class="custom-select" id="inputGroupSelect01">
                                                        <option value=""> Category </option>
                                                        <?php foreach ($category as $k) { ?>
                                                            <option value="<?= $k['id'] ?>"><?= $k['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group-append subkategori">
                                                    <select class="form-control" required name="slcSubCategory[]" >
                                                        <option value=""> Choose Category First </option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="col-sm-5 d-flex justify-content-end mt-4 mt-sm-0">
                            <button type="submit" class="btn mr-3 d-flex align-items-center">
                                <i class="fa fa-paper-plane fa-2x mr-3"></i>
                                <span class="post-btn">Send</span>
                                </button>
                        </div>
                    </div>
                </div>           
            </div>
        </div>
    </form>
    </section>

    <section id="yourPost">
        <div class="container-xl my-5 px-4 px-md-5">
            <div class="row my-5 px-3"><div class="h1 font-weight-bold">Your Post</div></div>

            <?php foreach ($post as $h){ ?>
                <div class="row mb-5 post<?=$h['id_msg']?>">
                <div class="col-sm-2 mb-4">
                    <i class="far fa-user fa-3x"></i>
                </div>
                <div class="col-sm-10 border rounded">
                    <div class="container-xl px-4 py-4">
                        <div class="row">
                            <div class="col-10 mr-3">
                            <div class="h3">Category : <?php foreach ($category as $g) { if ($g['id'] == $h['id_category']){echo $g['name'];}else{}} ?>
                            </div>
                            <div class="h5">Sub Category : <?php $arr = explode(',', $h['id_subcategory']); foreach ($subs as $j) { if (in_array($j['id'], $arr)){echo $j['name']; echo ' ';}else{}} ?>
                            </div>
                            <div class="small"><?= $h['creation_date']?> - <?= $h['fullname']; ?></div>
                            <p class="mt-3 post-text"><?= $h['msg']?></p>
                            </div>
                            <div class="col-1 d-flex justify-content-end">
                                <div class="dropleft">
                                    <i class="fas fa-ellipsis-v btn" id="edit" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                    <div class="dropdown-menu" aria-labelledby="edit">
                                        <button id-post="<?= $h['id_msg']?>" class="dropdown-item edit-post" type="button">Edit Post</button>
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter<?=$h['id_msg']?>">Delete Post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col"><img src="<?= base_url('assets/upload/post/'.$h['filename']); ?>" alt="" class="img-fluid"></div>
                        </div>
                        <div class="row">
                            <div class="col-12 mall">Email <?= $h['email']; ?> - Phone Number <?= $h['phone_number']; ?></div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="exampleModalCenter<?=$h['id_msg']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                                <div class="modal-title text-center f-15 bold" id="exampleModalLongTitle">Hapus Post?</div>
                            </div>
                            <div class="modal-footer p-0 d-flex justify-content-around">
                                <button type="button" class="btn" data-dismiss="modal">Kembali</button>
                                <button type="button" class="btn" onclick="deletePost(<?=$h['id_msg']?>)">Ya</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        
    </section>

    <?php $this->load->view('_partials/footer.php') ?>

    <script src="<?= base_url('assets')?>/js/postMessage.js"></script>

    <script type="text/javascript">

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
        <?php } else if($this->session->flashdata('del')){ ?>
        $('#flash').html(`
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>Success!</strong> <?php echo $this->session->flashdata('del'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`).show();
        <?php } ?>
        });

        function deletePost(th) {
            var id_msg = th
            $.ajax({
              type: "POST",
              url: baseurl+"ajax/softDeletePost",
              data:{
                id_msg:id_msg
              },
              success: function(response) {
                $('#exampleModalCenter'+th).modal('hide')
                $('.post'+th).remove();
                window.location.reload();
              }
          })
        }

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
                                <select class="form-control" multiple="multiple" required name="slcSubs[]" id="demo">
                                    <option value=""> Choose Category First </option>
                                    ${dataItem}
                                </select>`);
                // $('#demo').multiselect();
              }
            })
        }
    </script>
</body>
</html>