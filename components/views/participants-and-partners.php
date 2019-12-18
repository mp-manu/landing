<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 19:18
 */
if(!empty($data)):

?>
<aside class="widget widget_gallery col-md-4">
    <div class="wm-footer-widget-title"> <h5>Our Participants and Partners</h5> </div>
    <ul class="gallery">
        <?php foreach ($data as $item): ?>
        <li><a title="" data-rel="prettyPhoto[gallery1]" href="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>">
                <img src="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>" alt="">
            </a>
        </li>
        <?php  endforeach;  ?>
    </ul>
</aside>
<?php endif; ?>

