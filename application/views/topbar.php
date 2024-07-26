<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white" style="border-bottom: 5px solid #4682A9;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" id="brandText">
                    <div class="ml-auto" id="logoImage">
                        <img src="assets/img/icon/logosidokter.png" height="55px" alt="Secondary Logo">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-flex-start" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'Dashboard' ? 'active' : '' ?>" href="<?= base_url('Dashboard'); ?>" style="font-family: 'Poppins', sans-serif;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'SubDokumenKontrak' ? 'active' : '' ?>" href="<?= base_url('SubDokumenKontrak'); ?>" style="font-family: 'Poppins', sans-serif;">Input Dokumen Kontrak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary mx-2 <?= $this->uri->segment(1) == 'PosyanduBalita' ? 'active' : '' ?>" href="<?= base_url('PosyanduBalita'); ?>" style="font-family: 'Poppins', sans-serif;">Laporan</a>
                        </li>
                    </ul>
                </div>
                <!-- Topbar Navbar -->
            </div>

            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <label>Hallo selamat datang,</label>
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="color: #4682A9; font-family: 'Alata',sans-serif;"><?= $memberadmin['username']; ?></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-user-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <style>
            .navbar-menu {}

            .btn-outline-success:hover,
            .btn-outline-success:focus,
            .btn-outline-success.active {
                color: white;
            }

            /* Tambahkan CSS ini untuk menghilangkan warna background pada dropdown saat di-hover */
            .nav-item.dropdown .dropdown-menu .dropdown-item:hover,
            .nav-item.dropdown .dropdown-menu .dropdown-item:focus,
            .nav-item.dropdown .dropdown-menu .dropdown-item:active {
                background-color: transparent !important;
                color: inherit !important; /* Pastikan warna teks tetap sesuai dengan tema */
            }
        </style>

<script>
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        const brandText = document.getElementById('brandText');
        const logoImage = document.getElementById('logoImage');
        if (brandText.style.display === 'none') {
            brandText.style.display = 'block';
            logoImage.style.display = 'block';
        } else {
            brandText.style.display = 'none';
            logoImage.style.display = 'none';
        }
    });

    document.addEventListener('click', function (event) {
        const isClickInside = document.querySelector('.navbar-toggler').contains(event.target);
        if (!isClickInside) {
            document.getElementById('brandText').style.display = 'block';
            document.getElementById('logoImage').style.display = 'block';
        }
    });
</script>
