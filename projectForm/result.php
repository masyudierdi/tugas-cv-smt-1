<?php 

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$item = $_POST['bangunDatar'];


function cetakPola($item){
if ($item == 'segitiga') {
    $tinggiSegitiga = 12;
    for ($i = 1; $i <= $tinggiSegitiga; $i++) {
        for ($j = 1; $j <= $tinggiSegitiga - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}   else if ($item == 'persegi panjang') {
        $panjang = 13;
        $lebar = 8;
        for ($i = 1; $i <= $panjang; $i++) {
            for ($j = 1; $j <= $lebar; $j++) {
                echo "*";
            }
        echo "<br>";
        }
}   else if($item == 'jajar genjang'){
        $tinggiJajarGenjang = 15;
        for ($i = 1; $i <= $tinggiJajarGenjang; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo "&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= $tinggiJajarGenjang; $k++) {
                echo "*";
            }
            echo "<br>";
        }

}   else{
    echo '<h4>Input yang anda berikan salah</h4>';
    }

}

function notice($item, $nama, $tanggal) {
    if ($item == 'persegi panjang' || $item == 'segitiga' || $item == 'jajar genjang') {
        echo 'Halo '.$nama.', anda mencetak bangun datar ini pada tanggal '.$tanggal;
    } else {
        echo 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result.css">
    <title>Hasil</title>
</head>
<body>
    <div class="back">
            <a href="project.php">Klik disini untuk kembali</a>
    </div>
    <div class="page-result">
        <div class="notice">
            <h3><?php echo notice($item, $nama, $tanggal) ?></h3>
        </div>
        <div class="result">
            <br>
            <?php echo cetakPola($item); ?>
        </div>
    </div>
</body>

</html>