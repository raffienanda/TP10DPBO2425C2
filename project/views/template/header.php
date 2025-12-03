<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Manager</title>
    <style>
        /* Reset & Font Global */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Container Utama (Card Style) */
        .container {
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Judul */
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        h3 {
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            color: #34495e;
            margin-top: 30px;
        }

        /* Navigasi */
        .nav {
            background-color: #34495e;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 30px;
        }
        .nav a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            padding: 8px 12px;
            transition: 0.3s;
        }
        .nav a:hover {
            background-color: #2c3e50;
            border-radius: 4px;
            color: #f1c40f; /* Kuning pas hover */
        }

        /* Tabel Keren */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            background-color: white;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #2980b9;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Tombol & Link Aksi */
        a {
            color: #2980b9;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        
        /* Tombol Tambah Data (Link yang dibungkus biar kayak tombol) */
        a[href*="action=create"] {
            display: inline-block;
            background-color: #27ae60;
            color: white;
            padding: 10px 15px;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            margin-bottom: 15px;
        }
        a[href*="action=create"]:hover {
            background-color: #219150;
        }

        /* Form Styling */
        form {
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], 
        input[type="email"], 
        input[type="datetime-local"], 
        select, 
        textarea {
            width: 100%; /* Full width */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Agar padding gak nambah lebar */
        }
        button[type="submit"] {
            width: 100%;
            background-color: #2980b9;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #2573a7;
        }

        /* Link Edit/Hapus di Tabel */
        td a[href*="edit"] {
            color: #e67e22; /* Orange */
            font-weight: bold;
        }
        td a[href*="delete"] {
            color: #c0392b; /* Merah */
            font-weight: bold;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container"> <h1>🏋️ Gym Management System</h1>
        
        <div class="nav">
            <a href="index.php?page=members">Anggota</a>
            <a href="index.php?page=trainers">Pelatih</a>
            <a href="index.php?page=equipment">Alat Gym</a>
            <a href="index.php?page=sessions">Jadwal Latihan</a>
        </div>  