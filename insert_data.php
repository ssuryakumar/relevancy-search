<?php
include 'db.inc.php';

$db=mysql_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PASSWORD) or die('unable to connect ..');
mysql_select_db(MYSQL_DB,$db) or die(mysql_error($db));

$title = (isset($_POST["title"]))?$_POST["title"]:"";
$post = (isset($_POST["post"]))?$_POST["post"]:"";

$query = 'INSERT INTO content(title,post) VALUES("'.$title.'","'.$post.'")';
mysql_query($query,$db) or die(mysql_error($db));

echo "DATA INSERTED";

?>