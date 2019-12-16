<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */



$this->title = $name;
?>
<!--// Main Section \\-->
<div class="wm-main-section">
    <div class="wm-404page-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p style="font-size: 120px; text-align: center; margin-top: 35px%">404</p>
                </div>
                <div class="col-md-7">
                    <div class="wm-404page">
                        <div class="wm-404page-text">
                            <h3>Ooops! Page Not Found!</h3>
                            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable..</p>
                            <ul>
                                <li>If you typed the page adress, make sure it is spelled correctly.</li>
                                <li>Click <a href="/">Homepage</a> and try there.</li>
                            </ul>
                            <form>
                                <input type="text" onfocus="if(this.value =='Enter Your Keyword') { this.value = ''; }" onblur="if(this.value == '') { this.value ='Enter Your Keyword'; }" value="Enter Your Keyword">
                                <i class="wmicon-search"></i>
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="wm-404page-button">
                            <ul>
                                <li><a href="/"><span>Go Back</span></a></li>
                                <li><a href="/"><span>back To homepage</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Main Section \\-->
