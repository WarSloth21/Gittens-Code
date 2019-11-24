<?php

?>


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
            <br><br>
            <h2>Upload an Image of Your Driver's License</h2>
        </div>

        <div class="form">
            <form action="license_upload.php" method="POST" enctype="multipart/form-data">
                <div class="container" id="container">
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

                    Driver's License Image <input type="file" id="license_image"  name="license_image"
                    value = "<?php if (isset($license_image_file)): echo $license_image_file; endif; ?>"
                    <?php 
                        if (isset($errors['license_image_file'])): ?>
                            class = "err" 
                        <?php endif; ?> > &nbsp;
                        <span class = "result" id = "license_image">
                        <?php if (isset($errors['license_image'])): echo $errors['license_image']; endif; ?></span>
                            <br><br> &nbsp;                    
                    <br><br>
                    
                    <button id = "add" class = "btn" type = "submit" name = "add_license_img" value = "add">Upload</button> &nbsp; &nbsp;

                    <button class= "btn" type = "submit" name = "cancel_add" value = "cancel">Cancel</button>
                    
                </div>
            </form>
        </div>

    </div>
</body> 