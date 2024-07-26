<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        .bg-gradient {
            background-color: #ffffff;
        }

        .slider {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .slider img {
            width: 70%;
            max-width: 550px;
        }

        .menu {
            display: flex;
            justify-content: center; /* Mengatur agar menu berada di tengah */
            gap: 20px; /* Mengatur jarak antara menu */
            padding: 20px;
        }

        .menu-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-color: #0072B4;
            border-radius: 10px;
            padding: 20px;
            width: 200px; /* Atur lebar menu */
            height: 100px; /* Atur tinggi menu */
            transition: transform 0.3s;
        }

        .menu-item:hover {
            transform: translateY(-5px);
        }

        .menu-item img {
            width: 66px; /* Adjust image width as needed */
            height: 66px; /* Adjust image height as needed */
            display: block; /* Make the image a block element */
            margin-bottom: 10px; /* Add spacing below the image */
        }

        .menu-item p {
            margin: 0;
            font-size: 14px;
            color: white;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .slider img {
                width: 100%;
                max-width: 400px;
            }

            .menu {
                flex-direction: column; /* Arrange menu items vertically on smaller screens */
                align-items: flex-start; /* Align menu items to the left on smaller screens */
            }

            .menu-item {
                width: 100%; /* Make each menu item take up full width on smaller screens */
                margin-bottom: 20px; /* Add spacing between menu items */
            }

            .menu-item p {
                font-size: 12px;
                top: 50px;
                font-weight: 600;
                color: '#0072B4';
            }
        }

        @media (max-width: 480px) {
            .slider img {
                width: 100%;
                max-width: 300px;
            }

            .menu {
                padding: 20px;
                display: grid;
                grid-template-columns: 2fr 1fr;
                gap: 20px;
                justify-content: center;
            }

            .menu-item {
                width: 139px;
            }

            .menu-item p {
                font-size: 12px;
                top: 50px;
                font-weight: 600;
                color: '#0072B4';
            }
        }

        @media print {
            @page {
                size: A5;
                margin: 0;
            }

            body {
                margin: 0;
            }
        }

        /* Styling untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 14px;
            text-align: left;
        }

        table th, table td {
            padding: 8px;
            border: 1px solid #ddd;
            vertical-align: top;
        }

        table th {
            background-color: #f2f2f2;
            font-weight: bold;
            text-align: center;
        }

        table td {
            text-align: center;
        }

        table td, table th {
            white-space: nowrap;
        }

        table thead th {
            background-color: #0072B4;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table-container {
            overflow-x: auto;
        }

        .form-group label {
            font-weight: 600;
            color: #0072B4;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary {
            background-color: #0072B4;
            border-color: #0072B4;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #005f9e;
            border-color: #005f9e;
        }

        .btn-floating {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border-radius: 50%;
            padding: 15px 20px;
            font-size: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .table-container {
            overflow-x: auto;
        }

        .table th, .table td {
            white-space: nowrap;
        }

        .breadcrumb {
            background-color: transparent;
            padding: 0;
            margin-bottom: 1rem;
        }

        .breadcrumb-item a {
            text-decoration: none;
            color: #0072B4;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        .card-header h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            color: #0072B4;
            margin: 0;
        }

        .subjudulbalita {
            font-size: 12px;
        }

        @media (max-width: 480px) {
            .btn-floating {
                padding: 10px 15px;
                font-size: 12px;
            }

            .btn-primary {
                padding: 5px 15px;
                font-size: 14px;
            }
        }

        .table-container {
            overflow-x: auto;
        }

        .table th, .table td {
            white-space: nowrap;
            text-align: center;
        }

        .btn-primary {
            background-color: #0072B4;
            border-color: #0072B4;
            border-radius: 30px;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #005f9e;
            border-color: #005f9e;
        }

        @media (max-width: 480px) {
            .btn-primary {
                padding: 5px 15px;
                font-size: 14px;
            }
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-check {
            margin-bottom: 10px;
        }

        h5 {
            margin-top: 50px;
            margin-bottom: 10px;
        }

        /* Additional CSS for the dropdown hover effect */
        .navbar-nav .nav-item .dropdown-menu {
            display: none;
        }

        .navbar-nav .nav-item:hover .dropdown-menu {
            display: block;
        
        }

        .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
            color: white;
        }

        .container-subdokumenkontrak {
            padding:10px;
            display:flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            font-weight:bold;


            
        }

       
        .menu-dokumenkontrak {
            padding:10px;
            color:white;
            
            
           
        }

        .menu-dokumenkontrak {
            background-color:#242574;
            border-radius:5px;
            text-decoration: none;
        }

        .menu-dokumenkontrak:hover {
            background-color:white;
            color:black;
            transform: translateY(-5px);
        }

        .button-selanjutnya:hover{
            background-color:white;
            color:black;
        }

        .container-kebutuhan-barang {
            display:flex;
            gap:10px;
            flex-wrap:wrap;
        }
        
    
    </style>
</head>

<body id="page-top" class="bg-gradient">
<!-- Page Wrapper -->
<div id="wrapper" class="">
