
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
        
<div class="row">
<div class="col-lg-6">

<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="formModal">Add New Menu</a>
<table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
  <?php foreach ($menu as $m) :   ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $m['menu']; ?></td>
    <td>
    <a href="" class="badge badge-success badge-pills">Edit</a>
    <a href=""  class="badge badge-danger badge-pills">Delete</a>
    </td>
    </tr>
    <?php $i++;?>
  <?php endforeach; ?>
  </tbody>
</table>




</div>
</div>






        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="<?= BASEURL; ?>/siswa/tambah" method="POST">
        <input type="hidden" name="id" id="id"></input>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"> 
        </div>
        <div class="form-group">
            <label for="ni">Nomor Induk</label>
            <input type="text" class="form-control" id="ni" name="ni"> 
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas"> 
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button> 
        </form>
      </div>
    </div>
  </div>
</div>

