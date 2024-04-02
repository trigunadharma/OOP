<?php

require_once 'Mahasiswa.php';

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $nilai = $_POST['nilai'];

    // Buat objek Mahasiswa
    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $nilai);
}

?>

<!-- Form input -->
<html>
<head>
    <title>Form Mahasiswa</title>
<link rel="stylesheet" href="style.css">
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center; /* Menengahkan konten */
        }
        h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
            text-align: left; /* Kembalikan teks form ke kiri */
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"], .btn-back {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Hapus underline */
            display: inline-block;
            margin-top: 10px;
        }
        input[type="submit"]:hover, .btn-back:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <form method="post" action="">
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim"><br>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>
            <label for="kuliah">Kuliah:</label><br>
            <input type="text" id="kuliah" name="kuliah"><br>
            <label for="nilai">Nilai:</label><br>
            <input type="number" id="nilai" name="nilai"><br><br>
            <input type="submit" value="Submit">
        </form>

        <!-- Output table -->
        <?php if(isset($mahasiswa)): ?>
            <h2>Hasil:</h2>
            <table>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td><?php echo $mahasiswa->nim; ?></td>
                    <td><?php echo $mahasiswa->nama; ?></td>
                    <td><?php echo $mahasiswa->kuliah; ?></td>
                    <td><?php echo $mahasiswa->nilai; ?></td>
                    <td><?php echo $mahasiswa->grade; ?></td>
                    <td><?php echo $mahasiswa->predikat; ?></td>
                    <td><?php echo $mahasiswa->status; ?></td>
                </tr>
            </table>
            <a href="objMahasiswa.php" class="btn-back">Kembali</a>
        <?php endif; ?>
    </div>
</body>
</html>
