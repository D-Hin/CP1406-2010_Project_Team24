<?php
    include("dbconnect.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Artist List</title>
    </head>
    
    <body>
        <h1>Artists</h1>
        <?php
            $sql = "SELECT * FROM artistTable";
            foreach ($dbh->query($sql) as $row) {
                $image = $row['artistImage'];
                echo "<a href='fullArtistPage.php?ID=" . $row['artistID'] . "'> " . $row['artistName'] . " </a>" .' - '. $row['artistSummary'] .' - '. "<img src='images/$image'>";
                echo "<br>";
            }
            $dbh = null;
        ?>
    </body>
</html>