<?php

function check_login($user, $pass){
    require ('../public/config.php');
    /* Check if the form's username and password matches */
    /* these currently check against variable values stored in config.php but later we will see how these can be checked against information in a database*/
    if( ($user == $Username) && ($pass == $Password) )
    {
        echo 'Success';
        return true;
    }
    else
        echo 'Incorrect Username or Password';
}
?>

