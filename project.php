<link href="styles.css" rel="stylesheet" type="text/css">
<?php
include('header.php');
?>
<div class="grid">
<div class="section"></div>	
    <div class="copy">
	<h1>Objectives</h1>
	<ul>
	<li>CO 01 - Program PHP to connect to a MySQL database</li>
    <li>CO 02 - Create a PHP website that maintains sessions</li>
    <li>CO 03 - Integrate PHP and MySQL object-oriented features to store web form data</li>
    <li>CO 04 - Identify and apply appropriate syntax usage for debugging, security, scripting, error handling, and data validation</li>
    <li>CO 05 - Create a dynamic web application utilizing server components and Web controls</li>	
	</ul>
	<p>What I have learned from this months class?  I have learned how to use PHP in Dreamweaver.  This allowed me to build web pages and demonstrate how to use them and view them by going to the internet using a localhost command.  I also learned how to use MySQL to build a database that will interact with Dreamweaver files or web pages.  PHP can also run or function with various platforms such as Window, Linux, Unix and Mac OS X.  When speaking of MySQL the question that was discussed; why do we use SQLi instead of SQL.  The reason is that MySQLi gives you prepared statement, the program is object oriented, it supports transactions and multiple statements.  It is also good for security and stability.</p>
	
	<p>While working with this module using PHP I learned how to create a Header, Footer, SignIn, SignUp, and a connection page to make all the pages work together to make a Login website with a database to capture the people login information. Part of the login database included how to use Session Start and Session Destroy to elp with providing security of personnel signing onto the website.  We also used Web Server and Post method to move from one page to the next one.  The use of Adobe Color scheme was use when preparing my style.css page for my website.  Different sorts of tags were used to help complete the project.  Tags such as Nav, Ordered List, Label, Grid, and many more were used to help develop the pages created.</p>
	</div>
	<div class="display">
	<img src="Images/displaySignIn.PNG" alt="User Login System Home Screen" class="logImg">
	</div>	 
</div>
   <div class="card">
  <div class="card-body">
    <h5 class="card-title">Header.php</h5>
	  <img src="Images/header_php.PNG" alt="header code snap shot">
    <p class="card-text">The code is used to call in the style sheet to help make the page<br>
		look the way it is looking.  A created is the Menu tabs by use of an ordered list with <br>
		the use of Nav Tags.  The Session start and was used to help ensure security and stability of the website.</p>
    <a href="#" class="card-link">https://github.com/DanPomerlee/PRG410/blob/master/header.php</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
      <div class="card2">
  <div class="card-body">
    <h5 class="card-title">SignIn.php</h5>
	  <img src="Images/SignIn_php.PNG" alt="SignIn code snap shot">
    <p class="card-text">This code represent the session code used for security and stability.<br>
		We used the Post method to help write data to the MySQL database that will capture the user <br>
		login information.  Also will prompt the user if the password is correct if it has been login in <br>
		on the SignIn page correctly.</p>
    <a href="#" class="card-link">https://github.com/DanPomerlee/PRG410/blob/master/SignIn.php</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    <div class="card3">
  <div class="card-body">
    <h5 class="card-title">connection.php</h5>
	  <img src="Images/connection_php.PNG" alt="Connection code snap shot">
    <p class="card-text">Connection code was created to let you know if you were connected to the <br> 
	  MySQL datatbase.  If you were not conected you would get a failed message and if you were <br>
	  you would get the message Database connected.</p>
    <a href="#" class="card-link">https://github.com/DanPomerlee/PRG410/blob/master/connection.php</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
    <div class="card4">
  <div class="card-body">
    <h5 class="card-title">LogOut.php</h5>
	  <img src="Images/Logout_php.PNG" alt="LogOut code snap shot">
    <p class="card-text">In order for your information to be used accross multiple pages you have to use the Session Start. <br>
	   This information is not use like a cookie and stored on the user computer.  The purpose of the Session Destroy <br>
	  is to destroy all related instances of connectivity to the current pages you had contact with.  To get them<br>
	  them back you have to sign in again.</p>
    <a href="#" class="card-link">https://github.com/DanPomerlee/PRG410/blob/master/LogOut.php</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
 <div class="card5">
  <div class="card-body">
    <h5 class="card-title">signUp.php</h5>
	  <img src="Images/signUp_php.PNG" alt="signUp code snap shot">
    <p class="card-text">The purpose of this page is to capture the information that will be going into the <br> 
	  MySQL database.  The information you want from the user is assigned here with this code.</p>
    <a href="#" class="card-link">https://github.com/DanPomerlee/PRG410/blob/master/signUp.php</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
</section>
<?php
include('footer.php');
?>