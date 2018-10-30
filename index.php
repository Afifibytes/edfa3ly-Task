<?php

require './vendor/autoload.php';

use App\Consumer;
use App\CSVFile;
use App\JSONFile;
use App\JSONAPI;
use App\XMLAPI;

$url = "";
$method = 'GET';

$apiSourceJSON = new JSONAPI($url, $method);
$apiSourceXML = new XMLAPI($url, $method);

$filePathJSON = "./products.json";
$filePathCSV = "./products.csv";

$fileSourceJSON = new JSONFile($filePathJSON);
$fileSourceCSV = new CSVFile($filePathCSV);

$consumer = new Consumer($apiSourceXML);

$products = $consumer->getProducts();