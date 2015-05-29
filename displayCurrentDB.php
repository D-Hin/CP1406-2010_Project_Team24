<!-- Created by: William D. Gallagher   (28/4/2014) !-->
<!-- Editted by: Domninic Hin           (14/5/2015) !-->

<!--Establishes Connection to Database!-->
<?php include("artistDBConnection.php") ?>

<html>
    <head></head>
    
    <body>
        <!--Selects all records currently in the database and prints them !-->
        <h1>Current Artists</h1>
        <?php
            $sql = "SELECT * FROM artistTable";
            $result = $dbh->query($sql);
            echo "<pre>";
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            echo count($rows). "Artists";
            print_r($rows);
            echo "</pre>";
        ?>
        
        <h1>Current Users</h1>
        <?php
            $sql = "SELECT * FROM users";
            $result = $dbh->query($sql);
            echo "<pre>";
            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
            echo count($rows). "Users";
            print_r($rows);
            echo "</pre>";
        ?>
    </body>
    
    <footer></footer>
    
</html>