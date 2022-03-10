<section class="content">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Users</h3>
  </div>
  <!-- /.box-header -->


  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>

        <th>id_upload</th>
        <th>File Upload</th>
        <th>Path data</th>
        <th>Waktu Upload</th>
        <th>Action</th>

      </tr>
      </thead>
      <tbody>

        <?php
        foreach ($tmp as $d) {
              echo "<tr>
              <td>$d->id_upload </td>
              <td>$d->data</td>
              <td>$d->path_data </td>
              <td>$d->upload_time</td>
              <td>".anchor('Data_upload/edit/'.  $d->data, 'EDIT')."
                  ".anchor('Data_upload/hapus/'. $d->data, 'HAPUS')."</td>
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
