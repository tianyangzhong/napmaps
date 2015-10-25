<?php

$mysqli = new mysqli();
$mysqli->connect("localhost", "root", "123456", "car");
if ($mysqli -> connect_error){
    echo "Fail to connect to MySQL (" . $mysqli -> connect_errno . ")" . $mysqli -> connect_error;
}

?>