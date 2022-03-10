<section class="content">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Users</h3>
  </div>
  <!-- /.box-header -->
  <p>
    &nbsp;  &nbsp;
  <a href="<?php echo base_url();?>index.php/manage_user/tambah" class="btn btn-primary">Tambah</a>
  </p>


  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>

        <th>Id username</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Status</th>
        <th>Action</th>

      </tr>
      </thead>
      <tbody>

        <?php
        foreach ($mng as $a) {
              echo "<tr>
              <td>$a->id_username </td>
              <td>$a->username</td>
              <td>$a->password </td>
              <td>$a->nama_lengkap</td>
              <td>$a->foto</td>
              <td>$a->stts</td>
              <td>".anchor('manage_user/edit/'.  $a->username, 'EDIT')."
                  ".anchor('manage_user/hapus/'. $a->username, 'HAPUS')."</td>

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
