<?php
    include("connectdb.php");
    session_start();
 ?>


<?php
    function validLogin($email, $password, $dbh){
        $sql = "SELECT * FROM mmbrTable WHERE email= '$email'";
            if (!$dbh->query($sql)) {
                session_destroy();
                header('Location: logIn.php');
                exit();
                }
            else {
                $sq = "SELECT * FROM mmbrTable WHERE userPassword = '$password'";
                    if (!$dbh->query($sq)) {
                        session_destroy();
                        header('Location: logIn.php');
                    exit();
                    }
                    else
                    {
                    $_SESSION['userName'] = $_REQUEST['userName'];
                    $sql = "SELECT firstName, type FROM mmbrTable";
                    foreach ($dbh->query($sql) as $row){
                    $_SESSION['userType'] = $row['type'];
                    header('Location: index.php');
                }
            }
        }
}?>