<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Quick Example</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <?php echo form_open('jurusan/edit_simpan'); ?>
        <?php echo form_hidden('id', $this->uri->segment(3)); ?>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nrp</label>
                <?php echo form_input('Nrp', $mhs['Nrp'], array('class' => 'form-control'  )); ?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">nama</label>
                <?php echo form_input('nama', $mhs['nama'], array('class' => 'form-control'  )); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Jurusan</label>
              <?php echo form_input('jurusan', $mhs['jurusan'], array('class' => 'form-control'  )); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Fakultas</label>
              <?php echo form_input('fakultas', $mhs['fakultas'], array('class' => 'form-control'  )); ?>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Angkatan</label>
              <?php echo form_input('angkatan', $mhs['angkatan'], array('class' => 'form-control'  )); ?>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
              <?php echo form_close(); ?>
      </div>
    </div>
  </div>
    </section>
      <!-- /.box -->
