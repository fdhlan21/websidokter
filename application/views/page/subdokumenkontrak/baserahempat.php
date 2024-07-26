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
                    <label for="tahun">Tahun</label>
                  <select id="year" name="tahun" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="nama_kpa_selaku_pkk">Nama KPA selaku PPK</label>
                    <input type="text" class="form-control" id="nama_kpa_selaku_pkk" name="nama_kpa_selaku_pkk" required>
                </div>
                <div class="form-group">
                    <label for="nip_kpa_ppk">NIP. KPA selaku PPK</label>
                    <input type="text" class="form-control" id="nip_kpa_ppk" name="nip_kpa_ppk" required>
                </div>
               


                <button type="submit" class="form-control btn btn-primary">Simpan</button>

            </form>
        </div>
    </div>
</div>


<script>
  // Mengisi dropdown tahun
  const yearSelect = document.getElementById('year');
  const startYear = 1900;
  const endYear = new Date().getFullYear(); // Tahun sekarang

  for (let year = startYear; year <= endYear; year++) {
    const option = document.createElement('option');
    option.value = year;
    option.text = year;
    yearSelect.appendChild(option);
  }

  // Fungsi untuk mengisi tanggal sesuai dengan bulan dan tahun yang dipilih
  function populateDates() {
    const monthSelect = document.getElementById('bulan');
    const dateSelect = document.getElementById('date');
    const selectedMonth = parseInt(monthSelect.value);
    const selectedYear = parseInt(yearSelect.value);

    console.log('Selected Month:', selectedMonth);
    console.log('Selected Year:', selectedYear);

    if (!isNaN(selectedMonth) && !isNaN(selectedYear)) {
      const daysInMonth = new Date(selectedYear, selectedMonth, 0).getDate();

      console.log('Days in Month:', daysInMonth);

      // Menghapus semua opsi tanggal yang ada
      dateSelect.innerHTML = '<option value="">Pilih Tanggal</option>';

      // Menambahkan opsi tanggal sesuai jumlah hari dalam bulan yang dipilih
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
  document.getElementById('year').addEventListener('change', populateDates);

  // Mengisi dropdown tanggal saat halaman pertama kali dimuat
  window.onload = populateDates;
</script>
