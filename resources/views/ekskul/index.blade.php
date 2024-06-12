<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Ekstrakurikuler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        header {
            background-color: #114c79;
            color: white;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        .table-container {
            max-height: 400px; /* Atur tinggi maksimum kontainer tabel */
            overflow-y: auto; /* Tambahkan scrollbar vertikal jika konten melebihi tinggi maksimum */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4199db;
            color: white;
            position: sticky; /* Tetap di atas saat menggulir */
            top: 0; /* Tetap di atas */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .my-button {
            background-color: #114c79;
            border: none;
            color: white;
            padding: 12px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 2px; /* Menambahkan margin atas */
            cursor: pointer;
            border-radius: 8px;
        }

        .my-button:hover {
            background-color: #4199db; /* Warna latar belakang baru saat hover */
        }

        a {
            text-decoration: none; /* Menghilangkan tanda biru hyperlink */
            color: inherit; /* Mengambil warna dari induknya (dalam kasus ini, warna tombol) */
        }
        .leon{
          background: url("{{
          asset('images/pexels-stefanstefancik-919606.jpg')
          }}") no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
        }
    </style>
</head>
<body class='leon'>
<div class="container">
    <header>
        <h1>Data Ekstrakurikuler SMAN 1 Dayeuhkolot</h1>
    </header>
    <main>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah Anggota</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ekskuls as $ekskul)
                        <tr>
                            <td>{{ $ekskul->nama }}</td>
                            <td>{{ $ekskul->jumlah_anggota }}</td>
                            <td>{{ $ekskul->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <button class="my-button"><a href="/">Back To Dashboard</a></button>
    </main>
</div>
</body>
</html>
