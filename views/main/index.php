<?php



use app\components\Partners;
use app\components\UpcomingEvents;
use app\components\PopularPosts;


$this->title = 'Home Page';
?>

<!--// Main Section \\-->
<div class="wm-main-section wm-service-slider-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wm-service-heading">Our Courses</h2>
                <div class="wm-service-slider">
                    <div class="wm-service-layer">
                        <ul class="row">
                            <li class="col-md-3">
                                <i class="wmicon-music8"></i>
                                <span>Tuba-Euphonium</span>
                                <p>Designed to give a comprehensive education in performance.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music7"></i>
                                <span>percussion</span>
                                <p>This coursr provides you the ideal undergraduate training.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music6"></i>
                                <span>Trumpet</span>
                                <p>Designed to provide undergraduate trumpeters with an education.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music5"></i>
                                <span>Saxophone</span>
                                <p>Comprehensive program saxophone performance and pedagogy.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music4"></i>
                                <span>flute</span>
                                <p>Unique opportunity to study at a nationally recognized conservatory.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music3"></i>
                                <span>piano</span>
                                <p>First-rate liberal arts college and a top-ranked conservatory.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music2"></i>
                                <span>violin</span>
                                <p>We pursue a double-degree program, combining a music degree.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music"></i>
                                <span>drummers</span>
                                <p>Conservatory of music and selective liberal arts college.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="wm-service-layer">
                        <ul class="row">
                            <li class="col-md-3">
                                <i class="wmicon-music3"></i>
                                <span>piano</span>
                                <p>First-rate liberal arts college and a top-ranked conservatory.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music2"></i>
                                <span>violin</span>
                                <p>We pursue a double-degree program, combining a music degree.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music"></i>
                                <span>drummers</span>
                                <p>Conservatory of music and selective liberal arts college.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music8"></i>
                                <span>Tuba-Euphonium</span>
                                <p>Designed to give a comprehensive education in performance.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music7"></i>
                                <span>percussion</span>
                                <p>This coursr provides you the ideal undergraduate training.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music6"></i>
                                <span>Trumpet</span>
                                <p>Designed to provide undergraduate trumpeters with an education.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music5"></i>
                                <span>Saxophone</span>
                                <p>Comprehensive program saxophone performance and pedagogy.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="wmicon-music4"></i>
                                <span>flute</span>
                                <p>Unique opportunity to study at a nationally recognized conservatory.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Main Section \\-->

<!--// Main Section \\-->
<?= PopularPosts::widget() ?>
<!--// Main Section \\-->

<!--// Main Section \\-->
<?= \app\components\Participant::widget() ?>
<!--// Main Section \\-->


<!--// Main Section \\-->
<?= Partners::widget() ?>
<!--// Main Section \\-->

<!--// Main Section \\-->
<?= UpcomingEvents::widget() ?>
<!--// Main Section \\-->


<!--// Main Section \\-->
<?= \app\components\LatestNews::widget() ?>
<!--// Main Section \\-->

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
                            <p><?=  Yii::$app->params['contact']['tel'] .' & '.  Yii::$app->params['contact']['fax'] ?></p>
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
                        </a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!--// Main Section \\-->