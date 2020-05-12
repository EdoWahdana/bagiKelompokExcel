<?php

session_start();
$indexKategori = $_POST['kategori'];
$anggotaPerKelompok = $_POST['anggota'];
//Buat variabel untuk menampung array dari SESSION
$arrayFromSession = $_SESSION['data'];

// Buang header pada array $arrayFromSession
array_shift($arrayFromSession);

//Buat array untuk menampung hanya kategori yang akan dibagi
$kategoriArray = [];

//Perulangan untuk memfilter array dengan index tertentu dan dimasukkan ke dalam $kategoriArray
foreach($arrayFromSession as $rowIndex => $rowData){
    $kategoriArray[$rowIndex] = $rowData[$indexKategori];
}

//Perulangan untuk pengelompokan jumlah anggota
//Dan membuat Array Dua Dimensi kelompok 
$kelompok = [];
$indexKelompok = 0;
while(!empty($kategoriArray)){
    $kelompok[$indexKelompok] = [];
    for($i=0; $i<$anggotaPerKelompok; $i++){
        $randomKeys = array_rand($kategoriArray);
        $kelompok[$indexKelompok][$i] = $kategoriArray[$randomKeys];
        unset($kategoriArray[$randomKeys]);
    }
    $indexKelompok++;
    $kategoriArray = array_values($kategoriArray);
    if(count($kategoriArray) < $anggotaPerKelompok)
        $anggotaPerKelompok = count($kategoriArray);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Kelompok</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Additional CSS -->
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
    <p class="title flow-text center-align"><b>Hasil</b> pembagian kelompok secara acak</p>
    <br><br>

        <div class="row">
            <?php foreach($kelompok as $indexPerKelompok => $perKelompok): ?>
                <div class="col s6 l4">
                    <div class="card grey lighten-3 z-depth-3">
                        <div class="card-content ">
                            <span class="card-title center-align">Kelompok <?= $indexPerKelompok+1 ?></span>
                            <?php foreach($perKelompok as $perAnggota): ?>
                                <p class="flow-text" style="font-size: 15px;"><?= $perAnggota ?></p>
                            <?php endforeach; ?>
                        </div>
                    </div> 
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>