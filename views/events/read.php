<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:27
 */
$this->title = 'Event '.$event['title'];

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="singleshop-tab">
   <?php if (empty($event)): ?>
      <h2>Publication not found!</h2><br>
      <a href="/">Go To Homepage</a>
   <?php else: ?>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
         <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"
                                                   aria-expanded="true">Publication
               Author(s): <?= $event['author'] ?></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
         <div role="tabpanel" class="tab-pane active" id="home">
            <div class="wm-description-tab">
               <h2><?= $event['title'] ?></h2>
               <p><?= $event['description'] ?></p>
               <div class="wm-cart-button">
                  <a href="/publication/list" title="Go to  publication list">
                     <i class="fa fa-arrow-circle-left" aria-hidden="true"></i><span>Go to publication list</span>

                  </a>
               </div>
            </div>
         </div>
      </div>
   <?php endif; ?>
</div>
