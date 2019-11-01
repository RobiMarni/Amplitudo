

<?php 
include 'helpers.php';
formatGetParams();
$test_examples = array("192.167.1.1", "168.0.0.1", "999.1.1.1", "00.00.00.289");
foreach($test_examples as $addres)
{
    validateIP($addres);
}