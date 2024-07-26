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
                    <label for="year">Tahun</label>
                    <select class="form-control" id="year" name="year"></select>
                </div>
                <div class="form-group">
                    <label for="nama_kpa_selaku_pkk">Nama KPA selaku PPK</label>
                    <input type="text" class="form-control" id="nama_kpa_selaku_pkk" name="nama_kpa_selaku_pkk" required>
                </div>
                <div class="form-group">
                    <label for="nip_kpa_ppk">NIP KPA selaku PPK</label>
                    <input type="number" class="form-control" id="nip_kpa_ppk" name="nip_kpa_ppk" required>
                </div>
                <div class="form-group">
                    <label for="nama_pengurus_barang">Nama Pengurus Barang</label>
                    <input type="text" class="form-control" id="nama_pengurus_barang" name="nama_pengurus_barang" required>
                </div>
                <div class="form-group">
                    <label for="nip_pengurus_barang">NIP Pengurus Barang</label>
                    <input type="number" class="form-control" id="nip_pengurus_barang" name="nip_pengurus_barang" required>
                </div>
                <div class="form-group">
                    <label for="nomor_kontrak">Nomor Kontrak</label>
                    <input type="number" class="form-control" id="nomor_kontrak" name="nomor_kontrak" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_kontrak">Tanggal Kontrak</label>
                    <input type="date" class="form-control" id="tanggal_kontrak" name="tanggal_kontrak" required>
                </div>
                <div class="form-group">
                    <label for="nama_belajang">Nama Belanja</label>
                    <input type="text" class="form-control" id="nama_belajang" name="nama_belajang" required>
                </div>

                <div class="form-group">
                    <label for="nomor_pengurus_barang">Nomor Pengurus Barang</label>
                    <input type="number" class="form-control" id="nomor_pengurus_barang" name="nomor_pengurus_barang" required>
                </div>

                <div class="form-group">
                    <label for="nip_pengurus_barang">NIP. NIP Pengurus Barang</label>
                    <input type="number" class="form-control" id="date" name="date"></input>
                </div>

                <div class="form-group">
                    <label for="nama_kpa_selaku_ppk">Nama KPA selaku PPK</label>
                    <input type="text" class="form-control" id="nama_kpa_selaku_ppk" name="nama_kpa_selaku_ppk"></input>
                </div>

                
                <div class="form-group">
                    <label for="nip_kpa_ppk">NIP KPA selaku PPK</label>
                    <input type="number" class="form-control" id="nip_kpa_ppk" name="nip_kpa_ppk"></input>
                </div>
                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NAVIGATE KE BAPENYERAHANDUA.PHP -->
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
