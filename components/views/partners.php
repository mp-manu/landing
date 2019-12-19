<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 19:18
 */
if(!empty($data)):
?>
 <div class="wm-main-section">
     <div class="container">
         <div class="row">

             <div class="col-md-12">
                 <div class="wm-simple-section-title wm-partners-title-two"><h2>Participants and Partners</h2> </div>
                 <div class="wm-partners-slider-two gallery">
                     <?php foreach ($data as $item): ?>
                     <div class="wm-partners-layer" style="width: 150px"><a title="" data-rel="prettyPhoto[gallery1]" href="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>">
                             <img src="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>" alt="<?= $item['university'] ?>" title="<?= $item['type'] ?>"> </a> </div>
                     <?php endforeach; ?>
                </div>
             </div>

         </div>
     </div>
 </div>
<?php endif; ?>