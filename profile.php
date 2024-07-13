<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile kami</title>
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
            <p>Motor Racing Indonesia adalah komunitas dan klub motor terkemuka di Indonesia
                yang didedikasikan untuk para penggemar modifikasi dan pecinta motor.
                Kami menyediakan platform bagi para anggota untuk berbagi 
                pengalaman, pengetahuan, dan hasrat mereka terhadap dunia motor. 
                Dengan berbagai produk, pelayanan, dan acara yang kami selenggarakan, 
                Motor Racer Club Indonesia berkomitmen untuk menjadi pusat utama bagi para pecinta motor di seluruh negeri.
            </p>

            <p>Pengalaman<br><br>
                1. Motor Racing Indonesia telah berdiri selama lebih dari satu dekade,
                dengan pengalaman luas dalam menyelenggarakan berbagai acara dan kompetisi balap motor.
                Kami telah mengadakan lebih dari 100 acara modifikasi motor nasional dan regional 
                yang diikuti oleh ribuan pembalap.<br><br>
                2. Kami memiliki jaringan yang luas dengan berbagai klub motor, sponsor, dan media.
                Ini memungkinkan kami untuk menyelenggarakan acara berkualitas tinggi
                yang mendapatkan perhatian luas dan dukungan dari berbagai pihak.<br><br>
                3. Kami bekerja sama dengan club motor profesional untuk memberikan pelatihan dan workshop
                kepada para anggota. Ini membantu meningkatkan keterampilan dan pengetahuan anggota kami 
                tentang teknik balap yang benar dan aman. <br><br>
            </p>
            <p>Kelebihan<br><br>
                1. Kami memiliki fasilitas yang lengkap dan modern,
                termasuk modifikasi yang memenuhi standar internasional, garasi, dan bengkel dengan peralatan terkini.
                Ini memberikan pengalaman yang optimal dan aman bagi para anggota.<br><br>
                2. Motor Racing Club Indonesia adalah rumah bagi komunitas yang solid dan antusias.
                Para anggota kami berasal dari berbagai latar belakang,
                tetapi disatukan oleh kecintaan yang sama terhadap segala jenis motor. 
                Kami mendukung satu sama lain dalam berbagai aspek, mulai dari teknik hingga modifikasi motor.<br><br>
                3. Kami menyediakan berbagai pelatihan, pelayanan jasa dan workshop yang dipimpin oleh instruktur dan pekerja berpengalaman.
                Program pelatihan kami mencakup teknik modifikasi, keselamatan berkendara,
                dan pengetahuan mekanik dasar hingga lanjutan.<br><br>
                4. Motor Racer Club Indonesia dikenal dengan penyelenggaraan event dan kompetisi bergengsi
                yang diikuti oleh pembalap dari seluruh Indonesia.
                Acara ini tidak hanya mengasah kemampuan para pembalap,
                tetapi juga mempererat tali persaudaraan di antara mereka.<br><br>
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
