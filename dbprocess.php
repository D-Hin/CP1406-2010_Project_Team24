<!-- Created by: William D. Gallagher !-->
<!-- 28/4/2014 !-->

<!--Establishes Connection to Database!-->

<!--The following code might only be scripted to work with Artists at present...-->
<?php 
include "artistDBConnection.php";
$debugOn = true;
?>
    
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TCMC - Database Results Page</title>
        <link href="stylesheet.css" rel="stylesheet">
    </head>
    
    <body>
        <!--Determines action based on which form has been submitted!-->
        <?php 
            echo "<h2>Form Data</h2>";
            echo "<pre>";
            print_r($_REQUEST);
            echo "</pre>";

    //        Creates a new Artist record if INSERT was selected.
            if($_REQUEST["submit"] == "Create New Artist!") {
                $sql = "INSERT INTO artistTable (artistName, artistSummary, artistFull, artistImage, artistCategory) VALUES ('$_REQUEST[insertName]', '$_REQUEST[insertSummary]', '$_REQUEST[insertFull]', '$_REQUEST[insertImage]', '$_REQUEST[insertCategory]')";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>";
                if ($dbh->exec($sql)) {
                    echo "Inserted $_REQUEST[insertName]";
                } else {
                    echo "Did not insert $_REQUEST[insertName]"; 
                }
            }

    //        Updates a pre-existing Artist record if UPDATE was selected.
            else if ($_REQUEST["submit"] == "Update Artist") {
                $sql = "UPDATE artistTable SET artistName = '$_REQUEST[updateName]', artistSummary = '$_REQUEST[updateSummary]', artistFull = '$_REQUEST[updateFull]', artistImage = '$_REQUEST[updateImage]', artistCategory = '$_REQUEST[updateCategory]' WHERE artistName = '$_REQUEST[updateName]'";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>";
                if($dbh->exec($sql))
                    echo "Updated $_REQUEST[updateName]";
                else
                    echo "Did not update $_REQUEST[updateName]"; 
            }

    //        Removes a pre-existing Artist record if DELETE was selected.
            else if($_REQUEST["submit"] == "Delete Artist") {
                $sql = "DELETE FROM artistTable WHERE artistName = '$_REQUEST[deleteName]'";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>";
                if ($dbh->exec($sql))
                    echo "Deleted $_REQUEST[deleteName]";
                else
                    echo "Did not delete $_REQUEST[deleteName]";
            }

    //        Sets the Featured Artist
            else if ($_REQUEST['submit'] == "Set Featured Artist") {
                $sql = "UPDATE featuredArtistTable SET featuredArtistName = '$_REQUEST[featuredName]' WHERE featuredArtistID = '1'";
                echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
                if ($dbh->exec($sql)) 
                    echo "Set $_REQUEST[featuredName] as current featured artist";
                else
                    echo "Did not set $_REQUEST[featuredName] as current featured artist";
            }

    //        Changes the User Type
            else if ($_REQUEST['submit'] == "Change User Type") {
                if ($_REQUEST['userType'] == "free") {
                    $sql = "UPDATE mmbrTable SET type = 'FREE' WHERE email = '$_REQUEST[userToChange]'";
                }
                if ($_REQUEST['userType'] == "paid") {
                    $sql = "UPDATE mmbrTable SET type = 'PAID' WHERE email = '$_REQUEST[userToChange]'";
                }
                if ($_REQUEST['userType'] == "admin") {
                    $sql = "UPDATE mmbrTable SET type = 'ADMIN' WHERE email = '$_REQUEST[userToChange]'";
                }
            }

            else {
                echo "This page did not come from a valid form submission.<br />\n";
            }
            echo "</strong></p>\n";
            echo "<a href='adminPage.php'>Return to Admin Page</a>";
        ?>
    </body>
</html>