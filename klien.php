<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kami</title>
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
            <img src="img/logo.jpg">
            <ul>
                <li><a href="artikel.php">Artikel</a></li>
                <li><a href="acara.php">Acara</a></li>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="klien.php">Klien Kami</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="header">
                <h1>Motor Racing Indonesia</h1>
            </div>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="profile.php">Profil</a></li>
                    <li><a href="visi_misi.php">Visi dan Misi</a></li>
                    <li><a href="produk_layanan.php">Produk dan Layanan kami</a></li>
                    <li><a href="kontak.php">Kontak kami</a></li>
                    <li><a href="tentang.php">Tentang</a></li>
                </ul>
            </nav>
            <div class="container2">
                <h1>Klien Kami</h1>
                <div class="logo-container">
                    <img src="img/logo1.png" alt="Logo" class="logo">
                    <br><br>
                    <img src="img/logo2.jpg" alt="Logo" class="logo">
                    <br><br>
                    <img src="img/logo3.jpg" alt="Logo" class="logo">
                    <br><br>
                    <img src="img/logo4.jpg" alt="Logo" class="logo">
                </div>
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
