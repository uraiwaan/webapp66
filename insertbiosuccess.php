<?php
require 'conn.php';
$sql_update="INSERT INTO studentbio(sname,slastname,address,telephone) VALUES ('$_POST[sname]','$_POST[slastname]' ,'$_POST[address]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/student/mainmenu.php");
}

?>