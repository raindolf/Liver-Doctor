<?php
//output start
ob_start();
// start session
session_start();

//include required files
require_once('includes/quotes.php');

//get number of quotes
$random = rand(1,$limit);

//include header
require('html/header.php');

 
// ***************************************** //
// **********	DECLARE VARIABLES  ********** //
// ***************************************** //
 
$username = 'bola';
$password = 'bola';
 
$random1 = 'jean_sec_key';
$random2 = 'randy_key2';
 
$hash = md5($random1.$password.$random2); 
 
// $self = $_SERVER['REQUEST_URI'];
 
 
// ************************************ //
// **********	USER LOGOUT  ********** //
// ************************************ //
 
if(isset($_GET['logout']))
{
	unset($_SESSION['login']);
}
 
 
// *********************************************** //
// **********	USER IS LOGGED IN	********** //
// *********************************************** //
 
if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {
		echo '<a class="logout" href="?logout=true">Logout</a>';
		
    if(isset($_GET['step'])){
	
	//include step 1
	if($_GET['step'] == 1){ require('html/step1.php'); }

	//include step 2
	if($_GET['step'] == 2){ require('html/step2.php'); }
	
	//include step 3
	if($_GET['step'] == 3){ require('html/step3.php'); }
	
	//include step 4
	if($_GET['step'] == 4){ require('html/step4.php'); }

	//include step 5
	if($_GET['step'] == 5){ require('html/step5.php'); }
	
	//include step 6
	if($_GET['step'] == 6){ require('html/step6.php'); }

	//include step 7
	if($_GET['step'] == 7){ require('html/step7.php'); }
	}else{
	header('Location: index.php?step=1');
}

}
 
 
 
// *********************************************** //
// **********	FORM HAS BEEN SUBMITTED	********** //
// *********************************************** //
 
else if (isset($_POST['submit'])) {
 
	if ($_POST['username'] == $username && $_POST['password'] == $password){
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
 
	} else {
 
		// DISPLAY FORM WITH ERROR
		display_login_form();
		echo '<p class="login_error">* Username or password is invalid</p>';
 
	}
}	
 
 
// *********************************************** //
// **********	SHOW THE LOG-IN FORM	********** //
// *********************************************** //
 
else { 
 
	display_login_form();
 
}
 
 
function display_login_form(){ ?>
<div class="login_container">
  <form method="post" action="" class="login">
    <p>
      <label for="login">Username:</label>
      <input type="text" name="username" id="login" value="Your name">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="4815162342">
    </p>

    <p class="login-submit">
      <button type="submit" name="submit" class="login-button">Login</button>
    </p>
  </form>
  </div>
 
<?php 

} 




//include footer
require('html/footer.php');

//output end
ob_end_flush();

?>