<div class="mt-3 container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

<div class="row">
    <div class="col-lg-6 mb-3">
        <button type="button" class="btn btn-primary btnTambah" data-toggle="modal" data-target="#forModal">Tambah Data Mahasiswa</button>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" id="cari" autocomplete="off">Cari</button>
                </div>
            </div>
        </form>
    
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item"> 
                    <?= $mhs["nama"]; ?> 
                    <a href="<?= BASEURL;?>/mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
                    <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success float-right ml-1 btnUbah" data-toggle="modal" data-target="#forModal" data-id="<?= $mhs['id'];?>">Ubah</a>
                    <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-info float-right ml-1">Detail</a>
                </li>
                <?php endforeach; ?>
        </ul>
        
        
    </div>
</div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="forModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="forModalLabel"> Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div class="modal-body">
                <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
                <!-- //input hidden untuk id -->
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name ="nama">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" class="form-control" id="nim" name ="nim">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name ="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                    <option>Komputer dan Sistem Informasi</option>
                    <option>Ilmu Komputer</option>
                    <option>Teknologi Informasi</option>
                    <option>Teknik Informatika</option>
                    <option>Sistem Informasi</option>
                    <option>KOMSI</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
        </div>
    </div>
    </div>