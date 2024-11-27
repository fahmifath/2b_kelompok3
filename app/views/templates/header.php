<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Link ke CSS Bootstrap Lokal -->
    <!-- <link href="../../../public/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../../../public/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Import Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;400;500&display=swap');

        /* Global Styling */
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
        }

        /* Navbar */
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 1rem;
        }

        /* Heading */
        h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        /* Table */
        .table thead {
            background-color: #343a40;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        .table td,
        .table th {
            vertical-align: middle;
            text-align: center;
        }

        /* Buttons */
        .btn {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
            color: #333;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #bd2130;
            color: #333;
        }

        .btn-success {
            border: none;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #1e7e34;
            color: #333;
        }
    </style>
</head>

<body>