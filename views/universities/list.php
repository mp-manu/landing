<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.02.2020
 * Time: 2:27
 */
$this->title = 'Universities';

$this->params['breadcrumbs'][] = $this->title;
?>
<?php if (empty($data)): ?>
    <h2>Here not found any news!</h2>
<?php else: ?>
    <?php foreach ($data as $item): ?>
        <div class="wm-main-section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wm-detail-editore">
                        <h2><?= $item['name'] ?></h2>
                        <p><?= $item['about'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
