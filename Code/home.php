<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Hello </h1>



    <h4> <?php echo $_SESSION['email']; ?> </h4>


    <h4> <?php print_r($_SESSION['UserInfo']); ?> </h4>

    <?php
    foreach ($_SESSION['UserInfo'] as $elem) {
        echo "<br>";
        echo " $elem ";
    }





    ?>


</body>

</html>