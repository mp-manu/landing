<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="site-contact">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    --><?php //if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
<!---->
<!--        <div class="alert alert-success">-->
<!--            Thank you for contacting us. We will respond to you as soon as possible.-->
<!--        </div>-->
<!---->
<!--        <p>-->
<!--            Note that if you turn on the Yii debugger, you should be able-->
<!--            to view the mail message on the mail panel of the debugger.-->
<!--            --><?php //if (Yii::$app->mailer->useFileTransport): ?>
<!--                Because the application is in development mode, the email is not sent but saved as-->
<!--                a file under <code>--><?//= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?><!--</code>.-->
<!--                Please configure the <code>useFileTransport</code> property of the <code>mail</code>-->
<!--                application component to be false to enable email sending.-->
<!--            --><?php //endif; ?>
<!--        </p>-->
<!---->
<!--    --><?php //else: ?>
<!---->
<!--        <p>-->
<!--            If you have business inquiries or other questions, please fill out the following form to contact us.-->
<!--            Thank you.-->
<!--        </p>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-5">-->
<!---->
<!--                --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                    --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                    --><?//= $form->field($model, 'email') ?>
<!---->
<!--                    --><?//= $form->field($model, 'subject') ?>
<!---->
<!--                    --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                    --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                    ]) ?>
<!---->
<!--                    <div class="form-group">-->
<!--                        --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                    </div>-->
<!---->
<!--                --><?php //ActiveForm::end(); ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    --><?php //endif; ?>
<!--</div>-->

<!--// Main Section \\-->
<div class="wm-main-section wm-contact-full wm-contact-full-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-contact-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" aria-controls="home" data-toggle="tab">Contact Us</a></li>
                        <li><a href="#profile" aria-controls="profile" data-toggle="tab">Information Details</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="wm-contact-form">
                                        <span>Talk To Us Today</span>
                                        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
                                        <h2 class="text-center text-success"><?= Yii::$app->session->getFlash('contactFormSubmitted') ?></h2>
                                        <?php endif; ?>
                                        <form action="/main/contact" method="post">
                                            <ul>
                                                <li>
                                                    <i class="wmicon-black"></i>
                                                    <input type="text" value="Name" required="true" name="name" onblur="if(this.value == '') { this.value ='Name'; }" onfocus="if(this.value =='Name') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-symbol3"></i>
                                                    <input type="text" value="E-mail" name="email" onblur="if(this.value == '') { this.value ='E-mail'; }" onfocus="if(this.value =='E-mail') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-technology4"></i>
                                                    <input type="text" value="Phone" name="phone" onblur="if(this.value == '') { this.value ='Phone'; }" onfocus="if(this.value =='Phone') { this.value = ''; }">
                                                </li>
                                                <li>
                                                    <i class="wmicon-web2"></i>
                                                    <textarea placeholder="Message" name="message" required="true"></textarea>
                                                </li>
                                                <li> <input type="submit" value="Send Message"  name="submit"> </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <?php if(!empty(Yii::$app->params['contact'])): ?>
                        <div class="tab-pane" id="profile">
                            <span class="wm-contact-title">Contact Info</span>
                            <div class="wm-contact-service">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-pin"></i></span>
                                        <h5 class="wm-color">Address</h5>
                                        <p><?= Yii::$app->params['contact']['address'] ?></p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-phone"></i></span>
                                        <h5 class="wm-color">Phone & Fax</h5>
                                        <p><?= Yii::$app->params['contact']['tel'] ?></p>
                                    </li>
                                    <li class="col-md-4">
                                        <span class="wm-service-icon"><i class="wmicon-letter"></i></span>
                                        <h5 class="wm-color">E-mail</h5>
                                        <p><a href="mailto:<?= Yii::$app->params['contact']['email'] ?>">
                                                <?= Yii::$app->params['contact']['email'] ?></a>
                                            <a href="mailto:<?= Yii::$app->params['contact']['email'] ?>">
                                                <?= Yii::$app->params['contact']['email'] ?>
                                            </a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <ul class="contact-social-icon">
                                <li><a href="<?= Yii::$app->params['contact']['facebook'] ?>"><i class="wm-color wmicon-social5"></i> Facebook</a></li>
                                <li><a href="<?= Yii::$app->params['contact']['twitter'] ?>"><i class="wm-color wmicon-social4"></i> Twitter</a></li>
                                <li><a href="<?= Yii::$app->params['contact']['linkedIn'] ?>"><i class="wm-color wmicon-social3"></i> Linkedin</a></li>
                                <li><a href="<?= Yii::$app->params['contact']['vimeo'] ?>"><i class="wm-color wmicon-vimeo"></i> Vimeo</a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Main Section \\-->
