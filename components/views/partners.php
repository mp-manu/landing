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
    <div class="container-fluid">
        <div class="row">
            <div class="wm-courses wm-modren-courses">
                <ul>
                    <?php foreach($data as $item): ?>
                    <li class="col-md-3">
                        <figure>
                            <a href="#">
                                <img src="<?= Yii::getAlias('@upload').'/logo/'.$item['logo'] ?>" alt="" width="200">
                            </a>
<!--                            <h2 class="wm-course-captiontitle">--><?//= $item['country'] ?><!--</h2>-->
                            <figcaption>
                                <h3><a href="#"><?= $item['unversity'] ?></a></h3>
                                <p><?= $item['activity_type'] ?></p>
<!--                                <a href="#" class="wm-course-see-btn"></a>-->
                            </figcaption>
                        </figure>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>