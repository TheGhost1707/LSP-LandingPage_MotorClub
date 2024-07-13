<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi</title>
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
            <p>
            VISI<br><br>
            Menjadi komunitas penyedia layanan jasa untuk semua club motor terkemuka di Indonesia yang mendukung
            perkembangan para pecinta motor serta menciptakan lingkungan yang positif dan kompetitif bagi para anggota.
            </p>
            <p>
            MISI<br><br>
            1. Mempromosikan dan mengembangkan Komunitas club motor di Indonesia.<br><br>
            2. Menyediakan platform untuk pendidikan, pelatihan, dan pengembangan keterampilan club motor.<br><br>
            3. Menyelenggarakan acara dan kompetisi yang menantang dan menarik bagi para club anggota.<br><br>
            4. Membangun jaringan komunitas yang kuat dan mendukung antar sesama club motor.<br><br>
            </p>
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
