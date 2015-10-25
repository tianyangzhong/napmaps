<?php

include "db.php";

if(isset($_COOKIE) && $_COOKIE['isLogin']==1){
    setcookie('username', '', time() - 3600);
    setcookie('isLogin', '', time() - 3600);

}

$mysqli->close();

header("Location: index.php");

?>