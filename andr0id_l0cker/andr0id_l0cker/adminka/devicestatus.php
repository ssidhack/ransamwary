<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

$imei = intval(Param('imei'));

$query  = "select * from rating_all where imei=".$imei." limit 1";
$result = mysql_query ($query) or die ("");
$data   = mysql_fetch_assoc($result);

if ($data['unlock']>0){
    die(json_encode(array('result' => 2)));
}else{
    die(json_encode(array('result' => 1)));
}

?>