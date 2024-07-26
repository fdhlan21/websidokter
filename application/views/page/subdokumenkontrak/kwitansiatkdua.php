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
                    <label for="jumlah">TA</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                </div>
              
                <div class="form-group">
                    <label for="terbilang">Kode Rekening</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>

                <div class="form-group">
                    <label for="terbilang">Jumlah Uang</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                
                <div class="form-group">
                    <label for="terbilang">Untuk Pembayaran</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">Nama Badan Usaaha</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">Nama Pemilik Badan Usaha</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">Jabatan Dalam Usaha</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">NAMA KPA</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">NIP KPA</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">Nama PPTK</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">NIP PPTK</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">Nama Bendahara</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                <div class="form-group">
                    <label for="terbilang">NIP Bendahara</label>
                    <input type="text" class="form-control" id="terbilang" name="terbilang" required>
                </div>
                
                
                
                
                
                
                
                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
                <!-- NAVIGATE KE kwitansiatkdua.PHP -->
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