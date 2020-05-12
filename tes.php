<?php

$time_start = microtime(true);

require 'vendor/autoload.php';

use \PhpOffice\PhpSpreadsheet\IOFactory;

$inputfilename = "absensi.xlsx";
$inputFileType = IOFactory::identify($inputfilename);
$reader = IOFactory::createReader($inputFileType);
$spreadsheet = $reader->setReadEmptyCells(false)->load($inputfilename);
$results = $spreadsheet->getActiveSheet()->toArray();

echo "<table>";
foreach($results as $result){
    echo "<tr>";
    foreach($result as $data){
        echo "<td>". $data ."</td>";
    }
    echo "</tr>";
}
echo "</table>";



$time_end = microtime(true);
$execution_time = ($time_end - $time_start);

echo "<br> <br> Total execution time : " . $execution_time ." seconds";
