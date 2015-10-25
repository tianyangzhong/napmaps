<?php

include "car_admin/db.php";

$client_name = mysqli_real_escape_string($mysqli, $_POST['client_name']);
$client_email = mysqli_real_escape_string($mysqli, $_POST['client_email']);
$client_phone = mysqli_real_escape_string($mysqli, $_POST['client_phone']);
$client_message = mysqli_real_escape_string($mysqli, $_POST['client_message']);
date_default_timezone_set("America/New_York");
$post_time = date("Y-m-d H:i:s", time());

$insert = "INSERT INTO client (client_name, client_email, client_phone, client_message, post_time) VALUES ('{$client_name}', '{$client_email}', '{$client_phone}', '{$client_message}','{$post_time}')";
$result = $mysqli->query($insert);

if ($result){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <!--
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
        <title>One Step To Car</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="5;url=index.html">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class = submit-brand>
            <a href="#" class="navbar-brand">One Step To Car</a>
        </div>
        <div class=" submit alert alert-success">
            <span>Submit Successfully! We will contact you as soon as possible!</span></br>
            <a href="index.html">Click here back to the home page. Refresh Automatically in 5 seconds.</a>
        </div>
    </body>
    </html>



<?php
}
else{
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <!--
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
        <title>One Step To Car</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="5;url=index.html">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class = submit-brand>
            <a href="#" class="navbar-brand">One Step To Car</a>
        </div>
        <div class=" submit alert alert-danger">
            <span>Submit Failed! Please try again. Thank you!</span></br>
            <a href="index.html">Click here back to the home page. Refresh Automatically in 5 seconds.</a>
        </div>
    </body>
    </html>

<?php
}

$mysqli->close();
?>