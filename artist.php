<?php
    include "artistDBConnect.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Artist Details</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700|Dancing+Script:400,700' rel='stylesheet' type='text/css'>
</head>
    
<body>

<div id="mainHeader">
    <a href="index.html"><img src="Images/violinmusiccentre%20copy.png" alt="Townsville community music center logo"></a>
    <h1><span>Townsville Community Music Centre</span></h1>
    
<div id="navigation">  
<ul>
    <li><a href="index.html" class="current">Home</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="talent.html">Local Talent</a></li>
    <li><a href="bulletin.html">Bulletin Board</a></li>
    <li><a href="apply.html">Apply</a>
         <ul>
            <li><a href="memberSignUp.php">Become A member</a></li>
            <li><a href="volunteer.html">Volunteer for TCMC</a></li>
            <li><a href="performSignup.html">Perform with us</a></li>
        </ul>
    </li>
    <li><a href="about.html">About Us</a></li>
</ul> 
</div>
</div>
    
<div id="content">
    <h1>Artist Details</h1>
    <?php
        $artistName = $_REQUEST['artist'];
        $sql = "SELECT * FROM artistTable WHERE artistName = '$artistName'";
        $result = $dbh -> query($sql);
        echo "$artistName <br>";
        foreach($result as $rows) {
            echo"$rows[artistContentFull]<br>";
        }
        echo "<a href = 'index.php'>Home</a>";
    ?>


<div class="section group">
	<div class="col span_1_of_2">
<br>
<br>
<img src="Images/AquapellaTalent.png" alt="Aquapella Band">
</div>

	<div class="col span_1_of_2">
<h2>Aquapella</h2>
    
    <p>Aquapella are 50 singers from the Townsville area bringing you acappella world music at its very best: inspiring and uplifting harmonies from around the globe. A South African party song, a Hungarian love triangle, "The Lion Sleeps Tonight" in French - a sumptuous variety of different languages, stories, rhythms and moods to entertain and move you in the wonderful common language of music. Come along and travel the world by song!</p>

    <p>Aquapella delves into the incredible variety and depth of acappella world music and the cultures it represents, is not only fun, but a very enriching and uplifting experience.</p>  
    
<h3>Contact Us</h3>

    <p>Have an event you'd like us to attend? Want to join us, or find out more? Please <a href="mailto:beatlehmann@iprimus.com.au">email us</a> with any questions!</p>
</div>
    
</div>
    

<div id="footer">
<ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="events.html">Events</a></li>
    <li><a href="bulletin.html">Bulletin Board</a></li>
    <li><a href="feeder.html">Music Benefits</a></li>
    <li><a href="talent.html">Local Talent</a></li>
    <li><a href="apply.html">Apply</a></li>
    <li><a href="about.html">About Us</a></li>
    <li><a href="about.html">Contact Us</a></li>
</ul>    
</div>    
</body>
</html>