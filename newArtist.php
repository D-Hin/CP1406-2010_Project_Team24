<!-- Created by: William D. Gallagher !-->
<!-- 28/4/2014 !-->

<html>

    <head></head>
    
    <body>
        <!-- Form to gather infomation for creating a new artist record !-->
        <form method="post" action="dbprocess.php">
            <h1>List New Artist</h1>
            Artist Name:<br>
            <input type = "text" name = "artistName">
            Artist Summary: <br>
            <input type = "text" name = "artistContentSummary">
            Artist Description: <br>
            <input type="text" name="artistContentFull">
            Artist Image: <br>
            <input type="file" name="artistImage"> 
            <input type="submit" name="submit" value="Create New Artist!">
        </form>
    </body>
    
    <footer></footer>

</html>
