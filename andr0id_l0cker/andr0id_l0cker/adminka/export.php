<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

$result = mysql_query("SET NAMES 'utf8' ") or die("");
$query = "select * from rating_all";
$result = mysql_query ($query) or die ("");
while($data=mysql_fetch_assoc($result)){
    echo "{$data['id']}::{$data['date']}::{$data['country']}::{$data['code']}<br />\n";
}
?>