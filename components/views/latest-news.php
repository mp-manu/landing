<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 20:17
 */
if (!empty($data)): ?>
    <div class="wm-main-section wm-tocolumn-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wm-fancytitle-two wm-align-left"><h2>Latest News</h2></div>
                    <div class="wm-news wm-latest-news">
                        <ul class="row">
                            <?php foreach ($data as $item): ?>
                                <li class="col-md-12">
                                    <div class="wm-latest-news-wrap">
                                        <figure><a href="#"><img src="extra-images/latest-news-thumb-1.jpg" alt=""></a>
                                            <figcaption><a href="#" class="wmicon-arrows3"></a></figcaption>
                                        </figure>
                                        <div class="wm-latestnews-text">
                                            <time datetime="2008-02-14 20:00">
                                                <small>apr</small>
                                                17
                                            </time>
                                            <h5><a href="#">Educator Dr. Nicole R. Robinson</a></h5>
                                            <p>The UMKC Conservatory is pleased to announce...</p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="wm-fancytitle-two wm-align-left"><h2>Testimonials</h2></div>
                    <div class="wm-thumb-testimonial">
                        <div class="wm-thumb-testimonial-layer">
                            <figure>
                                <a href="#" style="margin-top: 50%; width: 90%; margin-left: 10px"><img src="<?= Yii::getAlias('@upload').'/logo/euflag.png' ?>" alt=""></a>
                            </figure>
                            <div class="thumb-testimonial-text">
                                <h4><a href="#">Jennifer Cameron</a></h4>
                                <span class="wm-color-two">-Guitar Student</span>
                                <p>I just wanted to thank you for the beautiful guides! We are in the midst of Family
                                    Weekend check-in and have had RAVE from our parents!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endif; ?>