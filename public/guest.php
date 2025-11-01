<?php require_once '../template/guestheader.php';?>
<title>Guest page</title>
</head>


<body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contacts.php">Contact</a></li>
              <li><a href="guest.php">Guest</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PHP Login exercise - Guest page</h3>
      </div>

        <div class="mainarea">
            <?php
            if (isset($_SESSION['Username'])) {


            echo  '<h1>Status: You are logged in ' .escape($_SESSION['Username']).'</h1>';?>
                <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        </div>
        <?php
            }
            else{
                echo '<h1>Status: You are logged in as Guest</h1>';
                echo '<h2>Click <a href="login.php">here</a> to login.</h2>';
            }
            ?>
<!--            <p class="lead">This is where we will put the logout button</p>-->


        </div>

      <div class="row marketing">
        <div>
          <h4>Guest page</h4>
          <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. </p>

       </div>

          <?php require_once '../template/footer.php';?>
