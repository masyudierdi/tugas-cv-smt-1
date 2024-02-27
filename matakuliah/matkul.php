<?php 
require_once '../database/main.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="matkul.css" />
        <title>Matakuliah</title>
    </head>
    <body>
        <div class="container">
            <div class="back">
                    <a href="../index.php">Klik disini untuk kembali</a>
            </div>
            <div class="col">
                <h2>Daftar Mata kuliah</h2>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Mata kuliah</th>
                        <th>Nama Dosen</th>
                        <th>Foto Dosen</th>
                    </tr>
                    <?php foreach ($daftarMatkul as $item) { ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $item['no'] ?></td>
                        <td><?php echo $item['matkul'] ?></td>
                        <td><?php echo $item['dosen'] ?></td>
                        <td style="height: 100px;">
                            <img src="<?php echo $item['foto'] ?>" alt="foto" height="90" width="60">
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
</html>
