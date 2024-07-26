<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Tambahkan link ke CSS eksternal untuk gaya tambahan -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        /* Gaya CSS tambahan */
        body {
            background-image: url('assets/img/icon/bgutamadua.png'); /* Ganti dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .login-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(255, 255, 255, 0.8); /* Background putih dengan sedikit transparansi */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .card-body {
            width: 100%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-block {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-block:hover {
            background-color: #2980b9;
        }

        .logo img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 10px;
            }

            .login-card {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 10px;
             
            }

            .login-card {
                padding: 10px;
            }

            .logo img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            align-items:center;
            align-self:center;
        }

        }

        @media (min-width: 769px) {
            .login-card {
                max-width: 500px;
                padding: 30px;
            }

            .form-control {
                font-size: 16px;
                padding: 15px;
            }

            .btn-block {
                font-size: 16px;
                padding: 15px;
            }

            .logo img {
                max-width: 150px;
                height: auto;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <!-- DIV UNTUK LOGO -->
            <div class="logo">
                <img src="assets/img/icon/logosidokter.png" alt="Logo Si Doktor">
            </div>
            <div class="login-card animate__animated animate__fadeInDown">
                <div class="card-body">
                    <h2 style="font-size: 20px; font-weight: bold; text-align: center; color: #3498db;">SI Dokter</h2>
                    <p style="text-align: center; color: #3498db;">Sistem Informasi Dokumen Keuangan Perkantoran</p>
                    <form class="user" method="post" action="<?= base_url('login'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <small class="text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <small class="text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block" type="submit">Masuk</button>
                        </div>
                        <div class="form-group">
                            <p style="text-align: center; color: #aaa;">Lupa Password</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
