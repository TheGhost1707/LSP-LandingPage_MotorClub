<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak kami</title>
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
            <div class="container3">
                <h1>Kontak Kami</h1>
                <div class="contact-info">
                    <div class="contact-details">
                        <h2>Hubungi Kami</h2>
                        <p><strong>Alamat:</strong> Jl. Pasir Mukti No. 123, Citeureup, Bogor</p>
                        <p><strong>Telepon:</strong> +62 123 4567 890</p>
                        <p><strong>Email:</strong> motorracingclub@gmail.com</p>
                    </div>
            <div class="contact-map">
                <h2>Lokasi Kami</h2>
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15856.387777040658!2d106.88539079306388!3d-6.509412025813324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c08e61908371%3A0x856ce43be5556535!2sPasir%20Mukti%2C%20Citeureup%2C%20Bogor%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1716834429074!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
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
