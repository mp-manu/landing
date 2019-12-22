<?php
/**
 * Created by PhpStorm.
 * User: IT_User-144
 * Date: 04.12.2019
 * Time: 15:29
 */

use yii\widgets\ActiveForm;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = ['label' => 'Profile', 'url' => '#'];
?>

    <div class="row">
        <div class="col-lg-4 offset-2">
            <div class="card left-profile-card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="/upload/avatars/<?= $profile['avatar'] ?>" alt="" class="user-profile">
                        <?php if ($profile['user_type'] == 'A') {
                            echo '<p>Administrator</p>';
                        } else {
                            echo '<p>User</p>';
                        }

                        ?>
                    </div>
                    <div class="personal-info">
                        <h3>Personal Information</h3>
                        <ul class="personal-list">
                            <li><i class="fas fa-user"></i>
                                <span onclick="changeText(this, 'user_id-<?= $profile['user_id'] ?>')" data-tbl="user"
                                      data-atr="username" data-id="user_id-<?= $profile['user_id'] ?>"
                                      title="Click here for change" id="user_id-<?= $profile['user_id'] ?>"
                                      style="cursor: pointer">
                              <?= (!empty($profile['username'])) ? $profile['username'] : 'Your username is empty.' ?>
                            </span>
                            </li>
                            <li><i class="fas fa-envelope "></i>
                                <span onclick='changeText(this, "uid-<?= $profile['user_id'] ?>")' data-tbl="user"
                                      data-atr="email" data-id="user_id-<?= $profile['user_id'] ?>"
                                      title="Click here for change" id="uid-<?= $profile['user_id'] ?>"
                                      style="cursor: pointer">
                              <?= (!empty($profile['email'])) ? $profile['email'] : 'Your email is empty.' ?>
                            </span>
                            </li>
                        </ul>
                        <?php $form = ActiveForm::begin(['action' => '/admin/editable/change-photo']) ?>
                        <?= $form->field($model, 'avatar')->fileInput() ?>
                        <button type="submit" class="btn btn-success p-1">Change</button>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->registerJsFile('@web/admin_assets/js/custom.js'); ?>


