<div class="mt-3 container">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>
<div class="row">
    <div class="col-lg-6">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#forModal">Tambah Data Mahasiswa</button>
</br>
</br>
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center"> 
                    <?= $mhs["nama"]; ?> 
                    <a href="<?= BASEURL;?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge badge-info ">Detail</a>
                </li>
                <?php endforeach; ?>
        </ul>
        
        
    </div>
</div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post">
            <div class="modal-body">
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