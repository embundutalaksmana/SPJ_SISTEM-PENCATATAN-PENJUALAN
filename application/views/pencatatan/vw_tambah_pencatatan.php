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
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input name="tanggal" type="Date" value="<?= set_value('tanggal'); ?>" class="form-control" id="tanggal" placeholder="Tanggal">
							<?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="id_barang">Barang</label>
							<select name="id_barang" id="id_barang" value="<?= set_value('id_barang')?>" class="form-control">
                            <option value="">Pilih Barang</option>
                            <?php foreach ($barang as $b) : ?>
                            <option value="<?= $b['id']; ?>"><?= $b['nama_barang']; ?></option>
                            <?php endforeach; ?>
                            </select>
							<?= form_error('barang', '<small class="text-danger pl-3">', '</small>'); ?>
						</div> <!-- Input dengan Dropdown -->
						<!-- <div class="form-group">
							<label for="id_barang">Barang</label>
							<input name="id_barang" type="text" value="<?= set_value('id_barang'); ?>" class="form-control" id="id_barang" placeholder="id_barang">
							<?= form_error('id_barang', '<small class="text-danger pl-3">', '</small>'); ?>
						</div> INPUT MANUAL -->
						<div class="form-group">
							<label for="jumlah">Jumlah</label>
							<input name="jumlah" type="text" value="<?= set_value('jumlah'); ?>" class="form-control" id="jumlah" placeholder="jumlah">
							<?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="nama_pembeli">Nama  Pembeli</label>
							<input name="nama_pembeli" type="text" value="<?= set_value('nama_pembeli'); ?>" class="form-control" id="nama_pembeli" placeholder="Nama Pembeli...">
							<?= form_error('nama_pembeli', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="total_bayar">Total Bayar</label>
							<input name="total_bayar" type="text" value="<?= set_value('total_bayar'); ?>" class="form-control" id="total_bayar" placeholder="Total Bayar...">
							<?= form_error('total_bayar', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input name="alamat" type="text" value="<?= set_value('alamat'); ?>" class="form-control" id="alamat" placeholder="Alamat...">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
                            <label for="pembayaran">Pembayaran</label>
                            <select name="pembayaran" id="pembayaran" value="<?= set_value('pembayaran')?>" class="form-control">
                            <option value="">Pembayaran</option>
                            <option value="Tunai">Tunai</option>
                            <option value="BRI 0111-01-058xxx-50-7">BRI 0111-01-058xxx-50-7</option>
                            </select>
                            <?= form_error('pembayaran','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
						<div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" value="<?= set_value('status')?>" class="form-control">
                            <option value="">Status</option>
                            <option value="PO">PO</option>
                            <option value="Dalam Pengiriman">Dalam Pengiriman</option>
							<option value="Selesai">Selesai</option>
                            </select>
                            <?= form_error('pembayaran','<small class="text-danger p1-3">','</small>'); ?>
                        </div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Catatan</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>
