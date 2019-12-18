<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 17.12.2019
 * Time: 10:17
 */
if(!empty($data)):
?>
<div class="wm-main-section wm-popular-courses-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-fancytitle-two"><h2>RECENT POSTS</h2></div>
                <div class="wm-courses wm-coursespopular-list">
                    <ul class="row">
                        <?php foreach ($data as $item): ?>
                        <li class="col-md-3">
                            <figure><a href="#"><img src="<?= Yii::getAlias('@uploads').'/posts/'.$item['photo'] ?>" alt="<?= $item['title'] ?>"></a>
                                <figcaption><a href="#"><span>See course</span></a></figcaption>
                            </figure>
                            <div class="coursespopular-list-text">
                                <div class="list-courses-thumb">
<!--                                    <img src="extra-images/popular-courses-thumb-1.jpg" alt="">-->
                                    <a href="#" class="wm-color-two">
                                    <a href="#" class="wm-color-two">
                                    </a>
                                </div>
                                <h6><a href="#"><?= $item['title'] ?></a></h6>
                            </div>
                            <div class="wm-list-options wm-bgcolor-two">
                                <a href="#"><i class="wmicon-social7"></i> 342</a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>