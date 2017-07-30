<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\URL;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>



<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

<?php $this->beginBody() ?>

    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

            <li class="nav-item px-3">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#"><i class="icon-list"></i></a>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="d-md-down-none">admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>

                    <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>

                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>

                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-default">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
            </li>

        </ul>
    </header>

    <div class="app-body">
        <div class="sidebar">
            <nav class="sidebar-nav">
                
                <?php

                    $controller = 'mediapress';

                    $menu_list =  array();

                    /* Main site */

                    //$menu_list['index'] = '/site/index';


                    /* MediaPress */

                    $menu_list['mediapress'] = array();

                    $menu_list['mediapress']['label'] = 'MediaPress';

                    $menu_list['mediapress']['items']['create_gallery']['action'] = 'create-gallery';
                    $menu_list['mediapress']['items']['create_gallery']['label'] = 'Creat Gallery';

                    $menu_list['mediapress']['items']['delete_galery']['action'] = 'delete-gallery';
                    $menu_list['mediapress']['items']['delete_galery']['label'] = 'Delete Gallery';

                    $menu_list['mediapress']['items']['add_photo']['action'] = 'add-photo';
                    $menu_list['mediapress']['items']['add_photo']['label'] = 'Add Photo';

                    $menu_list['mediapress']['items']['delete_photo']['action'] = 'delete-photo';
                    $menu_list['mediapress']['items']['delete_photo']['label'] = 'Delete Photo';


                    /* BuddyPress */

                    $menu_list['buddypress'] = array();

                    $menu_list['buddypress']['label'] = 'BuddyPress';

                    $menu_list['buddypress']['items']['create_gallery']['action'] = 'create-gallery';
                    $menu_list['buddypress']['items']['create_gallery']['label'] = 'Creat Gallery';

                ?>



                <ul class="nav">

                    <li class="nav-title">
                        Rest API
                    </li>

                    <?php

                    foreach ($menu_list as $menu_id => $menu) {
                        
                        ?>

                            <li class="nav-item nav-dropdown">
                                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i><?php echo $menu['label']; ?> </a>
                                <ul class="nav-dropdown-items">
                                    
                                    <?php

                                    foreach ($menu['items'] as $item_id => $item) {
                                        
                                        ?>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo Url::to([$menu_id.'/'.$item['action']]); ?>"><i class="icon-puzzle"></i> <?php echo $item['label']; ?> </a>
                                        </li>
                                        
                                        <?php

                                    }

                                    ?>
                                    
                                </ul>
                            </li>

                        <?php
                    }

                    ?>


                    <li class="nav-title">
                        Other
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Components <span class="badge badge-info"></span></a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-cards.html"><i class="icon-puzzle"></i> Cards</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-forms.html"><i class="icon-puzzle"></i> Forms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-modals.html"><i class="icon-puzzle"></i> Modals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-switches.html"><i class="icon-puzzle"></i> Switches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-tables.html"><i class="icon-puzzle"></i> Tables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="components-tabs.html"><i class="icon-puzzle"></i> Tabs</a>
                            </li>
                        </ul>
                    </li>


                    

                </ul>
            </nav>
        </div>

        <!-- Main content -->
        <main class="main">

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>

                <!-- Breadcrumb Menu-->
                <li class="breadcrumb-menu d-md-down-none">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <a class="btn btn-secondary" href="#"><i class="icon-speech"></i></a>
                        <a class="btn btn-secondary" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                        <a class="btn btn-secondary" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
                    </div>
                </li>
            </ol>


            <div class="container-fluid">

                <?= $content ?>

            </div>
            <!-- /.conainer-fluid -->
        </main>



    </div>

    <footer class="app-footer">
        <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
        <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
