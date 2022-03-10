
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">


      <a href="index2.html" class="logo">
        <span class="logo-mini"><img src="<?php echo  base_url();?>assets/dist/img/bit.png"></span>
        <img src="<?php echo  base_url();?>assets/dist/img/bit.png">
      </a>



      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>


        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">







            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">RAy</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $user ?>
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>


                <!-- Menu Footer-->
                <li class="user-footer">

                  <div class="pull-right">
                    <a href="<?php echo base_url();?>index.php/admin_fakultas/logout" class="btn btn-danger .btn-lg">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
