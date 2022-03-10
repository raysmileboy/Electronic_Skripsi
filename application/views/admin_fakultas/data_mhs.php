<script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content primary">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Form Tambah</h4>
      </div>
      <div class="modal-body">


        <!-- form start -->
            <?php echo form_open ('jurusan/simpan'); ?>

                <div class="form-group">
                  <label for="exampleInputEmail1">Nrp</label>
                  <input type="text" class="form-control" id="Nrp" name="Nrp"  placeholder="Nrp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">nama</label>
                  <input type="text" class="form-control" id="nama" name="nama"  placeholder="nama">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jurusan</label>
                  <input type="text" class="form-control" id="jurusan" name="jurusan"  placeholder="Jurusan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Fakultas</label>
                  <input type="text" class="form-control" id="fakultas" name="fakultas"  placeholder="Fakultas">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Angkatan</label>
                  <input type="text" class="form-control" id="angkatan" name="angkatan"  placeholder="Angkatan">
                </div>

                <div class="box-footer">
                  <button class="btn btn-primary" onclick="simpan()">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
<!-- /.box-body -->
        </div>
    </div>
  </div>
</div>
<!--end---->


<section class="content">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Mahasiswa</h3>
  </div>
  <!-- /.box-header -->
  <p>
    &nbsp;
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Tambah
    </button>
  </p>


  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>

        <th>No</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Fakultas</th>
        <th>Angkatan</th>
        <th>Action</th>

      </tr>
      </thead>
      <tbody>

        <?php
        $no = 1;
        foreach ($barang as $b) {
              echo "<tr>
              <td>".$no++."</td>
              <td>$b->Nrp  </td>
              <td>$b->nama </td>
              <td>$b->jurusan </td>
              <td>$b->fakultas </td>
              <td>$b->angkatan </td>
              <td><a>".anchor('jurusan/edit/'.  $b->Nrp, 'Edit', 'class="btn. fa fa-edit"')."
               ".anchor('jurusan/hapus/'. $b->Nrp, 'Hapus', 'class="btn. fa fa-trash"')."</a></td>

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
