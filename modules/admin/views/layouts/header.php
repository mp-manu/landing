<?php
/**
 * Created by PhpStorm.
 * User: Manuchehr
 * Date: 14.11.2019
 * Time: 16:55
 */
$all = $this->params['postCount'] + $this->params['eventsCount'] + $this->params['newsCount']  + $this->params['messageCount'];

?>
<!-- headertop -->
<div class="header">
    <nav class="navbar" style="margin-bottom: 0px">
        <div class="container-fluid">
            <div class="navbar-holder d-flex justify-content-between">
                <!-- Navbar Header-->
                <div class="navbar-header d-flex align-items-center">
                    <!-- Navbar Brand -->
                    <a href="/" class="navbar-brand" style="font-size: 20px">
                        <div class="brand-text d-none d-lg-inline-block"><strong><?= Yii::$app->settings->get('Site', 'sitename') ?></strong></div>
                        <div class="brand-text  d-sm-inline-block d-lg-none"><strong>AP</strong></div>
                    </a>
                </div>
                <!-- Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center float-right">
                    <li class="nav-item dropdown d-flex align-items-center mr-2">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user"
                           data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false"><img src="/upload/avatars/<?= $this->params['avatar']['avatar'] ?>" alt="user" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin/main/profile"><i class="fas fa-user-circle mr-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="/admin/settings"><i class="fas fa-cog mr-2"></i> Settings</a></li>
                            <li><a class="dropdown-item text-danger" href="/admin/main/logout"><i class="fas fa-power-off mr-2"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- end headertop -->

