<?php 
include 'helpers.php';


formatGetParams();

//0-255 valid
//256+ false

$testExamples = array("192.168.1.3", "192.168.0.1", "0.258.5.5", "18.1213.36.0");

foreach($testExamples as $address) {
    validateIP($address);
}