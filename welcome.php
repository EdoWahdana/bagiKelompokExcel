<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bagi Kelompok</title>

    <!-- Dropzone -->
    <script src="vendor/enyo/dropzone/dist/dropzone.js"></script>

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
    <div class="container center-align">
        <p class="title flow-text"><b>Selamat Datang di Web Pembagian Kelompok</b></p> 

        <a href="./index.php" class="waves-effect waves-dark btn-large green lighten-3 pulse z-depth-3">Mulai Bagi Kelompok</a>
       
        <div class="row">
        <h5 style="padding: 10px; letter-spacing: 5px;">How to use?</h5>
            <div class="col s12 m3 white z-depth-3" style="border-radius: 10px; height: 300px; padding: 10px; margin: 15px 0px;">
                <h6 class="flow-text">1.</h6>
                <div>
                    <img class="img-responsive" width="100" height="100" src="./assets/fileDaftarSiswa.png">
                    <p>Siapkan file excel yang terdiri dari siswa/mahasiswa yang akan dibagi kelompok.</p>
                </div>
            </div>
            <div class="col s12 m3 white z-depth-3" style="border-radius: 10px; height: 300px; padding: 10px; margin: 15px 0px;">
                <h6 class="flow-text">2.</h6>
                <div>
                    <img class="img-responsive" width="100"  height="100" src="./assets/daftarSiswa.png">
                    <p>Pastikan baris pertama pada file excel tersebut berisi header atau judul untuk menandakan kategori baris di bawahnya.</p>
                </div>
            </div>
            <div class="col s12 m3 white z-depth-3" style="border-radius: 10px; height: 300px; padding: 10px; margin: 15px 0px;">
                <h6 class="flow-text">3.</h6>
                <div>
                    <img class="img-responsive" width="100"  height="100" src="./assets/fileUpload.png">
                    <p>Upload file tersebut, pastikan jika file sudah sesuai maka klik Lanjut.</p>
                </div>
            </div>
            <div class="col s12 m3 white z-depth-3" style="border-radius: 10px; height: 300px; padding: 10px; margin: 15px 0px;">
                <h6 class="flow-text">4.</h6>
                <div>
                    <img class="img-responsive" width="100"  height="100" src="./assets/kategoriKelompok.png">
                    <p>Tentukan kategori untuk membagi kelompok, kemudian pilih jumlah anggota yang diinginkan untuk setiap kelompok.</p>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('carousel');
            var options = {
                fullWidth: true,
                indicators: true
            };
            var instances = M.Carousel.init(elems, options);
        });
    </script>
</body>
</html>