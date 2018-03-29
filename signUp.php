<link href="styles.css" rel="stylesheet" type="text/css">
<div>
<?php
include("connection.php");
include("header.php");
?>
	</div>
<div class+"wrapper">
<div class="regForm">
<h1> Member Sign Up</h1>

<?php
	
	
	//variable strick for error checking
	$nameErr= $userErr= $passErr= $passschErr= $emailErr= $fname= $username= $userpass= $userpassch= $email="";
	
    $secure_userpass=hash('sha256', $password);
	
	//check for errors
	   if ($_SERVER["REQUEST_METHOD"] == "POST"){
		   //function to display errors
		   
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
			return $data;		   
	 }
		 if (empty($_POST["fname"])) {
	 $nameErr= "Your name is required";
	}
		else {
			$fname = test_input($_POST["fname"]);
	}
	     if (empty($_POST["username"])) {
	 $userErr = "User name is required";
			
	}
		else{
			$username = test_input($_POST["username"]);
	}
		 if (empty($_POST["userpass"])) {
	 $passErr = "Your password is required";
	}
		   elseif (strlen("userpass") < 6){
			   $passchErr = "Your password must be longer than 6 characters";
		   }
		else {
			$userpass = test_input($_POST["userpass"]);
	}
		 if (empty($_POST["userpassCheck"])) {
	 $passchErr = "Retype your password";
		}
		else{
	 $userpassch= test_input($_POST["userpassCheck"]);
	}
		if ($userpass == $userpassch) {
			//$passchErr="Password Match";
		}
		   else{
			   $passchErr="Passwords do not match";
		 }
	        if(empty($_POST["useremail"])) {
	 $emailErr = "Your email is required";
	}
		else{
	 $email= test_input($_POST["useremail"]);
	}	 
		
//save to database
$sql = "INSERT INTO users (fullname, userName, email, password) VALUES ('$fname', '$username', '$email', '$secure_userpass')";
//test connection
if($connect->query($sql)===TRUE){
	header("Location: index.php");
}
else{
echo "Error: ".$sql."<br/>".$connect->error;
}
  }
  ?>
<html>
<body>
<div class="wrapper">
<div class="regForm">	
<h1><center> Registration Form</center></h1>
	
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="signup" class="form">
	<label>Name: </label><input type="text" name="fname">
	<span><?php echo($nameErr);?>
		</span>
	<br/>
	<label>User Name: </label><input type="text" name="username">
	<span><?php echo($userErr);?>
		</span>
	<br/>
	<label>Password: </label><input type="text" name="userpass">
	<span><?php echo($passErr);?>
		</span>
	<br/>
	<label>Re-enter Password: </label><input type="text" name="userpassCheck">
	<span><?php echo($passschErr);?>
		</span>
	<br/>
	<label>Email: </label><input type="text" name="useremail">
	<span><?php echo($emailErr);?>
		</span>
	<br/>
	<input type="submit" value="Join" class="submit">
		
	</form>
   </div>
</div>
	</section>
<?php
	include("footer.php");
	?>
  </body>
</html>