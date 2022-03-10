<section class="content">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Informasi</h3>
  </div>
  <!-- /.box-header -->
  <p>
    &nbsp;  &nbsp;
  <a href="<?php echo base_url();?>index.php/informasi/tambah" class="btn btn-primary">Tambah</a>
  </p>


  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Halaman</th>
        <th>Title</th>
        <th>Body</th>
        <th>Footer</th>
        <th>Action </th>
        <th>Action </th>


      </tr>
      </thead>
      <tbody>

        <?php
        $no = 1;
        foreach ($informasi as $i) {
              echo "<tr>
              <td>".$no++."</td>
              <td>$i->id_info  </td>
              <td>$i->page </td>
              <td>$i->header_info </td>
              <td>$i->body_info </td>
              <td>$i->footer_info</td>
              <td> ".anchor('informasi/edit/'.  $i->id_info, 'EDIT')."</td>
              <td> ".anchor('informasi/hapus/'. $i->id_info, 'HAPUS')."</td>

              </tr>";

}
?>


      </tbody>
    </table>

</div>
</div>
  <!-- /.box-body -->
</div>
</section>
<!-- /.content -->
