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
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="nama_program">Nama Program</label>
                    <input type="text" class="form-control" id="nama_program" name="nama_program" required>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="nama_sub_kegiatan">Nama Sub Kegiatan</label>
                    <input type="text" class="form-control" id="nama_sub_kegiatan" name="nama_sub_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="nama_belanja">Nama Belanja</label>
                    <input type="text" class="form-control" id="nama_belanja" name="nama_belanja" required>
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
                    <label for="nilai_kontrak">Nilai Kontrak</label>
                    <input type="number" class="form-control" id="nilai_kontrak" name="nilai_kontrak" required>
                </div>
                <div class="form-group">
                    <label for="tahun_anggaran">Tahun Anggaran</label>
                    <input type="date" class="form-control" id="tahun_anggaran" name="tahun_anggaran" required>
                </div>
                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NANTI NAVIGATE KE RISALAH.PHP -->
            </form>
        </div>
    </div>
</div>
