<?php


use app\components\LatestNews;
use app\components\Partners;
use app\components\UpcomingEvents;
use app\components\PopularPosts;


$this->title = 'Home Page';
?>
<?php if(!empty($project)): ?>
<div class="wm-main-section wm-service-slider-full">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="whychooseus-list">
                    <h3 class="widget-title"><?= $project['title'] ?></h3>
                    <p><?= $project['description'] ?></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wm-questions-studying">
                    <img src="<?= Yii::getAlias('@upload') ?>/logo/euflag.png" alt="" width="150" style="margin: 10px">
                    <h4 class="wm-color">
                        This project has received funding from the European
                        Union’s Horizon 2020 research and innovation
                        programme under grant agreement No <?= $project['grant_agreement_id'] ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>



<!--// Main Section \\-->
<?= PopularPosts::widget() ?>
<!--// Main Section \\-->

<?= Partners::widget() ?>

<!--// Main Section \\-->
<?= UpcomingEvents::widget() ?>
<!--// Main Section \\-->


<!--// Main Section \\-->
<?= LatestNews::widget() ?>
<!--// Main Section \\-->
<?php if(!empty(Yii::$app->params['contact'])): ?>
<!--// Main Section \\-->
<div class="wm-main-section wm-contact-service-two-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wm-contact-main">
                <div class="wm-contact-service-two">
                    <ul class="row">
                        <li class="col-md-4">
                            <span class="wm-ctservice-icon wm-bgcolor-two"><i class="wmicon-pin"></i></span>
                            <h5 class="wm-color">Address</h5>
                            <p><?= Yii::$app->params['contact']['address'] ?></p>
                        </li>
                        <li class="col-md-4">
                            <span class="wm-ctservice-icon wm-bgcolor-two"><i class="wmicon-phone"></i></span>
                            <h5 class="wm-color">Phone & Fax</h5>
                            <p><?= Yii::$app->params['contact']['tel'] . ' & ' . Yii::$app->params['contact']['fax'] ?></p>
                        </li>
                        <li class="col-md-4">
                            <span class="wm-ctservice-icon wm-bgcolor-two"><i class="wmicon-letter"></i></span>
                            <h5 class="wm-color">E-mail</h5>
                            <p>
                                <a href="mailto:<?= Yii::$app->params['contact']['email'] ?>">
                                    <?= Yii::$app->params['contact']['email'] ?>
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
                <ul class="contact-social-icon">
                    <li>
                        <a href="<?= Yii::$app->params['contact']['facebook'] ?>"><i class="wm-color wmicon-social5"></i>
                            Facebook
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->params['contact']['twitter'] ?>">
                            <i class="wm-color wmicon-social4"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->params['contact']['linkedIn'] ?>">
                            <i class="wm-color wmicon-social3"></i> Linkedin
                        </a>
                    </li>
                    <li>
                        <a href="<?= Yii::$app->params['contact']['vimeo'] ?>">
                            <i class="wm-color wmicon-vimeo"></i> Vimeo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--// Main Section \\-->