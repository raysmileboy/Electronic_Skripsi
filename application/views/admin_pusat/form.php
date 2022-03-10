

<?php
$options = array(
        '1'             => 'Admin',
        '2'             => 'Admin Fakultas',
        '3'             => 'Mahasiswa',
);
$class      ="class='form-control' id='stts'";
?>





<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Manage Data Users</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <?php echo form_open('manage_user/simpan'); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Id user</label>
              <input type="text" class="form-control"  id="id_u" name="id_u"  placeholder="ID Username">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Username</label>
              <input type="text" class="form-control" id="username" name="username"  placeholder="Usernama">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="text" class="form-control" id='password' name='password'  placeholder="password">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Foto</label>
              <input type="text" class="form-control" id="Foto" name="Foto"  placeholder="Foto">
            </div>



            <div class="form-group">
              <label>Status</label>

                <?php echo form_dropdown('stts', $options,'' ,$class); ?>
                </div>

            </div>





          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
              <?php echo form_close(); ?>
      </div>
    </div>
  </div>
    </section>
