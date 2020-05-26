<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bagi Kelompok</title>

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
        <p class="title flow-text"><b>Upload</b> file daftar mahasiswa kalian</p>
        <br>
        
        <div class="row">
            <div class="col s12">
                <div class="card grey lighten-3 z-depth-3 center-align" id="my-dropzone">
                    <div class="card-content dark-text" id="my-dropzone-content">
                        <p class="dropfile flow-text">Drop your file here...</p>
                        <h6 class="no-margin" style="margin-bottom: 5px;">or</h6>
                        <a class="waves-effect waves-light rounded pulse grey lighten-2 grey-text btn-small" id="fileinput-button">Choose File</a>
                    </div>
                    <div id="previews">
                        <div class="row" id="template">
                            <p class="flow-text" style="margin-bottom: 5px;">Apakah anda yakin data ini sudah benar?</p>
                            <div class="col s10 offset-s1">
                                <button id="lanjut" class="waves-effect waves-light btn-small green lighten-4 center-align" style="margin-right: 5px;"><i class="material-icons right">check</i>Lanjut</button>
                                <buttom id="batal" class="waves-effect waves-light btn-small red lighten-4 center-align"><i class="material-icons right">close</i>Batal </button>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-table" style="overflow: hidden;">
                        <table class="bordered highlight grey lighten-5" id="tableData">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Dropzone -->
    <script src="vendor/dropzone/dist/dropzone.js"></script>
    <script src="main.js"></script>
</body>
</html>