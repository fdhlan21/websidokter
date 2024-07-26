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
                    <label for="nama_badan_usaha_rekanan">Nama Badan Usaha Rekanan</label>
                    <input type="text" class="form-control" id="nama_badan_usaha_rekanan" name="nama_badan_usaha_rekanan" required>
                </div>
                <div class="form-group">
                    <label for="nama_rekanan">Nama Rekanan</label>
                    <input type="text" class="form-control" id="nama_rekanan" name="nama_rekanan" required>
                </div>
                <div class="form-group">
                    <label for="jabatan_dalam_rekanan">Jabatan dalam Rekanan</label>
                    <input type="text" class="form-control" id="jabatan_dalam_rekanan" name="jabatan_dalam_rekanan" required>
                </div>
                <div class="form-group">
                    <label for="nama_kpa_selaku_pkk">Nama KPA selaku PPK</label>
                    <input type="text" class="form-control" id="nama_kpa_selaku_pkk" name="nama_kpa_selaku_pkk" required>
                </div>
                <div class="form-group">
                    <label for="nip_kpa_pkk">NIP.KPA selaku PPK</label>
                    <input type="text" class="form-control" id="nip_kpa_pkk" name="nip_kpa_pkk" required>
                </div>


                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NAVIGATE KE BASERAHTIGA.PHP -->
            </form>
        </div>
    </div>
</div>
