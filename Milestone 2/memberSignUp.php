<head>
    <meta charset="utf-8">
    <title>TCMC - Member Signup</title>
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
                <li><a href="events.html">Events</a></li>
                <li><a href="talent.html">Local Talent</a></li>
                <li><a href="bulletin.html">Bulletin Board</a></li>
                <li><a href="apply.html">Apply</a>
                    <ul>
                        <li><a href="memberSignup.html">Become A Member</a></li>
                        <li><a href="volunteer.html">Volunteer for TCMC</a></li>
                        <li><a href="performSignup.html">Perform with Us</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
            </ul> 
        </div>
    </div>
    
    <div id="content">
    <h1>Become a Memeber Today!</h1>
        
<strong>Members recieve up to a 50% discount on all TCMC events!</strong>
        
<p>Support the Music Centre by becoming a member. You subscription helps to keep us operating, as well as providing you with substantial discounts on tickets and events!</p>
        
<p>The Townsville Community music centre is a registered <strong>Deductible Gift Recipient</strong>! Donations are tax deductible.</p>
        
<strong> Membership is just $25 a year!</strong>
        <form id="insert" name="insert" method="post" action="createUser.php">
            <fieldset>
                <legend>Become a Member</legend>
                <table border="0">
                    <tr>
                        <td><label for="lastName">*Last Name:</label></td>
                        <td><input type="text" name="lastName" id="lastName"></td>
                    </tr>
                    <tr>
                        <td><label for="firstName">*First name:</label></td>
                        <td><input type="text" name="firstName" id="firstName"></td>
                    </tr>
                    <tr>
                        <td><label for="email">*Email:</label></td>
                        <td><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td><label for="password">*Password:</label></td>
                        <td><input type="text" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone:</label></td>
                        <td><input type="text" name="phone" id="phone"></td>
                    </tr>
                    <tr>
                        <td><label for="Address">Address:</label></td>
                        <td><input type="text" name="address" id="address"></td>
                    </tr>
                    <tr>
                        <input type="radio" name="userType" value="FREE" /> Free<br>
  			<input type="radio" name="userType" value="PAID" /> Paid<br>
                    </tr>
                </table>
                <input type="submit" name="submit" id="submit" value="Submit">
            </fieldset>
        </form>
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