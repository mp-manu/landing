<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 15.12.2019
 * Time: 12:01
 */

?>
<?php foreach ($data as $item): ?>
<div class="wm-banner-two-layer">
    <span class="wm-bannertwo-transparent"></span>
    <img src="<?= \Yii::getAlias('@upload').'/slider/'.$item['img_url'] ?>" alt="">
    <div class="wm-caption-two">
        <div class="container">
            <div class="wm-caption-two-inner">
                <h1><?= $item['title'] ?></h1>
                <p><?= $item['description'] ?></p>
                <div class="clearfix"></div>
                <?php if($item['is_has_btn'] == 1): ?>
                    <a href="<?= $item['btn_link'] ?>"><span><?= $item['btn_title'] ?></span></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>