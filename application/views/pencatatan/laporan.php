<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <title><?= $title ?></title> 
        <link href="<?= base_url('sb-admin') ?>/css/sb-admin-2.min.css" rel="stylesheet"> 
    </head> 
    <body> 
        <div class="row"> 
            <div class="col text-center"> 
                <h3 class="h3 text-dark"><?= $title ?></h3> 
            </div> 
        </div> 
        <hr> 
        <div class="row"> 
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <td>Tanggal</td> 
                        <td>Nama Pelanggan</td> 
                        <td>Nama Barang</td>
                        <td>Jumlah Pesanan</td>
                        <td>Pembayaran</td>
                        <td>Total</td> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php foreach ($jual as $p) : ?> 
                        <tr> 
                            <td><?= $p['tanggal'] ?></td> 
                            <td><?= $p['nama_pembeli'] ?></td>
                            <td><?= $p['Nama_Barang'] ?> </td>
                            <td><?= $p['jumlah'] ?> </td>
                            <td><?= $p['pembayaran'] ?> </td> 
                            <td>Rp <?= number_format($p['total_bayar'], 0, ',', '.') ?></td> 
                        </tr> 
                        <?php endforeach ?> 
                    </tbody> 
                </table> 
            </div> 
        </body> 
        </html>