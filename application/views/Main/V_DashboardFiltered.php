        <?php foreach ($subs as $k) {?>
        <div class="subCategory p-3 pt-4 px-md-5 pb-md-3">
            <div class="d-flex justify-content-between mb-3">
                <div class="title h3 font-weight-bold"><?= $k['name']?></div>
                <div class="controls d-flex align-items-center">
                    <div class="arrow d-none d-md-block mr-5">
                        <i class="fas fa-caret-left fa-3x mr-4"></i>
                        <i class="fas fa-caret-right fa-3x"></i>
                    </div>
                    <div class="more h5"><a href="<?= base_url('Explore'); ?>">more...</a></div>
                </div>
            </div>
            <div class="horizontalScroll">

                <?php foreach( $tenant as $b ) { $arr1 = explode(',', $b['id_subcategory']); if ( in_array($k['id'], $arr1) ) { ?>
                    
                    <div foto="<?= $b['filename']; ?>" linkToProfile="<?= base_url('Profile/3/'.$b['user_id'])?>" user_id="<?=$b['user_id']?>" logo="<?= $b['logo']?>" color_booth="<?php $ye = str_replace('filter: ', '', $b['css']); echo $ye; ?>" deskripsi="<?php $ex = explode(' ', $b['deskripsi']);$arr=array();for($i = 0; $i < 10; $i++){$arr[] = $ex[$i];} $imp = implode(' ', $arr); echo $imp; ?>" class="item d-flex justify-content-between flex-column align-items-center">
                        <img src="<?= base_url('assets'); ?>/img/booth.png" alt="<?= $b['fullname']?>" class="schoolCarouselIcon">
                        <div class="boothSmallName"><?= $b['fullname'] ?></div>
                    </div>
                
                <?php }else{}} ?>

                <?php foreach( $vendor as $a ) { $arr2 = explode(',', $a['id_subcategory']); if ( in_array($k['id'], $arr2) ) { ?>

                    <div foto="<?= $a['filename']; ?>" linkToProfile="<?= base_url('Profile/2/'.$a['user_id'])?>" user_id="<?=$a['user_id']?>" logo="<?= $a['logo']?>" color_booth="<?= str_replace('filter: ', '', $a['css']) ?>" deskripsi="<?php $ex = explode(' ', $b['deskripsi']);$arr=array();for($i = 0; $i < 10; $i++){$arr[] = $ex[$i];} $imp = implode(' ', $arr); echo $imp; ?>" class="item d-flex justify-content-between flex-column align-items-center">
                        <img src="<?= base_url('assets'); ?>/img/booth.png" alt="<?= $a['fullname']?>" class="schoolCarouselIcon">
                        <div class="boothSmallName"><?= $a['fullname'] ?></div>
                    </div>
                
                <?php }else{}} ?>
            </div>
        </div> 
        <?php } ?>
