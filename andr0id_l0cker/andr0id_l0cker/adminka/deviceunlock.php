<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

$id = intval(Param('id'));

$query  = "select * from rating_all where id='$id' limit 1";
$result = mysql_query ($query) or die;
$data   = mysql_fetch_assoc($result);

if(!empty($data['imei'])){

    $query = "update rating_all set `unlock` = '1' where `imei` = '{$data['imei']}' limit 1";
    $result = mysql_query($query);

}

header('Location:api.php?method=allview');

?>