<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $barang['id']; ?>">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" value="<?= $barang['nama_barang']?>"  class="form-control" id="nama_barang" placeholder="Nama Barang...">
                            <?= form_error('nama_barang','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= $barang['keterangan']?>" class="form-control" id="keterangan" placeholder="Keterangan....">
                            <?= form_error('keterangan','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/barang/') . $barang['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar','<small class="text-danger p1-3">','</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('barang') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>  