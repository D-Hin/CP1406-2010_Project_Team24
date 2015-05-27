<?php
    include("connectdb.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Member</title>
</head>

<body>
    <?php
    $sql = "INSERT INTO mmbrTable (userPassword, lastName, firstName, email, phoneNumber, address, type) VALUES ('$_REQUEST[password]', '$_REQUEST[lastName]', '$_REQUEST[firstName]', '$_REQUEST[email]', '$_REQUEST[phone]', '$_REQUEST[address]', '$_REQUEST[userType]')";
    $dbh->exec($sql);
    header('Location: index.php');
    exit();
    ?>
</body>

</html>