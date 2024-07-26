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
            <li class="breadcrumb-item active" aria-current="page">Cover & Risalah Kontrak</li>
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
            <div>
                <h2 >Risalah Kontrak</h2>
            </div>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="tahun_anggaran">Tahun Anggaran</label>
                    <input type="date" class="form-control" id="tahun_anggaran" name="tahun_anggaran" required>
                </div>
                <div class="form-group">
                    <label for="sumber_dana">Sumber Dana</label>
                    <input type="text" class="form-control" id="sumber_dana" name="sumber_dana" required>
                </div>
                <div class="form-group">
                    <label for="kode_rekening">Kode Rekening</label>
                    <input type="number" class="form-control" id="kode_rekening" name="kode_rekening" required>
                </div>
                <div class="form-group">
                    <label for="nama_program">Nama Program</label>
                    <input type="text" class="form-control" id="nama_program" name="nama_program" required>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama  Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="nama_Sub_kegiatan">Nama Sub Kegiatan</label>
                    <input type="text" class="form-control" id="nama_Sub_kegiatan" name="nama_Sub_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="jenis_pesanan">Jenis Pesanan</label>
                    <input type="text" class="form-control" id="jenis_pesanan" name="jenis_pesanan" required>
                </div>
                <div class="form-group">
                    <label for="pelaksana_pekerjaan">Pelaksana Pekerjaan</label>
                    <input type="text" class="form-control" id="pelaksana_pekerjaan" name="jumlah_rumah_positif" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="npwp_pelaksana">NPWP Pelaksana</label>
                    <input type="text" class="form-control" id="npwp_pelaksana" name="kendala" required>
                </div>

                <div class="form-group">
                    <label for="rekening_bank">Rekening Bank</label>
                    <input type="number" class="form-control" id="rekening_bank" name="rekening_bank" required>
                </div>

                <div class="form-group">
                    <label for="tanggal_kontrak">Tanggal Kontrak</label>
                    <input type="date" class="form-control" id="tanggal_kontrak" name="tanggal_kontrak" required>
                </div>

                <div class="form-group">
                    <label for="nilai_kontrak">Nilai Kontrak</label>
                    <input type="number" class="form-control" id="nilai_kontrak" name="nilai_kontrak" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_ajuan_sekarang">Jumlah Ajuan Sekarang  </label>
                    <input type="number" class="form-control" id="jumlah_ajuan_sekarang" name="jumlah_ajuan_sekarang" required>
                </div>

                <div class="form-group">
                    <label for="phh2">PPh2 (1,5%)</label>
                    <input type="text" class="form-control" id="phh2" name="phh2" required>
                </div>

                <div class="form-group">
                    <label for="jenis_pengadaan">Jenis Pengadaan</label>
                    <input type="text" class="form-control" id="jenis_pengadaan" name="jenis_pengadaan" required>
                </div>

                <div class="form-group">
                    <label for="nama_pemilik_badan_usaha">Nama Pemilik Badan Usaha</label>
                    <input type="text" class="form-control" id="nama_pemilik_badan_usaha" name="nama_pemilik_badan_usaha" required>
                </div>

                <div class="form-group">
                    <label for="nomor_kpa">Nomor KPA</label>
                    <input type="number" class="form-control" id="nomor_kpa" name="nomor_kpa" required>
                </div>

                <div class="form-group">
                    <label for="nomor_ppk">Nomor PPK</label>
                    <input type="number" class="form-control" id="nomor_ppk" name="nomor_ppk" required>
                </div>

                <div class="form-group">
                    <label for="lokasi_pekerjaan">Lokasi Pekerjaan</label>
                    <input type="text" class="form-control" id="lokasi_pekerjaan" name="lokasi_pekerjaan" required>
                </div>

                <button type="submit" class="form-control btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
