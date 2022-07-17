<div class="container-fluid">
    <?= $this->session->flashdata('message');?>
    <div class="clearfix">
        <div class="float-left">
            <h1 class="b3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url() ?>Pencatatan/tambah" class="btn btn-info mb-2">Tambah Pencatatan</a>
        </div>
    </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacinf="0">
						<thead>
							<tr>
								<td>No</td>
								<td>Tanggal</td>
								<td>Nama Barang</td>
								<td>Jumlah</td>
								<td>Nama Pembeli</td>
								<td>Total Bayar</td>
								<td>Alamat</td>
								<td>Pembayaran</td>
								<td>Status</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($pencatatan as $us) : ?>
								<tr>
									<td> <?= $i; ?>.</td>
									<td><?= $us['tanggal']; ?></td>
									<td><?= $us['Nama_Barang']; ?></td>
									<td><?= $us['jumlah']; ?></td>
									<td><?= $us['nama_pembeli']; ?></td>
									<td><?= $us['total_bayar']; ?></td>
									<td><?= $us['alamat']; ?></td>
									<td><?= $us['pembayaran']; ?></td>
									<td><?= $us['status']; ?></td>
									<td>
										<a href="<?= base_url('Pencatatan/hapus/') . $us['id']; ?>" class="fas fa-edit">Hapus</a>
										<a href="<?= base_url('Pencatatan/edit/') . $us['id']; ?>" class=" fas fa-pencil-alt">Edit</a>
									</td>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
            </div>
        </div>
		<div class="float-right"> 
        	<a href="<?= base_url('Pencatatan/export') ?>" class="btn btn-primary btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export PDF</a> 
    	</div>
</div>
</div>
