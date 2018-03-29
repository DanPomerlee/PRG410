<link href="styles.css" rel="stylesheet" type="text/css">


<div>
<?php
include "connection.php";
include "header.php";
?>
	</div>
<div class="wrapper">
<div class="signform">

<center><h1> Sign In </h1></center>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" ID="signIn" class="form2"> 
	<center><label>User Name</label> <input name="username" type="text" id="username" form="signIn"><br/></center>
	<center><label>Password</label> <input name="password" type="text" id="password" form="signIn"><br/></center>
	<center><input type="submit" value="Sign In" class="submit"></center>
	</form>
	
	<?php
	$secure_userpass=hash('sha256', $password);
	
	//see if the user is already signed in
	if(isset($_SESSION['signedIn'])&& $_SESSION['signedIn']==TRUE)
	{
	   echo "Click here to <a href='LogOut.php'>sign out</a> if you want";
	}
	else{
		 echo "<center>Please join now </center><br/>";			
	}
	
	//check sign in information
	if(isset($_POST['username'])and isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		//check database for match
		$query="SELECT * FROM users WHERE username = '$username' and password = '$secure_userpass'";
		$results = mysqli_query($connect, $query) or die(mysqli_error($connect));
		$count = mysqli_num_rows($results);
		//create sessions
		if ($count ==1){
			$_SESSION['signedIn'] = $_POST['username'];
		}
		else{
			echo "Your username or password is incorrect, please try again";
		}
	}
	//if they are already logged in
	if(isset($_SESSION['signedIn'])){
		$user = $_SESSION['signedIn'];
		header('Location:project.php');     
	}
	 else{
		 
		 echo "<center>If you are not a member please <a href='signUp.php'>click here</a> to register for a user account.</center>";
		 
	 }
		
	?>
	</div>
</div>
	</section>
<div
	<?php
	include ("footer.php");
	?>