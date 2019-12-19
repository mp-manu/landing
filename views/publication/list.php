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
               <figure>
                  <div class="wm-grid-tittle">
                     <a href="/publication/read?id=<?= $item['id'] ?>" title="read more" target="_blank">
                        <?= $item['author'] ?>
                     </a>
                  </div>
               </figure>
               <div class="wm-grid-info">
                  <h6><a href="/publication/read?id=<?= $item['id'] ?>" title="read more" target="_blank"><?= $item['title'] ?></a></h6>
                  <p>
                     <?= substr($item['title'], 0, 300) ?>
                  </p>
                  <div class="wm-cart-button">
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