<?php 
require_once '../../database/main.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="soft.css">
        <title>Soft Skill</title>
    </head>
    <body>
        <div class="container">
            <div class="back">
                    <a href="../../index.php">Klik disini untuk kembali</a>
            </div>
            <div class="col">
                <h2>Soft Skill</h2>
                <table>
                    <tr>
                        <th>Soft Skill</th>
                        <th style="width: 60px;">Level</th>
                    </tr>
                    <?php foreach ($softSkills as $item) { ?>
                    <tr>
                        <td><?php echo $item['skill'] ?></td>
                        <td style="text-align: center"><?php echo $item['level'] ?></td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="note">
                <h3>Keterangan level</h3>
                <ul>
                    <li>1 = Belum sama sekali</li>
                    <li>2 = Sudah belajar tapi belum paham</li>
                    <li>3 = Sudah paham tapi belum dipraktekkan</li>
                    <li>4 = Sudah dipraktekkan tapi belum sempurna</li>
                    <li>5 = Sempurna</li>
                </ul>
            </div>
            </div>
        </div>
    </body>
</html>
