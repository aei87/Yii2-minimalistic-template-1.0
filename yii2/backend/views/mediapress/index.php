<?php

/* @var $this yii\web\View */

?>

<div class="container inner">

    <div class="col-md-6 mb-4">
       
        <div class="card">
                               
            <div class="card-header">
                <i class="fa fa-edit"></i>Form Elements
                <div class="card-actions">
                    <a href="#" class="btn-setting"><i class="icon-settings"></i></a>
                    <a href="#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
                    <a href="#" class="btn-close"><i class="icon-close"></i></a>
                </div>
            </div>

            <div class="card-block">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>

                    </div>

                </div>
                <!--/.row-->

                <div class="row">

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="ccnumber">Credit Card Number</label>
                            <input type="text" class="form-control" id="ccnumber" placeholder="0000 0000 0000 0000">
                        </div>

                    </div>

                </div>
                <!--/.row-->

              
            </div>

        </div>

    </div>

    <div class="col-md-6 mb-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-expanded="false"><i class="icon-calculator"></i> Post (Files) &nbsp;<span class="badge badge-success">New</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-expanded="false"><i class="icon-basket-loaded"></i> Request &nbsp;<span class="badge badge-pill badge-danger">29</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#messages4" role="tab" aria-controls="messages" aria-expanded="true"><i class="icon-pie-chart"></i> Response </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane" id="home4" role="tabpanel" aria-expanded="false">
                1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="tab-pane" id="profile4" role="tabpanel" aria-expanded="false">
                2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="tab-pane active" id="messages4" role="tabpanel" aria-expanded="true">
                3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>

</div>

