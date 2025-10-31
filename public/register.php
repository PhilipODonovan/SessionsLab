<?php require_once '../template/login_header.php';?>
<tr><td>
<label for="inputPassword2">Retype Password</label></td>
    <td>
<input name="Password2" type="password" id="inputPassword2" class="form-control" placeholder="retype Password" required>
    </td>
</tr>
<tr><td>
        <!--<div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>--></td>

</div>

<td><button name="Register" value="Login" class="button" type="submit">Register</button</td></tr>

</table>
</form>
<?php

if (isset($_POST['Register']) && (escape($_POST['Password']) == escape($_POST['Password2']) ))
{ /* Success: Save to DB and redirect to login page */
    try {
        require "../src/DBconnect.php";

    $new_user = array(
            "firstname" => escape($_POST['Username']),
            "password" => escape($_POST['Password'])
    );

    $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));
//    echo $sql;
   $statement = $connection->prepare($sql);
    $statement->execute($new_user);

    }
    catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }

    header("location:login.php"); /* 'header() is used to redirect the browser */
    exit; //just used header() to redirect to another page but must terminate all current code so that it doesn’t run when we redirect
}


elseif (isset($_POST['Register']) && (escape($_POST['Password']) != escape($_POST['Password2']) )){

    echo '<tr><td></td><td>passwords do not match</td></tr>';





}

?>