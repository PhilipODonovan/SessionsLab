<?php

function check_login($user, $pass)
{
    require('../public/config.php');
    require('dbconfig.php');
    require('DBconnect.php');

    /* Check if the form's username and password matches */
    /* these currently check against variable values stored in config.php but later we will see how these can be checked against information in a database*/

    try {

        require_once '../src/DBconnect.php';

        $sql = "SELECT password FROM users WHERE firstname = :firstname";

        $statement = $connection->prepare($sql);
        $statement->bindParam(':firstname', $user, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll();

    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

//    echo $statement->rowCount();

    foreach ($result as $row) {
//        var_dump($row);

       if ($row["password"] == $pass && $statement->rowCount() == 1) //need to have only one match on the name and password
        {

            echo 'Success';
            return true;
        }
        else{
            return false;
        }
    }


}

function escape($data)
{
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);
    return ($data);
}


