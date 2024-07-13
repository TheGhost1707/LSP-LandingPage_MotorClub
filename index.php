<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Bro !!</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color:black;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        /*
        <div class="sidebar">
            <img src="img/logo.jpg">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        */
        ?>
        <div class="main">
            <div class="cover">
                <h1>-- WELCOME --<br>Motor Racing Indonesia</h1>
                <a href="profile.php"><button>Next Page</button></a>
            </div>
            <?php
            /*
            <nav class="navbar">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Visi dan Misi</a></li>
                    <li><a href="#">Produk dan Layanan kami</a></li>
                    <li><a href="#">Kontak kami</a></li>
                    <li><a href="#">Tentang</a></li>
                </ul>
            </nav>
            */
            ?>
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
