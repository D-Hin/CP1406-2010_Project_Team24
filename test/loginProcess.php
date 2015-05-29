<?php
    include("connectdb.php");
    session_start();
 ?>


<?php
    function validLogin($email, $password, $dbh){
                        $sessionUser = $email;
                        $sessionPassword = $password;
        
                        $sessionUser = stripslashes($sessionUser);
                        $sessionPassword = stripslashes($sessionPassword);
                        $sessionUser = mysql_real_escape_string($sessionUser);
                        $sessionPassword = mysql_real_escape_string($sessionPassword);
                        echo"$sessionUser";
                        echo"$sessionPassword";
        $sql = "SELECT email FROM mmbrTable WHERE email= '$sessionUser'";
            //is there a way to echo the result of this ?     
        if (!$dbh->query($sql)) {
                echo "Username failed";
                //header('Location: logIn.php');
                //exit();
                }
            else {
                $sql = "SELECT userPassword FROM mmbrTable WHERE userPassword = '$sessionPassword'";  
                if (!$dbh->query($sql)) {
                    echo "Password failed";
                    //header('Location: logIn.php');
                    //exit();
                    }
                    else
                    {
                        / $_SESSION["userName"] = $sessionUser;
                        echo "Session Started";
                }
            }
        }

validLogin($_REQUEST['userName'], $_REQUEST['passWord'], $dbh);
?>