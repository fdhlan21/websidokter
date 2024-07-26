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
                    <label for="nama_register">Nama Register </label>
                    <input type="text" class="form-control" id="nama_register" name="nama_register" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_note_dinas">Tanggal Nota Dinas</label>
                    <input type="date" class="form-control" id="tanggal_note_dinas" name="tanggal_note_dinas" required>
                </div>

                <div>
                <h2>Data Umum Dokumen Persiapan Pengadaan Barang/Jasa</h2>
                </div>
                <div class="form-group">
                    <label for="nama_program">Nama Program</label>
                    <input type="text" class="form-control" id="nama_program" name="nama_program" required>
                </div>
                <div class="form-group">
                    <label for="nama_kegiatan">Nama  Kegiatan</label>
                    <input type="text" class="form-control" id="nama_sub_kegiatan" name="nama_sub_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="nama_sub_kegiatan">Nama Sub Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="kode_rekening">Kode Rekening</label>
                    <input type="number" class="form-control" id="kode_rekening" name="kode_rekening" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_dpa_dppa">Tanggal DPA/DPPA</label>
                    <input type="date" class="form-control" id="tanggal_dpa_dppa" name="tanggal_dpa_dppa" required>
                </div>
                <div class="form-group">
                    <label for="nama_paket_pekerjaan">Nama Paket Pekerjaan</label>
                    <input type="text" class="form-control" id="nama_paket_pekerjaan" name="nama_paket_pekerjaan" required>
                </div>

                <h4>Total Pagu Pekerjaan</h4>
                <div class="p-4">
                    <div class="form-group">
                        <label for="total_pagu_pekerjaan_nominal">Nominal</label>
                        <input type="number" class="form-control" id="total_pagu_pekerjaan_nominal" name="total_pagu_pekerjaan_nominal" required>
                    </div>
                    <div class="form-group">
                        <label for="total_pagu_pekerjaan_terbilang">Terbilang</label>
                        <input type="number" class="form-control" id="total_pagu_pekerjaan_terbilang" name="total_pagu_pekerjaan_terbilang" required>
                    </div>

                </div>

                <h4>Pagu Pekerjaan Sesuai Kebutuhan</h4>
                <div class="p-4">
                    <div class="form-group">
                        <label for="pagu_pekerjaan_sesuai_kebutuhan_nominal">Nominal</label>
                        <input type="number" class="form-control" id="pagu_pekerjaan_sesuai_kebutuhan_nominal" name="pagu_pekerjaan_sesuai_kebutuhan_nominal" required>
                    </div>
    
                    <div class="form-group">
                        <label for="pagu_pekerjaan_sesuai_kebutuhan_terbilang">Terbilang</label>
                        <input type="text" class="form-control" id="pagu_pekerjaan_sesuai_kebutuhan_terbilang" name="pagu_pekerjaan_sesuai_kebutuhan_terbilang" required>
                    </div>
                </div>

                <h4>Sisa Pagu Anggaran</h4>
                <div class="p-4">
                    <div class="form-group">
                        <label for="sisa_pagu_anggaran_tanggal">Tanggal</label>
                        <input type="text" class="form-control" id="sisa_pagu_anggaran_tanggal" name="sisa_pagu_anggaran_tanggal" required>
                    </div>

                    <div class="form-group">
                        <label for="sisa_pagu_anggaran_nominal">Nominal</label>
                        <input type="text" class="form-control" id="sisa_pagu_anggaran_nominal" name="sisa_pagu_anggaran_nominal" required>
                    </div>

                    <div class="form-group">
                        <label for="sisa_pagu_anggaran_terbilang">Terbilang</label>
                        <input type="text" class="form-control" id="sisa_pagu_anggaran_terbilang" name="sisa_pagu_anggaran_terbilang" required>
                    </div>
    
                    <div>
                        <h2>Identifikasi Kebutuhan Barang/Jasa</h2>
                    </div>
                </div>

                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_uraian">Uraian Pekerjaan </label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_uraian" name="identifikasi_kebutuhan_barang_uraian" required>
                </div>

                <div class="form-group">
                    <label for="sisa_pagu_anggaran_lokasi_pekerjaan">Lokasi Pekerjaan</label>
                    <input type="text" class="form-control" id="sisa_pagu_anggaran_lokasi_pekerjaan" name="sisa_pagu_anggaran_lokasi_pekerjaan" required>
                </div>

                <h2>Identifikasi Kebutuhan Barang/Jasa</h2>
                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_nama_barang">Nama Barang/Jasa</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_nama_barang" name="identifikasi_kebutuhan_barang_nama_barang" required>
                </div>

                
                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_manfaat_pengadaan_barang">Manfaat Pengadaan Barang/Jasa</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_manfaat_pengadaan_barang" name="identifikasi_kebutuhan_barang_manfaat_pengadaan_barang" required>
                </div>

                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_fungsi_pengadaan_barang">Fungsi Pengadaan Barang/Jasa</label>
                    <input type="time" class="form-control" id="identifikasi_kebutuhan_barang_fungsi_pengadaan_barang" name="identifikasi_kebutuhan_barang_fungsi_pengadaan_barang" required>
                </div>

                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_pihak_pengguna_dan_pengelola">Pihak Pengguna dan Pengelola</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_pihak_pengguna_dan_pengelola" name="identifikasi_kebutuhan_barang_pihak_pengguna_dan_pengelola" required>
                </div>

                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_perkiraan_waktu_proses_pengadaan_barang">Perkiraan Waktu Proses Pengadaan Barang/Jasa</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_perkiraan_waktu_proses_pengadaan_barang" name="identifikasi_kebutuhan_barang_perkiraan_waktu_proses_pengadaan_barang" required>
                </div>

                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_tingkat_prioritas_kebutuhan_barang">Tingkat Prioritas Kebutuhan Barang/Jasa</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_tingkat_prioritas_kebutuhan_barang" name="identifikasi_kebutuhan_barang_tingkat_prioritas_kebutuhan_barang" required>
                </div>
                
                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_spesifikasi_teknis_umum">Spesifikasi Teknis Umum</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_spesifikasi_teknis_umum" name="identifikasi_kebutuhan_barang_spesifikasi_teknis_umum" required>
                </div>

       
                <div class="form-group">
                    <label for="identifikasi_kebutuhan_barang_analisa_pasar">Analisa Pasar</label>
                    <input type="text" class="form-control" id="identifikasi_kebutuhan_barang_analisa_pasar" name="identifikasi_kebutuhan_barang_analisa_pasar" required>
                </div>


                <h2>Daftar Kebutuhan  Barang dan Referensi Harga</h2>
                <div class="container-kebutuhan-barang">
               
                 <!-- Kebutuhan Barang/Jasa -->
                 <div class="form-group">
                    <label  for="daftar_kebutuhan_barang_dan_referensi_harga_kebutuhan_barang">Kebutuhan Barang/Jasa</label>
                    <input type="text" class="form-control" id="nama_teknis_dua" name="nama_teknis_dua" required>
                 </div>

                  <!-- Spesifikasi -->
                  <div class="form-group">
                    <label for="daftar_kebutuhan_barang_dan_referensi_harga_spesifikasi">Spesifikasi</label>
                    <input type="text" class="form-control" id="daftar_kebutuhan_barang_dan_referensi_harga_spesifikasi" name="daftar_kebutuhan_barang_dan_referensi_harga_spesifikasi" required>
                 </div>

                  <!-- Jumlah -->
                  <div class="form-group">
                    <label for="daftar_kebutuhan_barang_dan_referensi_harga_jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="daftar_kebutuhan_barang_dan_referensi_harga_jumlah" name="daftar_kebutuhan_barang_dan_referensi_harga_jumlah" required>
                 </div>

                  <!-- Satuan -->
                  <div class="form-group">
                    <label for="daftar_kebutuhan_barang_dan_referensi_harga_satuan">Satuan</label>
                    <input type="text" class="form-control" id="daftar_kebutuhan_barang_dan_referensi_harga_satuan" name="daftar_kebutuhan_barang_dan_referensi_harga_satuan" required>
                 </div>

                  <!-- Update Harga Satuan -->
                  <div class="form-group">
                    <label for="daftar_kebutuhan_barang_dan_referensi_harga_update_harga_satuan">Update Harga Satuan</label>
                    <input type="text" class="form-control" id="daftar_kebutuhan_barang_dan_referensi_harga_update_harga_satuan" name="daftar_kebutuhan_barang_dan_referensi_harga_update_harga_satuan" required>
                 </div>

                  <!-- Update  Harga Satuan -->
                  <div class="form-group">
                    <label for="daftar_kebutuhan_barang_dan_referensi_harga_update_harga_satuan">Update Harga Satuan</label>
                    <input type="text" class="form-control" id="nama_teknis_dua" name="nama_teknis_dua" required>
                 </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>

                
                <div class="form-group">
                    <label for="sumber_update_harga_satuan">Sumber Update Harga Satuan</label>
                    <input type="text" class="form-control" id="sumber_update_harga_satuan" name="sumber_update_harga_satuan" required>
                </div>

                <h4>Staff Teknis 1</h4>
                <div class="p-4">
                <div class="form-group">
                    <label for="staff_teknis_satu_nama">Nama</label>
                    <input type="text" class="form-control" id="staff_teknis_satu_nama" name="staff_teknis_satu_nama" required>
                </div>

                <div class="form-group">
                    <label for="staff_teknis_satu_nip">NIP</label>
                    <input type="text" class="form-control" id="staff_teknis_satu_nip" name="staff_teknis_satu_nip" required>
                </div>
                </div>

                
                <h4>Staff Teknis 2</h4>
                <div class="p-4">
                <div class="form-group">
                    <label for="staff_teknis_dua">Nama</label>
                    <input type="text" class="form-control" id="staff_teknis_dua" name="staff_teknis_dua" required>
                </div>

                <div class="form-group">
                    <label for="staff_teknis_dua_nip">NIP</label>
                    <input type="text" class="form-control" id="staff_teknis_dua_nip" name="staff_teknis_dua_nip" required>
                </div>
                </div>

                <div class="form-group">
                    <label for="nama_opd">Nama OPD</label>
                    <input type="text" class="form-control" id="staff_teknis_dua_nama_opd" name="staff_teknis_dua_nama_opd" required>
                </div>

                
                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>

                <div class="form-group">
                    <label for="nama_pptk">Nama PPTK</label>
                    <input type="text" class="form-control" id="nama_pptk" name="nama_pptk" required>
                </div>
              

                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" required>
                </div>
              
              
              
              




                <button type="submit" class="form-control btn btn-primary">Selanjutnya</button>
            
            </form>
        </div>
    </div>
</div>
