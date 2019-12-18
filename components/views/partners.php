<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 17.12.2019
 * Time: 10:17
 */

if(!empty($data)):
?>

<div class="wm-main-section wm-partners-slider-two-full">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="wm-simple-section-title wm-partners-title-three"> <h2>University Partners</h2> </div>
            <div class="wm-partners-slider-classic gallery">
               <?php foreach ($data as $item): ?>
               <div class="wm-partners-layer">
                   <a title="" data-rel="prettyPhoto[gallery1]" href="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>">
                     <img src="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>" alt="<?= $item['university'] ?>"> </a> </div>
               <?php endforeach; ?>
            </div>
         </div>

      </div>
   </div>
</div>
<?php endif; ?>