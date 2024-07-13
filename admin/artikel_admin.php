<?php
include "koneksi.php";
$koneksi->set_charset("utf8"); // Set karakter set koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit_artikel"])) {
        // Upload gambar artikel
        $gambar = $_FILES["gambar"]["name"];
        $gambar_tmp = $_FILES["gambar"]["tmp_name"];
        $upload_dir = "../uploads/";
        $gambar_path = $upload_dir . basename($gambar);
        
        // Cek apakah folder uploads ada, jika tidak buat folder tersebut
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        // Pindahkan file yang di-upload ke folder uploads
        if (move_uploaded_file($gambar_tmp, $gambar_path)) {
            // Ambil data dari formulir produk
            $judul = $_POST["judul"];
            $deskripsi = $_POST["deskripsi"];

            // Masukkan data ke database
            $stmt = $koneksi->prepare("INSERT INTO artikel (gambar, judul, deskripsi) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $gambar_path, $judul, $deskripsi);

            if ($stmt->execute()) {
                header("Location: artikel_admin.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        } else {
            echo "Error: Gagal meng-upload gambar.";
        }
    }
}
$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="../img/logo.jpg">
            <ul>
                <li><a href="artikel_admin.php">Artikel</a></li>
                <li><a href="produk_layanan_admin.php">Produk dan Layanan</a></li>
                <li><a href="galeri_admin.php">Galeri</a></li>
                <li><a href="klien_admin.php">Klien Kami</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="header">
                <h1>Motor Racing Indonesia</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="artikel_admin.php">Artikel</a></li>
                </ul>
            </nav>
            <div class="content">
                <h2>Tambah Artikel Baru</h2>
                <form action="" method="POST" enctype="multipart/form-data" class="product-form">
                    <label for="product-name">Judul Artikel:</label>
                    <input type="text" id="article-name" name="judul" required>

                    <label for="product-image">Gambar Artikel:</label>
                    <input type="file" id="article-image" name="gambar" accept="image/*" required>

                    <label for="product-price">Deskripsi:</label>
                    <input type="text" id="article-decs" name="deskripsi" required>

                    <button type="submit" name="submit_artikel">Tambah Artikel</button>
                </form>
            </div>
        </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.createElement('div');
        toggleBtn.classList.add('toggle-btn');
        toggleBtn.textContent = '☰ Menu';
        document.body.appendChild(toggleBtn);
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });
        });
        </script>
</body>
</html>
