<?php

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\IOFactory;

$ds = DIRECTORY_SEPARATOR;
$storeFolder = 'uploadFiles';

if(!empty($_FILES)) {
    $tempFileName = $_FILES['file']['tmp_name'];
    $targetPath = dirname(__FILE__) . $ds . $storeFolder;
    $targetFile = $targetPath . $ds . $_FILES['file']['name'];

    if(move_uploaded_file($tempFileName, $targetFile)){
        $inputFileType = IOFactory::identify($targetFile);
        $reader = IOFactory::createReader($inputFileType);
        $spreadsheet = $reader->setReadEmptyCells(false)->load($targetFile);
        $results = $spreadsheet->getActiveSheet()->toArray();
        // $header = $results[0];
        // unset($results[0]);

        // $arrayAssoc = array_map(static function ($row) use ($header) { return array_combine($header, $row); }, $results);

        //Hapus session jika sudah terdapat sebelumnya
        if(isset($_SESSION['data']) && !empty($_SESSION['data'])){
            session_destroy();
            unset($_SESSION['data']);
        }

        // Buat variabel $_SESSION['data'] dengan isi array hasil data exce; 
        session_start();
        $_SESSION['data'] = $results;

        // Ubah array yang telah didapat menjadi JSON
        $resultJson = json_encode($results);

        // Kirim(echo) data JSON ke main.js untuk menjadi respon dropzone saat success
        echo $resultJson;
    }
}