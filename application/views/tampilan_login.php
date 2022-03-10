<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">





  <div class="navbar-custom-menu ">
</head>


  <section class="content">
  <div class="row">
  <div class="col-md-12">
  <div class="box box-solid box-primary">
  <div class="box-header with-border">
  <div class="login-logo">
  <div class="pull-left">
  <img src="<?php echo  base_url();?>assets/dist/img/upn.png"  alt="User Image">
  </div>

  <div class="pull-right">
  <b>Electronic Skripsi</b>
    </div>
  </div>
</div>





<div class="row">
       <div class="col-md-12">
         <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Selamat Datang di Sistem Electronic Skripsi UPN "veteran" Jakarta</h3>


           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col-md-8 ">
                  <div class="description-block border-right">
                 <p class="text-center">
                   <b><strong>Is this your first time here?</strong></b>
                 </p>

      <ol>
        <li>   Sistem electronic Skripsi ini di peruntuhkan bagi mahasiswa semester akhir.</li>
        <li>Untuk mahasiswa dapat login dengan menggunakan Nrp dan Password akademik </li>
        <li>untuk Admin Fakultas dapat login menggunakan akun admin fakultas yang diberikan oleh Admin Pusat.</li>
        <li>Jika terdapat Masalah Dalam Login Harap hubungi Admin pusat.</li>
      <ol>

    </div>
        </div>





       <div class="col-md-4">
           <p class="text-center">
               <strong>LOGIN</strong>
           </p>

          <body class="hold-transition login-page">
             <div class="login-box ">
                  <div class="login-box-body">
                     <form action="<?php echo base_url();?>index.php/login/getlogin"  method="post" onsubmit="return cekform();">
                        <div class="form-group has-feedback">
                            <input type="text" name="username" id="username" class="form-control" placeholder="NRP">
                                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                                      <div class="form-group has-feedback">
                                      <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                          <br>
              <?php $info = $this->session->flashdata('info');
              if(!empty($info))
              {
              echo $info;
              }
              ?>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-8">
                                      <p class="text-blue"><b>Lupa Password</b></p>
                                      <a href="#"></a><br>
                                    </div>
                                    <div class="col-xs-4">
                                      <button type="submit" class="btn btn-default btn-block btn-flat">Login</button>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


                  <div class="box-footer">
                    <div class="row">
                      <div class="col-sm-3 col-xs-6">
                          <i>Kontak Admin Pusat</i><br>
                        <span class="glyphicon glyphicon-envelope"></span> <b>  08981231127</b>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

              <div class="box-footer">
              <strong>Copyright &copy; Universitas Pembangunan Nasional Veteran Jakarta </strong> 2016
              <div>






    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%'
        });
      });
    </script>
  </body>
</html>
