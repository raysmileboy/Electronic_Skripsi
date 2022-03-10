<?php
$options = array(
        'skripsi'             => 'Skripsi',
        'jurnal'             => 'Jurnal',
        'website'             => 'Panduan Website',
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
          <h3 class="box-title">Upload Panduan</h3>
        </div>
        <!-- /.box-header -->
        <?php $gagal = $this->session->flashdata('gagal');
        if(!empty($gagal))
        {
                echo "<div class='alert alert-warning alert-dismissible'>
                      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                      <h4><i class='icon fa fa-warning'></i> Data Tidak Berhasil di Upload!</h4>
                      </div>";
        }

        ?>


        <?php $sukses = $this->session->flashdata('sukses');
        if(!empty($sukses))
        {
                    echo "<div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i>Data Berhasil di Upload</h4>
                      </div>";
        }
        ?>


        <!-- form start -->
        <?php echo form_open_multipart('Panduan/do_upload'); ?>
          <div class="box-body">
            <div class="form-group">

              <div class="form-group">
                <label>Status</label>

                  <?php echo form_dropdown('stts', $options,'' ,$class); ?>
                  </div>

                          <label>File</label>
                          <div class="input-group">
                          <input type="file"   name="userfile" class="form-control">
                          <span class="input-group-addon btn btn-default btn-file" >
                          <i class="fa fa-file-word-o" aria-hidden="true"></i></span>
                          </div>



                            <br>
                          </div>




                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                          <?php echo form_close(); ?>
                  </div>
              </div>







              </div>
            </div>
      </section>
