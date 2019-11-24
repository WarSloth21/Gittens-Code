<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>VLRMS</title>
    <script type="text/javascript" src="js/login.js"></script>
</head>

<body>
    <div class="wrapper">
        <a href="index.html">
            <img src="img/coat-of-arms.png"    alt="Barbados Coat of Arms" align="left" style="display: inline"><br>
        </a>
            <div class="toptxt">
            <h2>Barbados Revenue Authority</h2>
            <h3>Vehicle Licensing and Registration System</h3>
            <br>
            <h2>Account Registeration</h2>
            <h4>All fields required</h4>
            </div>

        <div class="form">
        <form id = "form" action = "registration.php" method = "POST" autocomplete = "off">
              
              <label><b>National ID:</b></label>
              <input id = "id" type = "text" name = "natl_id" 
                value = "<?php if (isset($natl_id)): echo $natl_id; endif; ?>"
               <?php 
                if (isset($errors['natl_id'])): ?>
                     class = "err" 
                <?php endif; ?> > &nbsp;
        <span class = "result" id = "id">
    <?php if (isset($errors['natl_id'])): echo $errors['natl_id']; endif; ?></span>
              <br><br>


              <label><b>License Number: </b></label>
              <input id = "license_num" type = "text" name = "license_num"
               value = "<?php if (isset($license_num)): echo $license_num; endif; ?>"
               <?php 
                if (isset($errors['license_num'])): ?>
                     class = "err" 
                <?php endif; ?> > &nbsp;
        <span class = "result" id = "license_id">
    <?php if (isset($errors['license_num'])): echo $errors['license_num']; endif; ?></span>
              <br><br>


              <label><b>First Name: </b></label>
              <input id = "first_name" type = "text" name = "first_name"
              value = "<?php if (isset($first_name)): echo $first_name; endif; ?>"
               <?php 
                if (isset($errors['first_name'])): ?>
                     class = "err" 
                <?php endif; ?> > &nbsp;
                <span class = "result" id = "firstname">
                <?php if (isset($errors['first_name'])): echo $errors['first_name']; endif; ?></span>
                    <br><br> &nbsp;
              
                    <label><b>Last Name: </b></label>
                    <input id = "last_name" type = "text" name = "last_name"
                    value = "<?php if (isset($last_name)): echo $last_name; endif; ?>"
                    <?php 
                        if (isset($errors['last_name'])): ?>
                            class = "err" 
                        <?php endif; ?> > &nbsp;
                        <span class = "result" id = "lastname">
                        <?php if (isset($errors['last_name'])): echo $errors['last_name']; endif; ?></span>
                            <br><br> &nbsp;

                    <label><b>Email: </b></label>
                    <input id = "email" type = "email" name = "email" 
                    value = "<?php if (isset($email)): echo $email; endif; ?>"
                    <?php 
                        if (isset($errors['email'])): ?>
                            class = "err" 
                        <?php endif; ?> > &nbsp;
                        <span class = "result" id = "email">
                        <?php if (isset($errors['email'])): echo $errors['email']; endif; ?></span>
                            <br><br> &nbsp;


                    <label><b>Password: </b></label>
                    <input id = "psw" type = "password" name = "psw" 
                    value = "<?php if (isset($psw)): echo $psw; endif; ?>"
                    <?php 
                    if (isset($errors['psw'])): ?>
                            class = "err" 
                    <?php endif; ?> > &nbsp;
                    <span class = "result" id = "psw">
                    <?php if (isset($errors['psw'])): echo $errors['psw']; endif; ?></span>
                        <br><br> &nbsp;


                    <label>Telephone:</label>
                    <input id = "tel1" type = "text" size="3" maxlength="3" name = "telephone[]"> &nbsp; - &nbsp;
                    <input id = "tel2" type = "text" size ="6" maxlength="4" name = "telephone[]">
                    <span class = "result" id = "tel12"></span>
                    <br><br>
                    
                    <label>Address 1:</label>
                    <input id = "Address" class = "add" type = "text" name = "addr[]">&nbsp;
                    <span class = "result" id = "address"></span> 
                    <br><br>

                    <label>Address 2:</label>
                    <input id = "Address2" class = "add" type = "text" name = "addr[]">&nbsp;
                    <span class = "result" id = "address"></span> 
                    <br><br>
              

                    <input type="hidden" name="validation_done_by_js" value="">


                    Parish <select name="parish" id="parish">
                        <option value="-- Choose One --"> -- Choose One --</option> 
                        <option value="St.Lucy">St.Lucy</option>
                        <option value="St.Peter">St.Peter</option>
                        <option value="St.Andrew">St.Andrew</option>
                        <option value="St.James">St.James</option>
                        <option value="St.Joseph">St.Joseph</option>
                        <option value="St.George">St.George</option>
                        <option value="St.Thomas">St.Thomas</option>
                        <option value="St.John">St.John</option>
                        <option value="St.Michael">St.Michael</option>
                        <option value="St.Philip">St.Philip</option>
                        <option value="Christ Church">Christ Church</option>
                    </select>
                    <br><br>

                    <p id = "status"></p>

                    <button id = "add" class = "btn" type = "submit" name = "add_driver" value = "add">Register</button> &nbsp; &nbsp;

                     <button class= "btn" type = "submit" name = "cancel_add" value = "cancel">Cancel</button>

                    
                </div>
            </form>
        </div>

    </div>
</body>