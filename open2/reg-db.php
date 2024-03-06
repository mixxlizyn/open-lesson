<?php
    require "connectdb.php";
    $userEmail = isset($_POST['email']) ? $_POST['email'] : false;
    var_dump($userEmail);
    if (!preg_match("/[a-z]{1,}+@[a-z]/", $userEmail)) {
        "<script>alert(неправильно введена почта.);
        location.href = '/';
        </script>";
        exit();
    }
    $query = mysqli_query($con, "INSERT INTO `Users`(`email`) VALUES ('$userEmail')");
    if ($query) {
        "<script>alert(Вы успешно заргистрировались); location.href='/'</script>";
    } else {
        "<script>alert(вам не удалось зарегистрироваться); location.href='/'</script>";
    }
?>