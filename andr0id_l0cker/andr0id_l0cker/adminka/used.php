<?php

if(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die;
}

$rating = mysql_fetch_array(mysql_query("SELECT * FROM rating_all WHERE id=".intval(Param('id'))." LIMIT 1"));

if(!empty($rating)){
        
    if($rating['used'] == 0){
        $used = 1;
    }else{
        $used = 0;
    }
    
    mysql_query("UPDATE rating_all SET used = '{$used}' WHERE id='{$rating['id']}' LIMIT 1");

}

header('Location:api.php?method=allview');

?>