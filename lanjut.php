<?php
session_start();

$data = $_SESSION['data'];
?>

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
        <p class="title flow-text"><b>Silahkan</b> atur kelompok anda</p>
        <br>
        
        <div class="row">
            <div class="col s12">
                <form method="post" action="hasil.php">
                    <div class="row">
                        <div class="col s12 m6">
                            <p class="flow-text" style="font-size: 15px;">Bagi kelompok berdasarkan</p>
                        </div>
                        <div class="col s12 m6">
                            <div class="input-field">
                                <select name="kategori">
                                    <?php
                                        foreach($data[0] as $index => $header){
                                            echo "<option selected value='$index'> $header </option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6">
                            <p class="flow-text" style="font-size: 15px;">Berapa anggota per kelompoknya</p>
                        </div>
                        <div class="col s12 m6">
                            <div class="input-field">
                                <select name="anggota">
                                    <?php 
                                        $totalData = count($data) - 1;
                                        for($i=1; $i<=$totalData; $i++){
                                            echo "<option selected value='".$i."'> $i </option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 offset-s3">
                            <button type="submit" class="waves-effect waves-light btn-small green lighten-4"><i class="material-icons right">input</i>Proses</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col s12">
                <div class="responsive-table z-depth-3" style="overflow: auto;">
                    <table class="bordered highlight grey lighten-5" >
                    <?php
                        foreach($data as $row => $rowElement){
                            echo "<tr>";
                                foreach($rowElement as $col => $colElement){
                                    echo "<td style='padding: 20px 15px;'>" . $colElement . "</td>";
                                }
                            echo "</tr>";
                        }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let elems = document.querySelectorAll("select");
            let options = {
                clasess: 'select'
            };
            let instances = M.FormSelect.init(elems, options);
        });
    </script>
</body>
</html>