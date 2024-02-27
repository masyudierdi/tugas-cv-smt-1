<?php 
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="project.css">
        <title>Form</title>
    </head>
    <body>
        <div class="back">
                <a href="../index.php">Klik disini untuk kembali</a>
        </div>
        <div class="note">
                <p>Nama bangun datar yang tersedia =</p>
                <br>
                <ul>
                    <li>1. segitiga</li>
                    <li>2. persegi panjang</li>
                    <li>3. jajar genjang</li>
                </ul>
                <br>
                <p>Tolong masukkan dengan benar, huruf kecil semua. kalau salah akan muncul pesan kesalahan</p>
            </div>
        <div class="container">
                <div class="form">
                    <form action="result.php" method="post">
                        <input type="text" name="nama" placeholder="Nama anda" />
                        <input type="hidden" name="tanggal" value="<?php echo date('d-m-Y'); ?>" />
                        <input type="text" name="bangunDatar" placeholder="Nama bangun datar" />
                        <button type="submit" name="submit">Cetak</button>
                    </form>
                </div>
        </div>
    </body>
</html>
