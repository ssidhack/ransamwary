<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

mysql_query("update rating_counter set counter = 0 where id=1");
mysql_query("update rating_counter set counter = 0 where id=2");

header('Location:api.php?method=allview');

?>