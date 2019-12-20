<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:27
 */
$this->title = 'Event ' . $event['title'];

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="singleshop-tab">
    <?php if (empty($event)): ?>
        <h2>Publication not found!</h2><br>
        <a href="/">Go To Homepage</a>
    <?php else: ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <figure class="wm-event-countdown"><img
                                src="<?= Yii::getAlias('@upload') . '/events/' . $event['photo'] ?>" alt="">
                        <figcaption>
                            <h2>Upcoming Event</h2>
                            <div id="wm-countdown"></div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-9">
                    <!--// Editore \\-->
                    <div class="wm-detail-editore wm-custom-space">
                        <h3><?= $event['title'] ?></h3>
                        <p><?= $event['description'] ?></p>
                        <div class="clearfix"></div>
                    </div>
                    <!--// Editore \\-->
                </div>
                <aside class="col-md-3">
                    <div class="wm-event-options">
                        <ul>
                            <li>
                                <i class="wmicon-time2"></i>
                                <span>Date:</span>
                                <p><?= $event['date_from'] ?> - <?= $event['date_to'] ?></p>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    <?php endif; ?>
</div>
