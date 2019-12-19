<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:27
 */
$this->title = 'Events';

$this->params['breadcrumbs'][] = $this->title;
if(!empty($events)):
?>
<div class="col-md-9">
   <div class="wm-shopgrid-sec">
      <ul class="row">
         <?php foreach ($events as $event): ?>
         <li class="col-md-4">
            <div class="wm-shop-grid">
               <figure>
                  <a href="/events/read?id=<?= $event['id'] ?>" target="_blank"><img src="<?= Yii::getAlias('@upload').'/events/'.$event['photo'] ?>" alt=""></a>
               </figure>
               <div class="wm-grid-tittle">
               </div>
               <div class="wm-grid-info">
                  <h6><?= $event['title'] ?></h6>
                  <div class="wm-cart-button">
                     <a href="/events/read?id=<?= $event['id'] ?>" target="_blank">
                        <i class="wmicon-shop" aria-hidden="true"></i>
                        <span>Read More</span>
                     </a>
                  </div>
               </div>
            </div>
         </li>
         <?php endforeach; ?>
      </ul>
   </div>
   <div class="wm-pagination">
      <?php
      echo \yii\widgets\LinkPager::widget([
          'pagination' => $pages,
          'options' => [
              'tag' => 'ul',
              'class' => '',
          ],
          'linkOptions' => ['class' => 'page-numbers'],
          'activePageCssClass' => 'active'
      ])
      ?>
   </div>
</div>
<?php else: ?>
<h2>Here Not Found any Events!</h2>
<?php endif; ?>
