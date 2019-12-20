<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 22:01
 */

if(!empty($data)):
?>
<div class="widget widget_latestnews">
    <div class="wm-widget-title">
        <h2>Latest News</h2>
    </div>
    <ul>
        <?php foreach($data as $item): ?>
        <li>
            <?php if(!empty($item['photo'])): ?>
            <figure>
                <a href="/news/read?id=<?= $item['id'] ?>"><img src="<?= Yii::getAlias('@upload').'/news/'.$item['photo'] ?>" alt=""></a>
            </figure>
            <?php endif; ?>
            <div class="wm-latestnews">
                <h5><a href="/news/read?id=<?= $item['id'] ?>"><?= $item['title'] ?></a></h5>
                <?= substr($item['description'], 0, 30) ?>
                <time datetime="2008-02-14 20:00"><?= $item['publish_date'] ?></time>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>