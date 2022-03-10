<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-10">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Form Upload</h3>
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
          <?php echo form_open_multipart('upload/doupload');?>
          <div class="box-body">





            <label>Word 1</label>
            <div class="input-group">
            <input type="file"   name="userfile[]" class="form-control">
            <span class="input-group-addon btn btn-default btn-file" >
            <i class="fa fa-file-word-o" aria-hidden="true"></i></span>
            </div>


              <br>
                    <label>Word 2</label>
              <div class="input-group">
              <input type="file" name="userfile[]"  class="form-control">
              <span class="input-group-addon btn btn-default btn-file" >
            <i class="fa fa-file-word-o" aria-hidden="true"></i></span>
              </div>


                      <br>
                          <label>Word 3</label>
                            <div class="input-group">

                            <input type="file" name="userfile[]"  class="form-control" >
                            <span class="input-group-addon btn btn-default btn-file" >
                            <i class="fa fa-file-word-o" aria-hidden="true"></i></span>
                            </div>


                            <br>
                          <label>Pdf</label>
                          <div class="input-group">
                          <input type="file"  name="userfile[]"  class="form-control">
                          <span class="input-group-addon btn btn-default btn-file" >
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                          </div>


                          <br>
                          <label>Jurnal</label>
                                <div class="input-group">
                                <input type="file"  name="userfile[]" id="file4" class="form-control">
                                <span class="input-group-addon btn btn-default btn-file" >
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                </div>








              </div>





          <!--.box-body -->


          <div class="box-footer">
            <button type="submit" name="submit" class="btn btn-info">Upload</button>
          </div>
        <?php echo form_close(); ?>
      </div>




<br><br>

      <!---tablestart-------->
      <div class="box">
                 <div class="box-header">
                   <h3 class="box-title">Hasil Upload</h3>
                 </div>
                 <!-- /.box-header -->
                 <div class="box-body no-padding">
                   <table class="table table-condensed">
          <thead>
          <tr>

            <th>No</th>
            <th>Data</th>


          </tr>
          </thead>
          <tbody>

            <?php
                    $no = 1;
                    foreach ($datas as $c) {
                          echo "<tr>
                          <td>".$no++."</td>
                          <td>$c->data  </td>

                          </tr>";

            }
            ?>




          </tbody>
        </table>

    </div>
    </div>
      </div>
    </div>

</section>
