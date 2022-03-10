

<!-- Main content -->
<section class="content">
  <div class="row">

    <!-- /.col -->
    <div class="col-md-10">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Input Data Informasi</h3>
        </div>
        <!-- /.box-header -->


        <!--formstar-->
          <?php echo form_open('informasi/edit_simpan'); ?>
          <?php echo form_hidden('id', $this->uri->segment(3)); ?>

        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1 ">Kode Info</label>
            <?php echo form_input('id',$q['id_info'], array('class' => 'form-control' )); ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Judul Informasi</label>
            <?php echo form_input('header',$q['header_info'], array('class' => 'form-control')); ?>
          </div>
          <div class="form-group">


                  <?php echo form_textarea('body',$q['body_info'], array('id' =>'compose-textarea','class' => 'form-control')); ?>

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Footer</label>
            <?php echo form_input('footer',$q['footer_info'], array('class' => 'form-control')); ?>
          </div>

      </div>


        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
          </div>
      </div>

        <!-- /.box-footer -->
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
  </div>
        <?php echo form_close(); ?>
  <!-- /.row -->

</section>
<!-- /.content -->
</div>
