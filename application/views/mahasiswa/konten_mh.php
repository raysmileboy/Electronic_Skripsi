
<?php foreach($title as $k) {

        $text =  $k->header_info;
        $text1 = $k->body_info;
        $text2 = $k->footer_info;

?>


<!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box box box-solid box-default">
      <div class="box-header with-border">
        <h2 class="box-title"><b><?php echo $text; ?></b></h2>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class='box-body'>
        <?php echo $text1; ?>
      </div>
      <!-- /.box-body -->
      <div class="box-footer bg-gray color-palette">
          <?php echo $text2; ?>
      </div>
      <!-- /.box-footer-->

    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->

  <?php } ?>


  <?php foreach($kedua as $y) {

          $text =  $y->header_info;
          $text1 = $y->body_info;
          $text2 = $y->footer_info;

  ?>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box box-solid box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><b><?php echo $text; ?></b></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <div class="box-body">
            <?php echo $text1; ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer bg-gray color-palette">
            <?php echo $text2; ?>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  <?php } ?>


  <?php foreach($ketiga as $y) {

          $text =  $y->header_info;
          $text1 = $y->body_info;
          $text2 = $y->footer_info;

  ?>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box box box-solid box-default">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $text; ?></h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>

          <div class="box-body">
            <?php echo $text1; ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer bg-gray color-palette">
        <?php echo $text2; ?>
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>

      <?php } ?>
