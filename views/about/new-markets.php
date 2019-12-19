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
           <?php if (!empty($topic)): ?>
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
           <?php if (!empty($partners_and_partipipants['Coordinator'])): ?>
               <div class="wm-title-full">
                   <h2>Coordinator</h2>
               </div>
               <div class="wm-certification-listing">
                   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <?php foreach ($partners_and_partipipants['Coordinator'] as $item): ?>
                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="heading-<?= $item['country_flag'] ?>">
                                  <h3 class="panel-title">
                                      <a role="button" data-toggle="collapse" data-parent="#accordion"
                                         href="#collapse-<?= $item['country_flag'] ?>" aria-expanded="true"
                                         aria-controls="collapse-<?= $item['country_flag'] ?>"
                                         style="font-size: 18px; color: #0b3e6f">
                                          <i class="fa fa-university"></i> <?= $item['unversity'] ?> <i
                                                  class="fa fa-arrow-circle-down"></i>
                                      </a>
                                  </h3>
                              </div>
                              <div id="collapse-<?= $item['country_flag'] ?>" class="panel-collapse collapse in"
                                   role="tabpanel" aria-labelledby="heading-<?= $item['country_flag'] ?>">
                                  <div class="panel-body">
                                      <div class="col-md-4">
                                          <strong>Address:</strong> <?= $item['address'] ?><br>
                                          <span class="flag-icon flag-icon-<?= $item['country_flag'] ?>"
                                                title="<?= $item['flag_icon'] ?>"></span> <?= $item['country'] ?>
                                          <br><br>
                                          <a href="<?= $item['web_site'] ?>" style="color: #0b58a2; font-size: 14px"
                                             target="_blank"><i class="fa fa-link"></i> Web site</a>
                                      </div>
                                      <div class="col-md-4 text-center">
                                          <strong>Activity Type:</strong><br>
                                          <span><?= $item['activity_type'] ?></span><br>
                                          <a href="<?= $item['org_contact'] ?>" style="color: #0b58a2; font-size: 14px"
                                             target="_blank"><i class="fa fa-link"></i> Contact the organisation</a>
                                      </div>
                                      <div class="col-md-4">
                                          <strong>EU Contribution</strong><br>
                                          <span>€ <?= $item['eu_contribution'] ?></span><br>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                   </div>
               </div>
           <?php endif; ?>
           <?php if (!empty($partners_and_partipipants['Participant'])): ?>
               <div class="wm-title-full">
                   <h2>Participants</h2>
               </div>
               <div class="wm-certification-listing">
                   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <?php foreach ($partners_and_partipipants['Participant'] as $item2): ?>
                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="heading-<?= $item2['country_flag'] ?>">
                                  <h3 class="panel-title">
                                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                         href="#collapse-<?= $item2['country_flag'] ?>" aria-expanded="false"
                                         aria-controls="collapse-<?= $item2['country_flag'] ?>"
                                         style="font-size: 18px; color: #0b3e6f">
                                          <i class="fa fa-university"></i> <?= $item2['unversity'] ?> <i
                                                  class="fa fa-arrow-circle-down"></i>
                                      </a>
                                  </h3>
                              </div>
                              <div id="collapse-<?= $item2['country_flag'] ?>" class="panel-collapse collapse"
                                   role="tabpanel" aria-labelledby="heading-<?= $item2['country_flag'] ?>">
                                  <div class="panel-body">
                                      <div class="col-md-4">
                                          <strong>Address:</strong> <?= $item2['address'] ?><br>
                                          <span class="flag-icon flag-icon-<?= $item2['country_flag'] ?>"
                                                title="<?= $item2['flag_icon'] ?>"></span> <?= $item2['country'] ?>
                                          <br><br>
                                          <a href="<?= $item2['web_site'] ?>" style="color: #0b58a2; font-size: 14px"
                                             target="_blank"><i class="fa fa-link"></i> Web site</a>
                                      </div>
                                      <div class="col-md-4">
                                          <strong>Activity Type:</strong><br>
                                          <span><?= $item2['activity_type'] ?></span><br>
                                          <a href="<?= $item2['org_contact'] ?>" style="color: #0b58a2; font-size: 14px"
                                             target="_blank"><i class="fa fa-link"></i> Contact the organisation</a>
                                      </div>
                                      <div class="col-md-4">
                                          <strong>EU Contribution</strong><br>
                                          <span>€ <?= $item2['eu_contribution'] ?></span><br>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                   </div>
               </div>
           <?php endif; ?>
           <?php if (!empty($partners_and_partipipants['Partner'])): ?>
               <div class="wm-title-full">
                   <h2>Partners</h2>
               </div>
               <div class="wm-certification-listing">
                   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <?php foreach ($partners_and_partipipants['Partner'] as $item3): ?>
                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="heading-<?= $item3['country_flag'] ?>">
                                  <h3 class="panel-title">
                                      <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                         href="#collapse-<?= $item3['country_flag'] ?>" aria-expanded="false"
                                         aria-controls="collapse-<?= $item3['country_flag'] ?>"
                                         style="font-size: 18px; color: #0b3e6f">
                                          <i class="fa fa-university"></i> <?= $item3['unversity'] ?> <i
                                                  class="fa fa-arrow-circle-down"></i>
                                      </a>
                                  </h3>
                              </div>
                              <div id="collapse-<?= $item3['country_flag'] ?>" class="panel-collapse collapse"
                                   role="tabpanel" aria-labelledby="heading-<?= $item3['country_flag'] ?>">
                                  <div class="panel-body">
                                      <div class="col-md-4">
                                          <strong>Address:</strong> <?= $item3['address'] ?><br>
                                          <span class="flag-icon flag-icon-<?= $item3['country_flag'] ?>"
                                                title="<?= $item3['flag_icon'] ?>"></span> <?= $item3['country'] ?>
                                          <br><br>
                                          <a href="<?= $item3['web_site'] ?>" style="color: #0b58a2; font-size: 14px"
                                             target="_blank"><i class="fa fa-link"></i> Web site</a>
                                      </div>
                                      <div class="col-md-4">
                                          <strong>Activity Type:</strong><br>
                                          <span><?= $item3['activity_type'] ?></span><br>
                                          <a href="<?= $item3['org_contact'] ?>" style="color: #0b58a2; font-size: 14px"
                                             target="_blank"><i class="fa fa-link"></i> Contact the organisation</a>
                                      </div>
                                      <div class="col-md-4">
                                          <strong>EU Contribution</strong><br>
                                          <span>€ <?= $item3['eu_contribution'] ?></span><br>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      <?php endforeach; ?>
                   </div>
               </div>
           <?php endif; ?>
        </div>
    </div>
    <aside class="col-md-3">
        <div class="widget widget_course-price">
            <div class="wm-widget-heading">
                <h4>Project Information</h4>
            </div>
            <h3 class="text-justify"><?= $project['title'] ?></h3>
            <img style="margin-left: 20%; margin-bottom: 20px; width: 150px;"
                 src="<?= Yii::getAlias('@upload') . '/logo/euflag.png' ?>"/>
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