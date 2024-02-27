<?php 
require_once './database/main.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CV Erdi</title>
        <link rel="stylesheet" href="style.css" />
        <script src="https://kit.fontawesome.com/fc166c3022.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- container -->
        <div class="container">
            <div class="wrapper">
                <div class="hero">
                    <div class="img"></div>
                    <div class="wraptext">
                        <h1><?php echo $profile['nama']; ?></h1>
                        <h4><?php echo $profile['mhs']; ?></h4>
                    </div>
                </div>
                <div class="connect">
                    <ul>
                        <?php foreach ($kontak as $item) { ?>
                        <li>
                            <a href="<?php echo $item['link']; ?>" style="color: #ffffff; text-decoration: none;" target="_blank">
                                <i class="<?php echo $item['icon']; ?>" style="color: #ffffff; margin-right: 5px"></i>
                                <?php echo $item['hub']; ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- profil -->
            <div class="profil">
                <div class="round">
                    <h2><?php echo $title['data']; ?></h2>
                </div>
                <table>
                    <?php foreach ($Biodata as $item) { ?>
                    <tr>
                        <td class="caption"><?php echo $item['information']; ?></td>
                        <td><?php echo $item['fill']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- profil end -->
            <!-- pendidikan -->
            <div class="pendidikan">
                <div class="round">
                    <h2><?php echo $title['pendidikan']; ?></h2>
                </div>
                <table>
                    <?php foreach ($pendidikan as $item) { ?>
                    <tr>
                        <td class="caption"><?php echo $item['periode']; ?></td>
                        <td><?php echo $item['institusi']; ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <!-- pendidikan end -->
            <!-- pengalaman -->
            <div class="pengalaman">
                <div class="round">
                    <h2><?php echo $title['pengalaman']; ?></h2>
                </div>
                <?php foreach ($pengalaman as $item) { ?>
                <ul class="wrapPengalaman">
                    <li class="bulan"><?php echo $item['periode']; ?></li>
                    <li class="ket"><?php echo $item['posisi']; ?></li>
                </ul>
                <?php } ?>
            </div>
            <!-- pengalaman end -->
            <!-- sertifikasi -->
            <div class="sertifikasi">
                <div class="round">
                    <h2><?php echo $title['sertifikasi']; ?></h2>
                </div>
                <ul>
                    <?php foreach ($sertifikasi as $sertif) { ?>
                    <li><?php echo $sertif; ?></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- sertifikasi end -->
            <!-- skill -->
            <div class="wrapSkill">
                <div class="hardSkill">
                    <div class="round2">
                        <h2><?php echo $title['hardskill']; ?></h2>
                    </div>
                    <ul>
                        <li>HTML Formating 5</li>
                        <li>HTML Form 5</li>
                        <li>CSS Grid 5</li>
                        <li>CSS Flexbox 5</li>
                        <li>PHP For 5</li>
                        <li>PHP Function 5</li>
                    </ul>
                    <button class="myButton">
                        <a class="myLink" href="./skill/hardskill/hard.php">Klik untuk selengkapnya</a>
                    </button>
                </div>
                <div class="softSkill">
                    <div class="round2">
                        <h2><?php echo $title['softskill']; ?></h2>
                    </div>
                    <ul>
                        <li>Manajemen waktu 5</li>
                        <li>Problem solving 5</li>
                        <li>Kerja sama 5</li>
                        <li>Berani bertanya 4</li>
                        <li>Logika 4</li>
                        <li>Kreatif 5</li>
                    </ul>
                    <button class="myButton">
                        <a class="myLink" href="./skill/softskill/soft.php">Klik untuk selengkapnya</a>
                    </button>
                </div>
            </div>
            <!-- skill end -->
            <!-- matkul dan project -->
            <div class="matpro">
                <div class="matkul">
                    <div class="round3">
                        <h2>Mata Kuliah</h2>
                    </div>
                    <button class="myButton">
                        <a class="myLink" href="./matakuliah/matkul.php">Klik disini</a>
                    </button>
                </div>
                <div class="project">
                    <div class="round3">
                        <h2>Project Form</h2>
                    </div>
                    <button class="myButton">
                        <a class="myLink" href="./projectForm/project.php">Klik disini</a>
                    </button>
                </div>
            </div>
            <!-- end -->
        </div>
        <!-- container end -->
    </body>
</html>
