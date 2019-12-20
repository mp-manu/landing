<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:27
 */
$this->title = 'Events';

$this->params['breadcrumbs'][] = $this->title;
if (!empty($events)): ?>

    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="wm-event wm-latest-event wm-filter-event">
                    <ul class="row">
                        <?php foreach ($events as $event): ?>
                        <li class="col-md-3 php">
                            <figure><a href="/events/read?id=<?= $event['id']?>" target="_blank">
                                    <img src="<?= Yii::getAlias('@upload') . '/events/' . $event['photo'] ?>" alt="">
                                    <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                            <div class="wm-latest-event-text">
                                <h6><a href="/events/read?id=<?= $event['id']?>" target="_blank" class="wm-color"><?= $event['title'] ?></a></h6>
                                <p>From: <?= $event['date_from'] ?> <br>To: <?= $event['date_to'] ?> </p>
                                <p><?= substr($event['description'], 0, 50) ?></p>
                                <a href="/events/read?id=<?= $event['id']?>" target="_blank" class="wm-banner-btn">read more</a>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="wm-pagination">
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
                </div>
            </div>

        </div>
    </div>

<?php else: ?>
    <h2>Here Not Found Any Events!</h2>
<?php endif; ?>
