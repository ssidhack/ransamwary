<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

$query = "update rating_counter set counter = counter +1 where id=2 limit 1";
$result = mysql_query ($query) or die ("");

$result = 1;
echo json_encode(array('result' => $result));

?>