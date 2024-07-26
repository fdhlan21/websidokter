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
                    <label for="opd">Nama OPD (Judul)</label>
                    <input type="text" class="form-control" id="opd" name="opd" required>
                </div>
                <div class="form-group">
                    <label for="gedung">Gedung</label>
                    <input type="text" class="form-control" id="gedung" name="sumber_dana" required>
                </div>
                <div class="form-group">
                    <label for="lantai">Lantai</label>
                    <input type="text" class="form-control" id="lantai" name="lantai" required>
                </div>
                <div class="form-group">
                    <label for="telepon_opd">Telepon OPD</label>
                    <input type="number" class="form-control" id="telepon_opd" name="telepon_opd" required>
                </div>
                <div class="form-group">
                    <label for="emial_opd">Email OPD</label>
                    <input type="email" class="form-control" id="emial_opd" name="emial_opd" required>
                </div>
                <div class="form-group">
                    <label for="webmain_opd">Webmail OPD</label>
                    <input type="text" class="form-control" id="webmain_opd" name="webmain_opd" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
                    <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal_pengajuan" required>
                </div>
                <div class="form-group">
                    <label for="nomor_kegiatan">Nomor Register</label>
                    <input type="number" class="form-control" id="nomor_kegiatan" name="jumlah_rumah_positif" required>
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
                    <label for="nama_opd">Nama OPD</label>
                    <input type="text" class="form-control" id="nama_opd" name="nama_opd" required>
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang/Jasa</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
                </div>

                <div class="form-group">
                    <label for="dpa_ddpa_dpergeseran">DPA/DPPA/Dpergeseran</label>
                    <input type="text" class="form-control" id="dpa_ddpa_dpergeseran" name="dpa_ddpa_dpergeseran" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun  </label>
                    <input type="date" class="form-control" id="tahun" name="tahun" required>
                </div>

                <div class="form-group">
                    <label for="nama_pptk">Nama PPTK</label>
                    <input type="text" class="form-control" id="nama_pptk" name="phh2" required>
                </div>

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" required>
                </div>


                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NAVIGATE KE DINAS.PHP -->
            </form>
        </div>
    </div>
</div>
