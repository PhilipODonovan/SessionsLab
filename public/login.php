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
    <title>Sign in</title>
</head>



<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>

    </form>
    <?php

   if (isset($_POST['Submit']) && (check_login ($_POST['Username'] , $_POST['Password'] )))
   { /* Success: Set session variables and redirect to protected page */
       $_SESSION['Username'] = $_POST['Username']; //store Username to the session
       $_SESSION['Active'] = true; //set session to active
       header("location:index.php"); /* 'header() is used to redirect the browser */
       exit; //just used header() to redirect to another page but must terminate all current code so that it doesn’t run when we redirect


    }

    ?>

</div>
</body>
</html>
