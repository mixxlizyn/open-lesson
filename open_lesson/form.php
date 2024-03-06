<?php
    require "connect.php";
    $email = $_GET["email"] ? $_GET["email"] : false;
    $correctEmail = preg_match("/[a-z, 0-9]{1,}@[a-z]{1,}.[a-z]/i", $email);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form-style.css">
    <title>Регистрация</title>
</head>
<body>
<section class="section">
    <div class="container">
        <div class="reg_overlay">
            <h2>Upgrade your home today?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id risus vulputate tortor, risus ut Viverra viverra aliquam, semper duis a aliquam.</p>
            <form action="#email" method="GET">
                <div class="reg">
                    <input type="text" name="email" class="email" id="email" placeholder= "enter your email address">
                    <input type="submit" name="submit" class="submit" value="Continue">
                </div>
                <?php
                if ($email) echo (!$correctEmail) ? "<p style='color: red'>Введите корректную электронную почту!</p>" : false; 
                if ($correctEmail) {
                    $query = mysqli_query($con, "INSERT INTO `Users`(`email`) VALUES ('$email')");
                }
                ?>

            </form>
        </div>
    </div>
</section>


</body>
</html>