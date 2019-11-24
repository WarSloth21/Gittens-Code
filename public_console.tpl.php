<?php
    session_start(); 

    
if (isset($_SESSION['authenticated_user']) ) {
    
} else {
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="console.css">
    <title>Console</title>
    <script type="text/javascript" src="js/login.js"></script>
</head>


<body onload="checkStatus()">
    <div class="wrapper">
        <div class="toptxt">
            <div class="dropdown">
                <button onclick="dropDownMenu()" class="dropbtn">
                  <div class="menuicon"> </div>
                  <div class="menuicon"> </div>
                  <div class="menuicon"> </div>
                </button>

                <div id="myDropdown" class="dropdown-content">
                  <a href="logout.php" onclick="logOut()">Log Out</a>
                </div>
            </div>
            <img src="img/coat-of-arms.png" alt="Barbados Coat of Arms" align="left" style="display: inline; padding-left: 50px"><br>
            <div class="toptxt">
                
            <h2>Barbados Revenue Authority</h2>
            <h3>Vehicle Licensing and Registration System</h3>
            
        </div>

        <div class="head">
            <div class="left">
                <h3>Name: <?php  echo $_SESSION["authenticated_user"]['name']; ?> </h3>
                </div>
            <div class="right">
                <h3>License No.: <?php echo $_SESSION["authenticated_user"]['licence_num']; ?> </h3>
            </div>
        </div><br><br><br><br><br><br>

        <table align="center">
            <tr>
                <td>
                    <a href="#">
                        <div class="column">
                            <h4>Renew License</h4>
                        </div>
                    </a>
                </td>

                <td>
                    <a href="#">
                        <div class="column">
                            <h4>Change Vechile</h4> <h4>Registeration</h4>
                        </div>
                    </a> 
                </td>
            </tr>

            <tr>
                <td>
                    <a href="#">
                        <div class="column"> 
                            <h4>Request Sticker</h4>
                        </div>
                    </a>
                </td>

                <td>
                    <a href="#">
                        <div class="column"> 
                            <h4>Register Vehicle</h4>
                        </div>
                    </a>
                </td>

            </tr>
        </table>

    </div>
</body>
</html>