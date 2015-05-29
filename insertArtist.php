<?php include("artistDBConnection.php") ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insert New Artist</title>
    </head>
    
    <body>
        <!--form to collect user input for new artist.!-->
        <form method = "post">
            Artist Name:
            <br>
            <input type = "text" name = "artistName">
            <br>
            Content Summary:
            <br>
            <input type = "text" name = "contentSummary">
            <br>
            Full Content:
            <br>
            <input type = "text" name = "fullContent">
            <br>
            Artist Image:
            <br>
            <input type = "file" name = "artistImage" accept = ".jpg, .jpeg, .bmp, .gif, .png">
            <br>
            <input type = "submit" value = "Submit" name = "submit">
            <br>
            
            <!--Uses user input to create a new artist record in artistTable!-->
            <?php
                $artistNameValue = $_POST["artistName"];
                $contentSummaryValue = $_POST["contentSummary"];
                $fullContentValue = $_POST["fullContent"];
                $artistImageValue = $_POST["artistImage"];
                $formInsert = "INSERT INTO artistTable VALUES($artistNameValue, $contentSummaryValue, $fullContentValue, $artistImageValue)";
            ?>
        </form>
    </body>
</html>