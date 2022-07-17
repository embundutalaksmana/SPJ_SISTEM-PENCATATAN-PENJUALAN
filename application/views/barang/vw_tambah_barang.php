<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Barang</label>
                            <input type="text" name="nama_barang" value="<?= set_value('nama_barang')?>"  class="form-control" id="nama_barang" placeholder="Nama Barang...">
                            <?= form_error('nama','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" value="<?= set_value('keterangan')?>" class="form-control" id="keterangan" placeholder="Keterangan....">
                            <?= form_error('keterangan','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('barang') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Barang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>  