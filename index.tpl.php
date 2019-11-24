<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>VLRMS</title>
    <script type="text/javascript" src="js/login.js"></script>
</head>

<body onload="loadData()">
    <div class="wrapper">
            <img src="img/coat-of-arms.png" alt="Barbados Coat of Arms" align="left" style="display: inline; padding-left: 50px"><br>
        <div class="toptxt">
            
            <h2>Barbados Revenue Authority</h2>
            <h3>Vehicle Licensing and Registration System</h3>
            <br>
            <h2>Driver Sign In</h2>
        </div>

        <div class="form">
            <form id = "logform" action = "index.php" method = "POST" autocomplete = "off">
            <?php
                if (isset($errors) && !empty($errors)): ?>
                  <ul>
                <?php
                  foreach ($errors as $err_msg): ?>
                     <li><?php echo $err_msg ?></li>
                <?php 
                  endforeach; ?>
                  </ul>
              <?php
              endif; ?>
                <div class="container" id="container">
                National ID : <input id = "id" type = "text" name = "natl_id" value = "<?php if (isset($natl_id)): echo $natl_id; endif; ?>"
               <?php 
                if (isset($errors['natl_id'])): ?>
                     class = "err" 
                <?php endif; ?> > &nbsp;
                <span class = "result" id = "id">
                <?php if (isset($errors['natl_id'])): echo $errors['natl_id']; endif; ?></span>
                    <br><br>


                Password <input type="password" id="psw" placeholder="******" name="psw"  >
                <span id="passwordErr"> </span>
                <br><br>
                    
                    <button id = "login" class = "btn" type = "submit" name = "login" value = "login">Sign In</button> &nbsp; &nbsp;
                    
                    <br><br>
                    <a href="#">Forgot Password</a>
                    <a href="registration.php">Sign Up</a>
                </div>
            </form>
        </div>

    </div>
</body> 