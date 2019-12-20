<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 19.12.2019
 * Time: 1:15
 */

use yii\widgets\LinkPager;

$this->title = 'Publications';

$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(!empty($publications)): ?>
<div class="col-md-12">
   <div class="wm-shopgrid-sec wm-shop-list">
      <ul class="row">
          <?php foreach ($publications as $item): ?>
         <li class="col-md-12">
            <div class="wm-shop-grid">
               <div class="wm-futurecourse" style="margin: 10px 0px 0px 10px">
                  <h2><a href="/publication/read?id=<?= $item['id'] ?>" title="read more" target="_blank"><?= $item['title'] ?></a></h2>
                  <p>
                     <?= substr($item['title'], 0, 300) ?>
                  </p>
                  <div class="wm-cart-button" style="margin: 20px">
                     <a href="/publication/read?id=<?= $item['id'] ?>" title="read more" target="_blank">
                        <i class="fa fa-eye" aria-hidden="true"></i>
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
      echo LinkPager::widget([
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
    <h2>Here not found any publications!</h2>
<?php endif; ?>