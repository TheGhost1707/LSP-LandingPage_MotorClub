<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang kami</title>
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
            <p>Motor Racer Club Indonesia didirikan pada tahun 2018 dengan tujuan
                mempersatukan para pecinta motor di Indonesia dengan pelayanan dan jasa produk yang lengkap.
                Kami telah berkembang menjadi salah satu perusahaan pelayanan jasa motor terbesar dan
                paling berpengaruh di tanah air, dengan dukungan ratusan klub motor aktif yang tersebar di berbagai daerah.
            </p>
            <p>Sejak awal berdirinya, kami telah berkomitmen untuk mendukung perkembangan club motor di Indonesia.
                Melalui berbagai kegiatan dan acara, kami berusaha untuk memberikan tempat yang aman dan terstruktur
                bagi para penggemar motor untuk menyalurkan bakat dan hobi mereka. Dan mencoba pelayanan jasa dan produk yang
                kami tawarkan. Tentu itu menjadi salah satu faktor keselamatan berkendara apabila melakukan perawatan
                motor secara berkala. Untuk menghindari kejadian yang tidak diinginkan saat diperjalanan.
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
