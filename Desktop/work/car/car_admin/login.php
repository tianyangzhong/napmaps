<?php

include "db.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="admin_css/admin_style.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <meta name="keywords" content="" />
    <meta name="description" content=""/>
    <title></title>
</head>

<body>

<div class = "admin-title">
    <span>OneStepToCar</span> Admin System Login Page
</div>

<div class="login-background">
    <div class = "login-form ">
        <form action="login_action.php" method="post">
            <div class = "input-group form-control form-input">
                <label for="inputusername">Username &nbsp;</label></br>
                <input type = "text"  id = "inputusername" name = "admin_username" required autofocus>
            </div>
            </br>
            <div class = "input-group form-control form-input">
                <label for="inputpassword">Password &nbsp;</label></br>
                <input type = "password"  id = "inputpassword" name = "admin_password" required>
            </div>
            <div class="form-checkbox">
                <label for = "stay_login">Stay Login</label>
                <input id="stay_login" type = "checkbox" name="stay_login" value="1">
            </div>
            </br>
            <div class = "form-button">
                <button type = "submit" class = "btn">Login</button>
            </div>
        </form>
    </div>
</div>


</body>

</html>
