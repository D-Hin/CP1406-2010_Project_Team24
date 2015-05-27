<?php
include("artistDBConnection.php")
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Existing Artist</title>
</head>

    <body>
        <!-- form to update pre-existing artist record!-->
        <form method="post" action="processing.php">
            <h1>Update Artist</h1>
            <?php
                $sql = "SELECT * FROM artistTable";
                foreach($dbh->query($sql) as $row) {
                    echo"<input type = 'text' name = 'artistName' value = '$row[artistName]' />
                        <input type = 'textarea' name = 'artistContentSummary' value = '$row[artistContentSummary]' />
                        <input type = 'textarea' name = 'artistContentFull' value = '$row[artistContentFull]' />
                        <input type='hidden' name='id' value='$row[ID]'>
                        <input type='submit' name = 'submit' value='Update Artist'>
                        <br>";    
                }
                echo"<a href='index.php'>index</a>;";
            ?>
            
<!--    Will need to establish a method for displaying all current artists. Working on that once delete is finished!
            <input type = "radio" name = "artistToUpdate" value = "ARTIST1"> 
            <br>
            Artist Name:<br>
            <input type = "text" name = "artistName">
            <br>
            Content Summary:<br>
            <input type = "text" name = "contentSummary">
            <br>
            Full Content:<br>
            <input type = "text" name = "fullContent">
            <br>
            Artist Image:<br>
            <input type = "file" name = "artistImage" accept = ".jpg, .jpeg, .bmp, .gif, .png">
            <br>
            <input type = "submit" value = "Submit" name = "submit">
            <br>

            <?php
                $artistToUpdateValue = $_POST["artistToUpdate"];
                $artistNameValue = $_POST["artistName"];
                $contentSummaryValue = $_POST["contentSummary"];
                $fullContentValue = $_POST["fullContent"];
                $artistImageValue = $_POST["artistImage"];
                $formInsert = "UPDATE artistTable SET VALUES($artistNameValue, $contentSummaryValue, $fullContentValue, $artistImageValue) WHERE artistName = $artistToUpdateValue";
            ?>
-->
        
        </form>
        
    </body>
    
    <footer></footer>
    
</html>