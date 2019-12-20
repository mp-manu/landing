<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:27
 */
$this->title = $news['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(!empty($news)): ?>
<div class="col-md-12">
    <div class="wm-blog-single">
        <figure class="wm-detail-thumb">
            <img src="<?= Yii::getAlias('@upload').'/news/'.$news['photo'] ?>" alt="">
        </figure>

        <ul class="wm-blog-post-option">
            <li>
                <time datetime="2008-02-14 20:00"><?= $news['publish_date'] ?></time>
            </li>

        </ul>
    </div>
    <div class="wm-detail-editore">
        <h2><?= $news['title'] ?></h2>
        <p><?= $news['description'] ?></p>
    </div>
</div>
<?php else: ?>
    <h2>Here is not found any news!</h2>
<?php endif; ?>