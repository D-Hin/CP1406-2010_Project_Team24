<?php
    include("connectdb.php");
    session_start();
 ?>

<?php
    $sql = "SELECT * FROM mmbrTable";      
    foreach ($dbh->query($sql) as $rows) {
        if ($rows['email'] == $_REQUEST['userName']) {
            if($rows['userPassword'] == $_REQUEST['passWord']) {
                $_SESSION['Status'] = "Logged in";
                $_SESSION['Permission'] = $rows['type'];
                $_SESSION['Username'] = $rows['email'];
                header('Location: index.php');
                exit();
            } else {
            $_SESSION['ERROR'] = "Innocrect Password";
            header('Location: logIn.php');
            exit();
            }
        } else {
        $_SESSION['ERROR'] = "Inncorrect Username";
        header('Location: logIn.php');
        exit();
        }
    }
?>