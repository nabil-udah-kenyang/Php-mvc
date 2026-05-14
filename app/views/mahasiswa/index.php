<div class="container mt-3">

       <div class="row">
       <div class="col-lg-6"><?php Flasher::flash()  ?></div>
       </div>

     <div class="row mb-3">
     <div class="col-lg-6">

    <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
      + Tambah Data Mahasiswa  
     </button> 

      </div>
     </div>


      <div class="row mb-3">
     <div class="col-lg-6">

     <form action="<?= BASEURL ?>/Mahasiswa/cari" method="post">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
               <button class="btn btn-primary" type="submit" id="tombolcari">Cari</button>
         </div>
     </form>

      </div>
     </div>


 <div class="row">
   <div class="col-lg-6">

<!-- Button trigger modal -->

      <h3>Daftar Mahasiswa</h3>

<ul class="list-group">
  <?php foreach ($data['mhs'] as $mhs) { ?>
  <li class="list-group-item ">
      <?= $mhs['nama']; ?>
  <a href="<?= BASEURL; ?>/Mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge bg-danger " style="float: right;" onclick="return confirm('Apakah anda yakin untuk menghapus ?');">Hapus</a>
    <a href="<?= BASEURL; ?>/Mahasiswa/ubah/<?= $mhs['id'] ?>" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>" class="tampilModalUbah badge bg-warning me-2 " style="float: right;">Ubah</a>
  <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-primary me-2 " style="float: right;">Detail</a>
  </li>
  <?php } ?>
</ul>

   </div>
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <form action="<?= BASEURL ?>/Mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3 form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>


         <div class="mb-3 form-group">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>


          <div class="mb-3 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>

          <div class="form-group">
           <label for="jurusan" class="form-label">Jurusan</label>
           <select class="form-select" id="jurusan" name="jurusan" aria-label="Default select example">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Push up">Teknik Push up</option>
              <option value="Teknik ancaman">Teknik ancaman</option>
              <option value="Teknik mancing">Teknik mancing</option>

            </select>
          </div>
        
       


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
       </form> 
      
</div>
    </div>
  </div>
</div>
