<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 13.12.2019
 * Time: 15:48
 */

?>


<!--// Footer \\-->
<footer id="wm-footer" class="wm-footer-one">

   <!--// FooterNewsLatter \\-->
   <div class="wm-footer-newslatter">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <form action="/" method="post">
                  <i class="wmicon-interface2"></i>
                  <input type="text" name="subcribe_email" value="Enter your e-mail address" onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }" onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                  <input type="submit" value="Subscribe to our newsletter">
               </form>
            </div>
         </div>
      </div>
   </div>
   <!--// FooterNewsLatter \\-->

   <!--// FooterWidgets \\-->
   <div class="wm-footer-widget">
      <div class="container">
         <div class="row">
             <?php if(!empty(Yii::$app->params['contact'])): ?>
            <aside class="widget widget_contact_info col-md-3">
<!--               <a href="/" class="wm-footer-logo"><img src="/images/logo-1.png" alt=""></a>-->
               <ul>
                  <li><i class="wm-color wmicon-pin"></i> <?= Yii::$app->params['contact']['address'] ?></li>
                  <li><i class="wm-color wmicon-phone"></i> <?= Yii::$app->params['contact']['tel'] ?></li>
                  <li><i class="wm-color wmicon-letter"></i> <a href="mailto:<?= Yii::$app->params['contact']['email'] ?>"><?= Yii::$app->params['contact']['email'] ?></a></li>
               </ul>
               <div class="wm-footer-icons">
                  <a href="<?= Yii::$app->params['contact']['facebook'] ?>" class="wmicon-social5"></a>
                  <a href="<?= Yii::$app->params['contact']['twitter'] ?>" class="wmicon-social4"></a>
                  <a href="<?= Yii::$app->params['contact']['linkedIn'] ?>" class="wmicon-social3"></a>
                  <a href="<?= Yii::$app->params['contact']['vimeo'] ?>" class="wmicon-vimeo"></a>
               </div>
            </aside>
             <?php endif;
             ?>
            <aside class="widget widget_archive col-md-3">
               <div class="wm-footer-widget-title"> <h5>Quick Links</h5> </div>
               <ul>
                   <li><a href="/about/new-markets">New Markets</a></li>
                   <li><a href="/about/team">Team</a></li>
                   <li><a href="/publications/list">Publications</a></li>
                   <li><a href="/event/list">Our Latest Events</a></li>
                  <li><a href="/news/list">News</a></li>
               </ul>
            </aside>

            <?= \app\components\PartisipantsAndPartners::widget() ?>
         </div>
      </div>
   </div>
   <!--// FooterWidgets \\-->

   <!--// FooterCopyRight \\-->
   <div class="wm-copyright">
      <div class="container">
         <div class="row">
<!--            <div class="col-md-6"> <span><i class="wmicon-nature"></i>/span> </div>-->
            <div class="col-md-12"> <p>© <?= date('Y') ?>, All Right Reserved</p> </div>
         </div>
      </div>
   </div>
   <!--// FooterCopyRight \\-->

</footer>
<!--// Footer \\-->
