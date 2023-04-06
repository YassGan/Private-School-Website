<?php


//variables used to test the connexion process
$userExistenceTest = 2;
$passwordTest = 2;
$pupilExistenceTest=2;
$PupilpasswordTest = 2;

$numPupil2=-1;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];


    //pupil authentifiacation
    $sqlPupil = "select * from `élèvetable` where emailelève='$email'";
    $resultPupil = mysqli_query($con, $sqlPupil);
    if ($resultPupil) {
        $numPupil = mysqli_num_rows($resultPupil);
        if ($numPupil > 0) {
            //  echo "user already exists";
            $pupilExistenceTest = 1;
            // Now we have to check the password
            $sqlPupil2 = "select * from `élèvetable` where emailelève='$email' and password='$password'";
            $resultPupil2 = mysqli_query($con, $sqlPupil2);
            $numPupil2 = mysqli_num_rows($resultPupil2);
            $PupilInfoArray = array();
            if ($numPupil2 > 0) {
                $PupilpasswordTest = 1;
                while ($row = mysqli_fetch_assoc($resultPupil2)) {
                    $PupilInfoArray = $row;
                }
            } else {
                $PupilpasswordTest = 0;
            }
        }
        if ($numPupil == 0) {
            $pupilExistenceTest = 0;
        }
    }











    //verifying for the admin session
    $sql = "select * from `logintable` where email='$email'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            //  echo "user already exists";
            $userExistenceTest = 1;
            // Now we have to check the password
            $sql2 = "select * from `logintable` where email='$email' and password='$password'";
            $result2 = mysqli_query($con, $sql2);
            $num2 = mysqli_num_rows($result2);
            $UserInfoArray = array();
            if ($num2 > 0) {
                $passwordTest = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    $UserInfoArray = $row;
                }
            } else {
                $passwordTest = 0;
            }
        }
        if ($num == 0) {
            $userExistenceTest = 0;
        }
    }
}

?>

<?php


// verification of the connexion process and the response of the result
if ($userExistenceTest == 0 and $pupilExistenceTest==0) {
        echo '
    <div class="alert alert-danger" role="alert">
    <strong> Error </strong>  No valid data was found
    </div>
    ';
      //  header("Location:https://www.youtube.com/");
}


if ($userExistenceTest == 1 and $passwordTest == 0) {
        echo '
    <div class="alert alert-warning" role="alert">
    <strong> Warning </strong>   User already exists but the password is wrong
    </div>
    ';
        header("Location:loginPage.php?Passworderror=False password/" . $email);
}



if ($passwordTest == 1 and $userExistenceTest == 1) {
        echo '
    <div class="alert alert-success" role="alert">
    <strong> Success </strong>  User logged in successfully
    </div>
    ';

    session_start();
    $_SESSION['email'] = $email;

    $_SESSION['UserInfo'] = $UserInfoArray;

    if ($email == 'yassinegana@gmail.com') {
        header('location:adminSession/Pages/AdminDashboardPage/adminDashboard.php');
    }



    //redirection à la session adéquate
    // if ($_SESSION['UserInfo']["password"] == "123") {

    //     header('location:home.php');
    // } else {
    //     echo "<h1> Session client </h1>";
    // }
}



if ($pupilExistenceTest == 1 and $PupilpasswordTest == 0) {
        echo '
    <div class="alert alert-warning" role="alert">
    <strong> Warning </strong>   User already exists but the password is wrong
    </div>
    ';
        header("Location:loginPage.php?Passworderror=False password/" . $email);
}



if ($PupilpasswordTest == 1 and $pupilExistenceTest == 1) {
        echo '
    <div class="alert alert-success" role="alert">
    <strong> Success </strong>  User logged in successfully
    </div>
    ';

        session_start();
        $_SESSION['email'] = $email;

        $_SESSION['PupilInfo'] = $PupilInfoArray;

           
        
        header('location:clientSession/clientPages/clientDashboardPage/clientDashboardPage.php');



        //redirection à la session adéquate
        // if ($_SESSION['UserInfo']["password"] == "123") {

        //     header('location:home.php');
        // } else {
        //     echo "<h1> Session client </h1>";
        // }
}


// echo("pupilExistenceTest ".$pupilExistenceTest);
// echo("PupilpasswordTest ".$PupilpasswordTest);

// echo("userExistenceTest ".$userExistenceTest);
// echo("passwordTest ".$passwordTest);

// echo("numPupil2 ".$numPupil2);



?>















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <?php
    require_once("links.php");
    ?>


</head>

<body>









    <div class="min-vh-100 container d-flex align-items-center  ">

        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-5 px-5 pb-5 bg-light rounded ">
                    <h1 class="text-center mt-5 mb-4 fs-2">Login</h1>

                    <div>
                        <form action="loginPage.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control  " id="exampleInputEmail1"
                                    value="<?php if ((isset($_GET['Emailerror']))) {
                                                                                                                            $RightEmailWrongPasswordOnSearchBar = $_GET['Emailerror'];
                                                                                                                            $RightEmailWrongPassword = trim($RightEmailWrongPasswordOnSearchBar, "No user was found/");
                                                                                                                            echo $RightEmailWrongPassword;
                                                                                                                        } ?>


<?php if ((isset($_GET['Passworderror']))) {
    $RightEmailWrongPasswordOnSearchBar = $_GET['Passworderror'];
    $RightEmailWrongPassword = trim($RightEmailWrongPasswordOnSearchBar, "False password/");
    echo $RightEmailWrongPassword;
} ?>
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                        ">


                                <?php if (isset($_GET['Emailerror'])) { ?>
                                <p style="color:red;">
                                    <?php
                                        echo "No user was found with this email";
                                        ?>
                                </p>


                                <?php  } ?>


                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1">


                                <?php if (isset($_GET['Passworderror'])) { ?>
                                <p style="color:red;">
                                    <?php
                                        echo "wrong password";
                                        ?>
                                </p>


                                <?php  } ?>


                                <div class="fs-6 d-flex justify-content-end mt-2"> <a href="#"> Password forgot ? </a>
                                </div>
                            </div>

                            <div class="pt-3 d-flex justify-content-center">
                                <button type="submit" class="w-75 rounded-pill btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>




                </div>

            </div>
        </div>
    </div>










</body>

</html>