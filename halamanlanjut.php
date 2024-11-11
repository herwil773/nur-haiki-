<?php
$judul = "Laman Contoh";
$deskripsi = "Ini adalah laman contoh. Laman ini berbeda dari artikel blog karena akan tetap di satu tempat dan akan muncul di navigasi situs Anda (di sebagian besar tema). Kebanyakan orang memulai dengan laman “Tentang” yang bertujuan untuk mengenalkan mereka kepada pengunjung potensial situs.";
$konten1 = "Hai yang disana! Saya seorang kurir bersepeda di siang hari, di malam hari bermimpi menjadi seorang aktor, dan ini adalah situs web saya. Saya tinggal di Los Angeles, punya anjing besar bernama Jack, dan saya suka piña colada. (Dan terjebak dalam hujan.)";
$konten2 = "Perusahaan Doohickey XYZ didirikan pada tahun 1971, dan telah menyediakan doohickey berkualitas untuk masyarakat umum sejak saat itu. Terletak di Kota Gotham, XYZ mempekerjakan lebih dari 2.000 orang dan melakukan segala macam hal luar biasa untuk komunitas Gotham.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            position: relative;
            padding: 20px;
        }

        .container {
            text-align: center;
            padding: 40px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
        }

        h2 {
            color: #333;
            font-size: 30px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 22px;
            font-weight: bold;
            color: #007BFF;
            margin-top: 40px;
        }

        .section-content {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            margin-top: 10px;
            padding-left: 20px;
            text-align: left;
        }

        /* Styling untuk link kembali */
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 18px;
            color: #007BFF;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* Styling untuk media sosial */
        .social-links {
            margin-top: 30px;
            font-size: 24px;
        }

        .social-links a {
            margin: 0 15px;
            color: #555;
            text-decoration: none;
        }

        .social-links a:hover {
            color: #007BFF;
        }

        /* Footer styling */
        .footer {
            margin-top: 40px;
            font-size: 16px;
            color: #777;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Link untuk kembali ke halaman utama -->
    <a href="nur.php" class="back-link">Kembali ke Halaman Utama</a>

    <div class="container">
        <h2><?php echo $judul; ?></h2>
        <p><?php echo $deskripsi; ?></p>

        <!-- Konten pertama -->
        <div class="section-title">Tentang Saya</div>
        <div class="section-content">
            <?php echo nl2br($konten1); ?>
        </div>

        <!-- Konten kedua -->
        <div class="section-title">Tentang Perusahaan</div>
        <div class="section-content">
            <?php echo nl2br($konten2); ?>
        </div>

        <!-- Social Media Links -->
        <div class="social-links">
            <a href="https://facebook.com" target="_blank" class="fab fa-facebook"> Facebook</a>
            <a href="https://instagram.com" target="_blank" class="fab fa-instagram"> Instagram</a>
            <a href="https://twitter.com" target="_blank" class="fab fa-twitter"> Twitter</a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>Designed with <a href="https://wordpress.org" target="_blank">WordPress</a></p>
        <p>nurhaiki</p>
        <p>
            <strong>About</strong>
            <ul style="list-style-type:none; padding: 0;">
                <li><a href="#">Team</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </p>
        <p>
            <strong>Privacy</strong>
            <ul style="list-style-type:none; padding: 0;">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </p>
    </div>

</body>
</html>
