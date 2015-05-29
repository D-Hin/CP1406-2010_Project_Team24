<?php
    include("cdbonnect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title><?php echo $name; ?></title>
    </head>
    
    <body>
        <?php
            $currentID = $_GET['ID'];
            $sql = "SELECT * FROM artistTable WHERE artistID == $currentID";
            foreach ($dbh->query($sql) as $row) {
                $name = $row['artistName'];
                $full = $row['artistFull'];
                $image = $row['artistImage'];
            }
            echo $name . ' - ' . $full . ' - ' . "<img src='images/$image'>";
            $dbh = null;
        ?>
    </body>
</html>