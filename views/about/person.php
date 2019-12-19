<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 19.12.2019
 * Time: 16:41
 */
$this->title = 'About ' . $data['person'];

$this->params['breadcrumbs'][] = $data['person'];

?>

<div class="row">
    <div class="col-md-9">
        <h3><?= $data['person'] ?></h3>
        <img src="<?= Yii::getAlias('@upload') . '/team/' . $data['photo'] ?>" alt="<?= $data['person'] ?>"><br><br>
        <?= $data['about'] ?>
    </div>
</div>