<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\MainAsset;
use yii\helpers\Html;
use app\assets\AppAsset;
use yii\widgets\Breadcrumbs;

MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php $this->beginBody() ?>

<div class="wm-main-wrapper">

    <!--// Header \\-->
        <?= $this->render('header') ?>
    <!--// Header \\-->
    <!--// Mini Header \\-->
    <div class="wm-mini-header">
        <span class="wm-blue-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wm-mini-title">
                       <?php if (!Yii::$app->controller->action->id == 'new-market'): ?>
                           <h1><?= substr($this->title, 0, 51) . '...' ?></h1>
                       <?php else: ?>
                           <h1><?= substr($this->title, 0, 51) ?></h1>
                       <?php endif; ?>
                    </div>
                    <div class="wm-breadcrumb">
                       <?= Breadcrumbs::widget([
                           'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                           'tag' => 'ul',
                           'options' => ['class' => ''],
                          //'itemTemplate' => '<li>{link}&nbsp;',
                           'homeLink' => ['label' => 'Home', 'url' => '/'],
                       ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Mini Header \\-->
    <!--// Main Content \\-->
    <div class="wm-main-content">
        <!--// Main Section \\-->
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <div class="widget widget_futurecourse">
                            <div class="wm-widget-title">
                                <h2>Events</h2>
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="#">
                                            <img alt="" src="/extra-images/blog-widget-1.jpg">
                                        </a>
                                    </figure>
                                    <div class="wm-futurecourse">
                                        <div class="wm-futurecourse-info">
                                            <h4>
                                                <a href="#">Transdisciplinary Design</a>
                                            </h4>
                                            <small>$59.00</small>
                                            <span>$39.00</span>
                                        </div>
                                        <ul>
                                            <li><a href="#"><i class="wmicon-social7" aria-hidden="true"></i>309</a></li>
                                            <li><a href="#"><i class="wmicon-social6" aria-hidden="true"></i>19 </a></li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="widget widget_latestnews">
                            <div class="wm-widget-title">
                                <h2>Latest News</h2>
                            </div>
                            <ul>
                                <li>
                                    <figure>
                                        <a href="#"><img src="/extra-images/widget-latestnews-1.jpg" alt=""></a>
                                    </figure>
                                    <div class="wm-latestnews">
                                        <h5><a href="#">Reality check for all openings</a></h5>
                                        <p>The open and distance learning vision of...</p>
                                        <time datetime="2008-02-14 20:00">6/4/2016</time>
                                        <a href="#"><i class="wmicon-social"></i>21</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <div class="col-md-9">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>
    <!--// Main Content \\-->

    <?= $this->render('footer') ?>

    <div class="clearfix"></div></div>

    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Login to Your Account</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                                <li> <input type="submit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Your Username" onblur="if(this.value == '') { this.value ='Your Username'; }" onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li> <input type="text" value="Your E-mail" onblur="if(this.value == '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                <li> <input type="password" value="password" onblur="if(this.value == '') { this.value ='password'; }" onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <input type="text" value="Confirm Password" onblur="if(this.value == '') { this.value ='Confirm Password'; }" onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a></li>
                            <li class="wm-googleplus-color"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <!-- ModalSearch Box -->
    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form">
                        <span class="wm-color">Search Your KeyWord</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Keywords..." onblur="if(this.value == '') { this.value ='Keywords...'; }" onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Search"> </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalSearch Box -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
