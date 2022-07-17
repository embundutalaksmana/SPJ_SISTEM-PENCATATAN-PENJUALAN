<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Pencatatan
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?= $pencatatan['id']; ?>">
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input name="tanggal" type="date" value="<?= $pencatatan['tanggal']; ?>" class="form-control" id="tanggal" placeholder="Tanggal">
							<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
                            <label for="id_barang">Barang</label>
                            <select name="id_barang" id="id_barang" class="form-control">
                            <?php foreach ($barang as $b) : ?>
                            <option value="<?= $b['id']; ?>" <?php if($pencatatan['id_barang'] = $b['id']){
                                echo "selected";
                            } ?>>
								<?= $b['nama_barang']; ?>
						   </option>
                            <?php endforeach; ?>
                            </select>
                            <?= form_error('id_barang','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
						<!-- <div class="form-group">
                            <label for="id_barang">Barang</label>
                            <input type="text" name="id_barang" value="<?= $pencatatan['id_barang']?>"  class="form-control" id="id_barang" placeholder="Barang...">
                            <?= form_error('id_barang','<small class="text-danger p1-3">','</small>'); ?>
                        </div> -->
						<div class="form-group">
							<label for="jumlah">Jumlah</label>
							<input name="jumlah" type="text" value="<?= $pencatatan['jumlah']; ?>" class="form-control" id="jumlah" placeholder="jumlah">
							<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="nama_pembeli">Nama Pembeli</label>
							<input name="nama_pembeli" type="text" value="<?= $pencatatan['nama_pembeli']; ?>" class="form-control" id="nama_pembeli" placeholder="Nama Pembeli...">
							<?= form_error('nama_pembeli', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="total_bayar">Total Bayar</label>
							<input name="total_bayar" type="text" value="<?= $pencatatan['total_bayar']; ?>" class="form-control" id="total_bayar" placeholder="Total Bayar...">
							<?= form_error('total_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input name="alamat" type="text" value="<?= $pencatatan['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat...">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
                            <label for="pembayaran">Pembayaran</label>
                            <select name="pembayaran" id="pembayaran" value="<?= $pencatatan['pembayaran']; ?>" class="form-control">
                            
                            <option value="Tunai">Tunai</option>
                            <option value="BRI 0111-01-058xxx-50-7">BRI 0111-01-058xxx-50-7</option>
                            </select>
                            <?= form_error('pembayaran','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
						<div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" value="<?= $pencatatan['status']; ?>" class="form-control">
        
                            <option value="PO">PO</option>
                            <option value="Dalam Pengiriman">Dalam Pengiriman</option>
							<option value="Selesai">Selesai</option>
                            </select>
                            <?= form_error('pembayaran','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Catatan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
