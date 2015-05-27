<!--Much of the following code is based on the "login.php" file that Lindsay Ward used during the Wk10 Lecture on PHP. (see "CP2010 Lecture 10-2 Authenticate Example.mov")-->

<?php 
session_start();
error_reporting(E_ALL);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TCMC - Login</title>
        <link href="stylesheet.css" rel="stylesheet">
    </head>
    
    <body>
        <div id="mainHeader">
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
<!--            <form id="login" name="login" method="post" action="secure.php">-->
            <form id="login" name="login" method="post">
                <fieldset>
                    <legend>User Login</legend>
                    <table border="0">
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo "<p style='color:red'>".$_SESSION['msg']."</p>";
                        }
                        if (!isset($_SESSION['email'])) {
                        ?>
                        <tr>
                            <td><label for="email">Email Address:</label></td>
                            <td><input type="text" name="email" id="EmailAddress"></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password:</label></td>
                            <td><input type="text" name="password" id="Password"></td>
                        </tr>
                    </table>
                    <input type="submit" name="submit" id="login" value="Login">
                </fieldset>
            </form>
            <?php } ?>
<!--
            <br>
            <pre>
            <?php print_r($_SESSION); ?>
            </pre>
            <nav>
                <a href="secure.php">Secure Page</a>
                <?php if (isset($_SESSION['username'])) echo '<a href="logout.php">Logout</a>'; ?>
            </nav>
-->
            
            <?php
//            The following functions are based on excerpts found on the HTML Form Guide web site: <http://www.html-form-guide.com/tag/php>
            function Login() {
                if(empty($_POST['email'])) {
                    $this->HandleError("You Forgot to Enter Your Email Address!");
                    return false;
                }
                if(empty($_POST['password'])) {
                    $this->HandleError("You Forgot to Enter Your Password!");
                    return false;
                }
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);
                if(!$this->userLoginDB($EmailAddress,$Password)) {
                    return false;
                }
                session_start();
                $_SESSION[$this->getLoginSessionVar()] = $email;
                return true;
            }
            function CheckLogin() {
                session_start();
                $sessionvar = $this->GetLoginSessionVar();
                if(empty($_SESSION[$sessionvar])) {
                    return false;
                }
                return true;
            }
            ?>
            
        </div>
        <div id="footer">
        <ul>
            <li><a href="home.html">Home</a></li>
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
