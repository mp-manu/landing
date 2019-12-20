<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 22:00
 */
if (!empty($data)): ?>

    <div class="widget widget_futurecourse">
        <div class="wm-widget-title">
            <h2>Upcoming Events</h2>
        </div>
        <ul>
            <?php foreach ($data as $item): ?>
                <li>
                    <figure>
                        <a href="/events/read?id=<?= $item['id'] ?>">
                            <img alt="" src="<?= Yii::getAlias('@upload') . '/events/' . $item['photo'] ?>" width="80">
                        </a>
                    </figure>
                    <div class="wm-futurecourse">

                        <h4>
                            <a href="/events/read?id=<?= $item['id'] ?>"><?= $item['title'] ?></a>
                        </h4>
                        <small>From: <?= $item['date_from'] ?></small>
                        <small>To: <?= $item['date_to'] ?></small>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>