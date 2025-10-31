<?php
session_start();
require_once('config.php');
require_once ('../src/functions.php');

?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="../css/signin.css">
        <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
        <title>Sign in\Register</title>
    </head>



    <body>
    <div class="container">
        <form action="" method="post" name="Login_Form" class="form-signin">
            <h2 class="form-signin-heading">Enter username and password</h2>
            <table>
              <tr>
                  <td><label for="inputUsername" >Username</label></td>
                  <td><input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required></td>

              </tr>
            <tr>
                <td><label for="inputPassword">Password</label></td>
                <td><input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required></td>
            </tr>



