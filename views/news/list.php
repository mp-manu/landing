<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:27
 */
$this->title = 'News';

$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(empty($news)): ?>
    <h2>Here not found any news!</h2>
<?php else: ?>

<div class="row">
    <div class="col-md-12">
        <div class="wm-news wm-news-medium">
            <ul class="row">
                <?php  foreach ($news as $items): ?>
                <li class="col-md-12">
                    <figure>
                        <a href="/news/read?id=<?= $items['id'] ?>"><img src="<?= Yii::getAlias('@upload').'/news/'.$items['photo'] ?>" alt="">
                            <span class="wm-transparent-hover"></span>
                        </a>
                    </figure>
                    <div class="wm-newsgrid-text">
                        <ul class="wm-post-options">
                            <li>Publish date: <?= $items['publish_date'] ?></li>
                        </ul>
                        <h5><a href="/news/read?id=<?= $items['id'] ?>" class="wm-color"><?= $items['title'] ?></p></a>
                        <a class="wm-banner-btn" href="/news/read?id=<?= $items['id'] ?>">More info</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="wm-pagination">
            <ul>
                <?php
                echo \yii\widgets\LinkPager::widget([
                    'pagination' => $pages,
                    'options' => [
                        'tag' => 'ul',
                        'class' => '',
                    ],
                    'linkOptions' => ['class' => 'page-numbers'],
                    'activePageCssClass' => 'active'
                ])
                ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>