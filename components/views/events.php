<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 19:46
 */
if(!empty($data)):
?>
<div class="wm-main-section wm-upcoming-event-slider-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-fancytitle-two"> <h2>Upcoming Events</h2> </div>
                <div class="wm-upcoming-event-slider">
                    <?php foreach ($data as $item): ?>
                    <div class="wm-upcoming-event-layer">
                        <div class="wm-banner-addswrap">
                            <div class="wm-banner-adds-inner">
                                <center><time datetime="2008-02-14 20:00"><i class="wmicon-time2"></i>From: <?= $item['date_from'].'<br> To: '.$item['date_to'] ?></time></center>
                                <h2><?= $item['title'] ?></h2>
                                <p><?= substr($item['description'], 0, 150) ?></p>
                            </div>
                            <span><?= $item['title'] ?></span>
                            <div class="wm-banner-adds-inner">
                                <a href="/events/read?id=<?= $item['id'] ?>" class="wm-classic-button wm-bgcolor-two" target="_blank">See Event</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>