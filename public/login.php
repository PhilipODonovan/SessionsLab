<?php require_once '../template/login_header.php';?>
<tr>

    <td></td>
    <td><button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </td></tr>
<tr>
    <td></td>
    <td><div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

    </td>
</tr>


    </form>
    <?php

   if (isset($_POST['Submit']) && (check_login (escape($_POST['Username']) , escape($_POST['Password']) )))
   { /* Success: Set session variables and redirect to protected page */
       $_SESSION['Username'] = escape($_POST['Username']); //store Username to the session
       $_SESSION['Active'] = true; //set session to active
       header("location:index.php"); /* 'header() is used to redirect the browser */
       exit; //just used header() to redirect to another page but must terminate all current code so that it doesn’t run when we redirect


    }
   elseif (isset($_POST['Submit']) && !(check_login (escape($_POST['Username']) , escape($_POST['Password']) ))){

       echo '<tr><td></td><td>Incorrect Username or Password</td></tr>';
       echo '<tr><td></td><td>Do you want to <a href="register.php">Register?</a></td></tr>';




   }

    ?>
</table>
</div>
</body>
</html>
