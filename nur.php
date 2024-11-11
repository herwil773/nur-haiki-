<?php
// Data perkenalan diri
$nama = "John Doe";
$npm = "1234567890";
$hobi = "Membaca, Bermain game, Bersepeda";
$matkul = "Pemrograman Web, Sistem Basis Data";
$kelas = "A";
$kata_mutiara = "Jangan pernah menyerah, karena hal terbaik seringkali datang di saat yang tidak terduga.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan Diri</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            position: relative; /* Membuat body sebagai referensi untuk positioning */
        }

        .container {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
        }

        h2 {
            color: #333;
        }

        p {
            font-size: 18px;
            color: #555;
        }

        a {
            display: block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Styling untuk link 'Ke Halaman Lanjut' di pojok kanan */
        .halaman-lanjut {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 18px;
            color: #007BFF;
            text-decoration: none;
        }

        .halaman-lanjut:hover {
            text-decoration: underline;
        }

        /* Styling untuk link 'Ke Halaman Contoh' di pojok kiri */
        .halaman-contoh {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 18px;
            color: #007BFF;
            text-decoration: none;
        }

        .halaman-contoh:hover {
            text-decoration: underline;
        }

        /* Styling untuk sosial media icon dan nama aplikasi */
        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .social-icons div {
            margin: 0 20px;
            text-align: center;
        }

        .social-icons a {
            font-size: 40px;
            color: #555;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #007BFF;
        }

        .social-icons p {
            font-size: 16px;
            color: #555;
            margin-top: 10px; /* Menambahkan jarak antara ikon dan nama aplikasi */
        }

        /* Kata-kata mutiara styling */
        .kata-mutiara {
            font-style: italic;
            color: #888;
            margin-top: 40px;
            padding: 20px;
            background-color: #f9f9f9;
            border-left: 4px solid #007BFF;
            font-size: 20px;
            text-align: center;
        }

    </style>
</head>
<body>

    <!-- Link ke halaman contoh di pojok kiri -->
    <a href="nur.php" class="halaman-contoh">nur haiki website </a>

    <!-- Link ke halaman lanjut di pojok kanan -->
    <a href="halamanlanjut.php" class="halaman-lanjut">halaman contoh</a>

    <div class="container">
        <h2>Perkenalan Diri</h2>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>NPM:</strong> <?php echo $npm; ?></p>
        <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
        <p><strong>Mata Kuliah:</strong> <?php echo $matkul; ?></p>
        <p><strong>Kelas:</strong> <?php echo $kelas; ?></p>

        <!-- Kata Mutiara -->
        <div class="kata-mutiara">
            <?php echo $kata_mutiara; ?>
        </div>

        <!-- Link sosial media secara horizontal -->
        <div class="social-icons">
            <div>
                <a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook"></i></a>
                <p>Facebook</p>
            </div>
            <div>
                <a href="https://wa.me/1234567890" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <p>WhatsApp</p>
            </div>
            <div>
                <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                <p>Twitter</p>
            </div>
            <div>
                <a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                <p>Instagram</p>
            </div>
        </div>
    </div>

</body>
</html>
