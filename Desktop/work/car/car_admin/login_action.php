<?php

include "db.php";

//clear cookies
function clearCookie(){
    setcookie('username', '', time()-3600);
    setcookie('isLogin', '', time()-3600);
}


clearCookie();

//getting username and password from login page
$username = mysqli_real_escape_string($mysqli, $_POST['admin_username']);
$password = mysqli_real_escape_string($mysqli, md5($_POST['admin_password']));
$stayLogin = $_POST['stay_login'];

//operations in mysql database
$select = "SELECT * FROM admin WHERE admin_username = '$username'";
$result = $mysqli->query($select);
$count_rows = $result->num_rows;
$row = mysqli_fetch_array($result);

if ($count_rows>0 && $username == $row['admin_username'] && $password == $row['admin_password']){
 //   set cookie information, cookie will expire in 24 hours
    if($stayLogin=='1') {
        setcookie('username', $username, time() + 60 * 60 * 24);
        setcookie('isLogin', '1', time() + 60 * 60 * 24);
    }
    else{
        setcookie('username', $username, time() + 60 * 20);
        setcookie('isLogin', '1', time() + 60 * 20);
    }

    $mysqli->close();

    header("Location: index.php");
}
else{
    echo("Incorrect Username or Password");
}

?>