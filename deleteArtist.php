<!-- Created by: William D. Gallagher !-->
<!-- 28/4/2014 !-->

<?php include("artistDBConnection.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <!-- Version 0.01 of this page is NOT working, still fiddling. !-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>

    <body>
        <h1>Delete Artist.</h1>
        <!-- Form to collect user input on which artist to delete !-->
        <form method="post" action="processing.php">
        Artist Name: <br>
            <input type="text" name = "artistName">
            <input type="submit" name = "submit" value="Delete Artist">
        </form>
        
        <?php // Uses input from Form to select which record to delete.
            $artistToDelete = $_POST["artistToDelete"];
            dbh -> exec('DELETE FROM artistTable WHERE artistName = $artistToDelete"');
        ?>
    </body>
    
    <footer></footer>
    
</html>
