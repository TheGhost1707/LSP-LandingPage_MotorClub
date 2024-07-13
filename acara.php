<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acara / Event</title>
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
        <h1>Acara dan Event</h1>
        <section class="events">
            <div class="event">
                <img src="img/event1.jpeg" alt="Event 1">
                <div class="event-info">
                    <h2>Lomba Modifikasi Motor Tahunan</h2>
                    <p>Deskripsi singkat mengenai acara modifikasi motor tahunan yang akan diadakan pada tanggal 15 Juni 2024. Acara ini akan diikuti oleh pembalap dari seluruh Indonesia.</p>
                    <p><strong>Tanggal:</strong> 15 Juni 2024</p>
                </div>
            </div>
            <div class="event">
                <img src="img/event2.jpg" alt="Event 2">
                <div class="event-info">
                    <h2>Pelatihan Test Speed Motor</h2>
                    <p>Pelatihan Test Speed untuk pemula yang akan diadakan pada tanggal 22 Juli 2024. Peserta akan mendapatkan pelatihan langsung dari pembalap profesional.</p>
                    <p><strong>Tanggal:</strong> 22 Juli 2024</p>
                </div>
            </div>
            <div class="event">
                <img src="img/event3.jpg" alt="Event 3">
                <div class="event-info">
                    <h2>Sunmori</h2>
                    <p>Sunmori motor berbagai jenis tipe otor dari seluruh indonesia. Acara ini akan diadakan pada tanggal 10 Agustus 2024.</p>
                    <p><strong>Tanggal:</strong> 10 Agustus 2024</p>
                </div>
            </div>
        </section>
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
