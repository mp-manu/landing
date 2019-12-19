<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 17.12.2019
 * Time: 21:09
 */
$this->title = $project['title'];
//$this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => ['/']];
$this->params['breadcrumbs'][] = substr($this->title, 0, 51) . '...';
?>
<div class="row">
    <div class="col-md-9">
        <h2><?= $project['title'] ?></h2>
        <div class="wm-our-course-detail">
            <?php if (!empty($project['description'])): ?>
                <div class="wm-title-full">
                    <h2>Project description</h2>
                </div>
                <p class="wm-text">
                    <?= $project['description'] ?>
                </p>
            <?php endif; ?>
            <?php if (!empty($project['objective'])): ?>
                <div class="wm-courses-info">
                    <div class="wm-title-full">
                        <h2>Project Objective</h2>
                    </div>
                    <?= $project['objective'] ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($programm)): ?>
                <div class="wm-courses-info">
                    <div class="wm-title-full">
                        <h2>Programme(s)</h2>
                    </div>
                    <?php foreach ($programm as $item): ?>
                        <?= $item['name'] . '<br>' ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($topic)): ?>
                <div class="wm-courses-info">
                    <div class="wm-title-full">
                        <h2>Topic(s)</h2>
                    </div>
                    <?php foreach ($topic as $item): ?>
                        <?= $item['name'] . '<br>' ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($proposals)): ?>
                <div class="wm-courses-info">
                    <div class="wm-title-full">
                        <h2>Call for Proposal</h2>
                    </div>
                    <?php foreach ($proposals as $item): ?>
                        <?= $item['name'] . '<br>' ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($fund)): ?>
                <div class="wm-courses-info">
                    <div class="wm-title-full">
                        <h2>Funding Scheme</h2>
                    </div>
                    <?php foreach ($fund as $item): ?>
                        <?= $item['title'] . '<br>' ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="wm-certification-listing">
                <div class="wm-title-full">
                    <h2>Participants and Partners</h2>


                </div>

            </div>
        </div>
    </div>
    <aside class="col-md-3">
        <div class="widget widget_course-price">
            <div class="wm-widget-heading">
                <h4>Project Information</h4>
            </div>
            <h3 class="text-justify"><?= $project['title'] ?></h3>
            <img style="margin-left: 20%; margin-bottom: 20px; width: 150px;" src="<?= Yii::getAlias('@upload').'/logo/euflag.png' ?>" />
            <ul>
                <li>
                    <a href="#">Grant Agreement ID: <strong><?= $project['grant_agreement_id'] ?></strong></a>
                </li>
                <li>
                    <a href="#">
                        Coordinated by: <br><strong>DUBLIN CITY UNIVERSITY</strong>
                        <br>
                        <p class="flag-icon flag-icon-ie"></p> Ireland
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>