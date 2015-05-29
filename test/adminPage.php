<?php
include("connectDB.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Admin Page</title>
</head>

<body>
<?php
$categories = array("A Capella", "Big Band", "Blues", "Celtic", "Classical", "Contemporary", "Instrumental", "Jazz", "Latin", "Pop", "Rock", "Traditional", "Vocal", "World");
?>
<h1>Admin Page - Modify Important Aspects of the Website</h1>
<form id="insert" name="insert" method="post" action="process.php">
<fieldset class="subtleSet">
    <h2>Insert New Artist:</h2>
    <p>
      <label for="insertName">Artist Name: </label>
      <input type="text" name="insertName" id="insertName">
    </p>
    <p>
      <label for="insertSummary">Artist Summary: </label>
      <input type="text" name="insertSummary" id="insertSummary">
    </p>
    <p>
      <label for="insertFull">Full Artist Description: </label>
      <input type="text" name="insertFull" id="insertFull">
    </p>
    <p>
      <label for="insertCategory">Artist Category (Can be multiple): </label>
      <br>
  <?php
	  foreach ($categories as $cats) {
	  	echo "<input type='checkbox' name='insertCategory' value=$cats>$cats<br>";
	  }
	  ?>
    </p>
    <p>
      <label for="insertImage">Artist Image: </label>
      <input type="file" name="insertImage" id="insertImage">
      <br>
      <input type="checkbox" name="insertThumbnailChoice" id="insertThumbnailChoice" checked="checked">
      <label for="insertThumbnailChoice">Create Thumbnail?</label>
    </p>
    <p>
      <input type="submit" name="submit" value="Insert Artist">
      <?php

?>
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
    <h3>Update Existing Artist:</h3>
    <form id="update" name="update" method="post" action="process.php">
    <p>
      <label for="updateName">Artist Name: </label>
      <select name='updateName' form='update'>
	  <?php
	  $sql = "SELECT * FROM artistTable";
	  foreach ($dbh->query($sql) as $row) {
	  	echo "<option value='$row[artistName]'>$row[artistName]</option>";
	  }
	  ?>
      </select>
    </p>
    <p>
      <label for="updateSummary">Artist Summary: </label>
      <input type="text" name="updateSummary" id="updateSummary">
    </p>
    <p>
      <label for="updateFull">Full Artist Description: </label>
      <input type="text" name="updateFull" id="updateFull">
    <p>
      <label for="updateCategory">Artist Category (Can be multiple): </label>
      <br>
      <?php
	  foreach ($categories as $cats) {
	  	echo "<input type='checkbox' name='updateCategory' value=updateCategory>$cats<br>";
	  }
	  ?>
    </p>
    </p>
      <label for="updateImage">Artist Image: </label>
      <input type="file" name="updateImage" id="updateImage">
    <p>
      <input type="submit" name="submit" value="Update Artist">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
	<h4>Delete Existing Artist:</h>
    <form id="delete" name="delete" method="post" action="process.php">
    <p>
      <label for="deleteName">Artist Name: </label>
      <select name='deleteName' form='delete'>
<?php
	  $sql = "SELECT * FROM artistTable";
	  foreach ($dbh->query($sql) as $row) {
	  	echo "<option value='$row[artistName]'>$row[artistName]</option>";
	  }
	  ?>
      </select>
    </p>
    <p>
      <input type="submit" name="submit" value="Delete Artist">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
    <h4>Set Featured Artist:</h4>
    <form id="featured" name="featured" method="post" action="process.php">
    <p>
      <?php
	  $getCurrentFeatured = "SELECT featuredArtistName FROM featuredArtistTable WHERE featuredArtistID = '1'"; 
	  foreach ($dbh->query($getCurrentFeatured) as $f) {
	  	$currentFeatured = $f['featuredArtistName'];
	  }
	  echo "<h5>Current Featured Artist: $currentFeatured</h5>"; 
      ?>
    </p>
    <p>
      <label for="featuredName">Select New Featured Artist: </label>
      <select name='featuredName' form='featured'>
	  <?php
	  $sql = "SELECT * FROM artistTable";
	  foreach ($dbh->query($sql) as $row) {
	  	echo "<option value='$row[artistName]'>$row[artistName]</option>";
	  }
	  ?>
      </select>
    </p>
    <p>
      <input type="submit" name="submit" value="Set Featured Artist">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
    <h5>Change User Type:</h5>
    <form id="changeUserType" name ="changeUserType" method = "post" action ="process.php">
        <label for = "userToChange">User Name:</label>
        <input type = "text" name = "userToChange" id = "userToChange">
        <label>User Type:</label>
        <input type="radio" name = "userType" value = "free">Free
        <input type = "radio" name = "userType" value = "paid">Paid
        <input type = "radio" name = "userType" value = "admin">Admin
        <input type="submit" name="submit" value="Change User Type">
        </p>
    </form>
</body>
</html>
