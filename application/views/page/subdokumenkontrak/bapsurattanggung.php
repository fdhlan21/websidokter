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
                    <input type="number" class="form-control" id="nomor" name="nomor" required>
                </div>
                <div class="form-group">
                    <label for="hari">Pada Hari</label>
                    <select class="form-control" id="hari" name="hari" required>
                        <option value="">Pilih Hari</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <select class="form-control" id="tanggal" name="tanggal" required></select>
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <select class="form-control" id="bulan" name="bulan" required>
                        <option value="">Pilih Bulan</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <select class="form-control" id="tahun" name="tahun" required></select>
                </div>
                <div class="form-group">
                    <label for="nama_kpa">Nama KPA</label>
                    <input type="text" class="form-control" id="nama_kpa" name="nama_kpa" required>
                </div>
                <div class="form-group">
                    <label for="nama_pemilik_rekanan">Nama Pemilik Rekanan</label>
                    <input type="number" class="form-control" id="nama_pemilik_rekanan" name="nama_pemilik_rekanan" required>
                </div>
                <div class="form-group">
                    <label for="jabatan_dalam_badan_usaha">Jabatan Dalam Badan Usaha</label>
                    <input type="number" class="form-control" id="jabatan_dalam_badan_usaha" name="jabatan_dalam_badan_usaha" required>
                </div>
                <div class="form-group">
                    <label for="nama_badan_usaha_rekanan">Nama Badan Usaha Rekanan</label>
                    <input type="date" class="form-control" id="nama_badan_usaha_rekanan" name="nama_badan_usaha_rekanan" required>
                </div>
                <div class="form-group">
                    <label for="alamat_lokasi_usaha">Alamat Lokasi Usaha</label>
                    <input type="text" class="form-control" id="alamat_lokasi_usaha" name="nama_belanja" required>
                </div>

                <div class="form-group">
                    <label for="nama_belanja">Nama Belanja</label>
                    <input type="number" class="form-control" id="nama_belanja" name="nama_belanja" required>
                </div>

                <div class="form-group">
                    <label for="nama_sub_kegiatan">Nama Sub Kegiatan</label>
                    <input type="number" class="form-control" id="nama_sub_kegiatan" name="nama_sub_kegiatan" required>
                </div>

                <div class="form-group">
                    <label for="nominal_belanja">Nominal Belanja</label>
                    <input type="text" class="form-control" id="nominal_belanja" name="nominal_belanja" required>
                </div>

                <div class="form-group">
                    <label for="terbilang_nominal_belanja">Terbilang Nominal Belanja</label>
                    <input type="number" class="form-control" id="terbilang_nominal_belanja" name="terbilang_nominal_belanja" required>
                </div>

                <div class="form-group">
                    <label for="nama_bank_rekanan_norek">Nama Bank Rekanan No.Rek</label>
                    <input type="number" class="form-control" id="nama_bank_rekanan_norek" name="nama_bank_rekanan_norek" required>
                </div>
                

                <div class="form-group">
                    <label for="no_rek_rekanan_nama_rekening">No.Rek Rekanan an.Nama Rekening</label>
                    <input type="number" class="form-control" id="no_rek_rekanan_nama_rekening" name="no_rek_rekanan_nama_rekening" required>
                </div>
                

                <div class="form-group">
                    <label for="nip_kpanama_kpa_ppk">Nama KPA</label>
                    <input type="number" class="form-control" id="nama_kpa" name="nama_kpa" required>
                </div>


                
                <div class="form-group">
                    <label for="nip_kpa">NIP KPA</label>
                    <input type="number" class="form-control" id="nip_kpa" name="nip_kpa" required>
                </div>

                <div class="form-group">
                    <label for="nama_pemilik_badan_usaha">Nama Pemilik Badan Usaha</label>
                    <input type="number" class="form-control" id="nama_pemilik_badan_usaha" name="nama_pemilik_badan_usaha" required>
                </div>
                
                
                
                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NAVIGATE KE bapsurattanggungdua.PHP -->
            </form>
        </div>
    </div>
</div>

<script>
  // Mengisi dropdown tahun
  const yearSelect = document.getElementById('tahun');
  const startYear = 1900;
  const endYear = new Date().getFullYear(); // Tahun sekarang

  for (let year = startYear; year <= endYear; year++) {
    const option = document.createElement('option');
    option.value = year;
    option.text = year;
    yearSelect.appendChild(option);
  }

  // Fungsi untuk mengisi tanggal dengan 31 hari secara default
  function populateDefaultDates() {
    const dateSelect = document.getElementById('tanggal');
    dateSelect.innerHTML = '<option value="">Pilih Tanggal</option>';
    for (let day = 1; day <= 31; day++) {
      const option = document.createElement('option');
      option.value = day;
      option.text = day;
      dateSelect.appendChild(option);
    }
  }

  // Fungsi untuk menyesuaikan jumlah hari sesuai dengan bulan dan tahun yang dipilih
  function populateDates() {
    const monthSelect = document.getElementById('bulan');
    const dateSelect = document.getElementById('tanggal');
    const selectedMonth = parseInt(monthSelect.value);
    const selectedYear = parseInt(yearSelect.value);

    if (!isNaN(selectedMonth) && !isNaN(selectedYear)) {
      const daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();
      dateSelect.innerHTML = '<option value="">Pilih Tanggal</option>';
      for (let day = 1; day <= daysInMonth; day++) {
        const option = document.createElement('option');
        option.value = day;
        option.text = day;
        dateSelect.appendChild(option);
      }
    }
  }

  // Mengisi dropdown tanggal ketika bulan atau tahun berubah
  document.getElementById('bulan').addEventListener('change', populateDates);
  document.getElementById('tahun').addEventListener('change', populateDates);

  // Mengisi dropdown tanggal saat halaman pertama kali dimuat
  window.onload = populateDefaultDates;
</script>
