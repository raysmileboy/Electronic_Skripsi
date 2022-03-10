<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit</h3>
        </div>
        <!-- /.box-header -->


        <!-- form start -->
        <?php echo form_open('manage_user/edit_simpan'); ?>
        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Id username</label>
                <?php echo form_input('id_username', $q['id_username'], array('class' => 'form-control'  )); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Username</label>
                <?php echo form_input('username', $q['username'], array('class' => 'form-control'  )); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">password</label>
              <?php echo form_input('password', $q['password'], array('class' => 'form-control'  )); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Nama</label>
              <?php echo form_input('nama', $q['nama_lengkap'], array('class' => 'form-control'  )); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">foto</label>
              <?php echo form_input('Foto', $q['foto'], array('class' => 'form-control'  )); ?>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="submit" class="btn btn-success">kembali</button>
          </div>
              <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
    </section>
      <!-- /.box -->
