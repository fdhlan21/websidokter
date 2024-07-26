<!-- Begin Page Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= base_url('/Dashboard'); ?>" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= base_url('/jumantik'); ?>" style="color: black;">Dokumen Kontrak</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Nota Dinas PPTK ke PA KPA</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <a href="<?= base_url('/subdokumenkontrak'); ?>" class="btn bg-secondary">
                <i class="fas fa-fw fa-arrow-left" style="color: #ffffff;"></i>
                <span style="color: #ffffff; padding-left: 10px;">Kembali</span>
            </a>
        </div>

        <div class="card-body">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nomor">Nomor</label>
                    <input type="text" class="form-control" id="nomor" name="nomor" required>
                </div>
                <div class="form-group">
                    <label for="tangal">Tanggal</label>
                    <input type="text" class="form-control" id="tangal" name="tangal" required>
                </div>
                <div class="form-group">
                    <label for="nama_belanja">Nama Belanja</label>
                    <input type="text" class="form-control" id="nama_belanja" name="nama_belanja" required>
                </div>
                <div class="form-group">
                    <label for="item_belanja">Item Belanja</label>
                    <input type="text" class="form-control" id="item_belanja" name="item_belanja" required>
                </div>
                <div class="form-group">
                    <label for="vol_belanja">Vol Belanja</label>
                    <input type="text" class="form-control" id="vol_belanja" name="vol_belanja" required>
                </div>
                <div class="form-group">
                    <label for="satuan_belanja">Satuan Belanja</label>
                    <input type="text" class="form-control" id="satuan_belanja" name="satuan_belanja" required>
                </div>
                <div class="form-group">
                    <label for="spesifikasi_kelengkapan">Spesifikasi/Kelengkapan</label>
                    <input type="text" class="form-control" id="spesifikasi_kelengkapan" name="spesifikasi_kelengkapan" required>
                </div>
                <div class="form-group">
                    <label for="harga_satuan_belanja">Harga Satuan Belanja</label>
                    <input type="text" class="form-control" id="harga_satuan_belanja" name="harga_satuan_belanja" required>
                </div>
                <div class="form-group">
                    <label for="harga_total_belanja">Total Harga Belanja</label>
                    <input type="text" class="form-control" id="harga_total_belanja" name="harga_total_belanja" required>
                </div>
                <div class="form-group">
                    <label for="harga_sudah_termasuk_pajak_belum_pajak">Harga Sudah Termasuk Pajak/Belum Pajak</label>
                    <input type="text" class="form-control" id="harga_sudah_termasuk_pajak_belum_pajak" name="harga_sudah_termasuk_pajak_belum_pajak" required>
                </div>
                <div class="form-group">
                    <label for="total_harga">Total Harga</label>
                    <input type="text" class="form-control" id="total_harga" name="total_harga" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_harga_seluruh_belanja">Jumlah Harga Seluruh Belanja</label>
                    <input type="text" class="form-control" id="jumlah_harga_seluruh_belanja" name="jumlah_harga_seluruh_belanja" required>
                </div>

                <div class="form-group">
                    <label for="hari">Hari</label>
                    <input type="text" class="form-control" id="hari" name="hari" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="kantor_bagian_organisasi">Kantor Bagian Organisasi</label>
                    <input type="text" class="form-control" id="kantor_bagian_organisasi" name="kantor_bagian_organisasi" required>
                </div>



                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NAVIGATE KE BASERAHEMPAT.PHP -->
            </form>
        </div>
    </div>
</div>
