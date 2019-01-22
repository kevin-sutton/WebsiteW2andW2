<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$password_1 = "";
$password_2 = "";
$password = "";
$id = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('157.230.147.208', 'qqmgvfessc', 'nU4p9sFSHy', 'qqmgvfessc');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
	
	$idGetQuerry = "SELECT id FROM users WHERE username='$username'";
	$output = mysqli_query($db, $idGetQuerry);
	$id = mysqli_fetch_assoc($output);
	$_SESSION['id'] = $id;

  	$_SESSION['success'] = "You are now logged in";
  	header('location: game.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: game.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

if (isset($_POST['create_char']))
{
	$charName = mysqli_real_escape_string($db, $_POST['charName']);
	$charRace = mysqli_real_escape_string($db, $_POST['charRace']);
	$charClass = mysqli_real_escape_string($db, $_POST['charClass']);
	$charAge = mysqli_real_escape_string($db, $_POST['charAge']);
	$charGender = mysqli_real_escape_string($db, $_POST['charGender']);
	$charHeight = mysqli_real_escape_string($db, $_POST['charHeight']);
	$charWeight = mysqli_real_escape_string($db, $_POST['charWeight']);
	$charEye = mysqli_real_escape_string($db, $_POST['charEye']);
	$charHair = mysqli_real_escape_string($db, $_POST['charHair']);
	$charSkin = mysqli_real_escape_string($db, $_POST['charSkin']);
	$charSTR = mysqli_real_escape_string($db, $_POST['charSTR']);
	$charEND = mysqli_real_escape_string($db, $_POST['charEND']);
	$charFIN = mysqli_real_escape_string($db, $_POST['charFIN']);
	$charSPE = mysqli_real_escape_string($db, $_POST['charSPE']);
	$charCON = mysqli_real_escape_string($db, $_POST['charCON']);
	$charCHA = mysqli_real_escape_string($db, $_POST['charCHA']);
	$charINT = mysqli_real_escape_string($db, $_POST['charINT']);
	$charMAG = mysqli_real_escape_string($db, $_POST['charMAG']);
	$charFAI = mysqli_real_escape_string($db, $_POST['charFAI']);
	$charLUC = mysqli_real_escape_string($db, $_POST['charLUC']);
	$charSkill = mysqli_real_escape_string($db, $_POST['charSkill']);
	$charFeat = mysqli_real_escape_string($db, $_POST['charFeat']);
	$charOrg = mysqli_real_escape_string($db, $_POST['charOrg']);
	$charAlign = mysqli_real_escape_string($db, $_POST['charAlign']);
	$charBack = mysqli_real_escape_string($db, $_POST['charBack']);

	if (empty($charName)) { array_push($errors, "Character Name is required"); }
	if (empty($charRace)) { array_push($errors, "Character Race is required"); }
	if (empty($charClass)) { array_push($errors, "Character Class is required"); }
	if (empty($charAge)) { array_push($errors, "Character Age is required"); }
	if (empty($charGender)) { array_push($errors, "Character Gender is required"); }
	if (empty($charHeight)) { array_push($errors, "Character Height is required"); }
	if (empty($charWeight)) { array_push($errors, "Character Weight is required"); }
	if (empty($charEye)) { array_push($errors, "Character Eye Color is required"); }
	if (empty($charHair)) { array_push($errors, "Character Hair Color is required"); }
	if (empty($charSkin)) { array_push($errors, "Character Skin Tone is required"); }
	if (empty($charSTR)) { array_push($errors, "Strength Value is required"); }
	if (empty($charEND)) { array_push($errors, "Endurance Value is required"); }
	if (empty($charFIN)) { array_push($errors, "Finesse Value is required"); }
	if (empty($charSPE)) { array_push($errors, "Speed Value is required"); }
	if (empty($charCON)) { array_push($errors, "Concentration Value is required"); }
	if (empty($charCHA)) { array_push($errors, "Charisma Value is required"); }
	if (empty($charINT)) { array_push($errors, "Intelligence Value is required"); }
	if (empty($charMAG)) { array_push($errors, "Magic Value is required"); }
	if (empty($charFAI)) { array_push($errors, "Faith Value is required"); }
	if (empty($charLUC)) { array_push($errors, "Luck Value is required"); }
	if (($charSTR + $charEND + $charFIN + $charSPE + $charCON + $charCHA + $charINT + $charMAG + $charFAI + $charLUC)!= 50) { array_push($errors, "Attribute Values must add up to 50"); }
	if (empty($charSkill)) { array_push($errors, "Character Bonus Skill is required"); }
	if (empty($charFeat)) { array_push($errors, "Character Feat is required"); }
	if (empty($charOrg)) { array_push($errors, "Character Organization is required"); }
	if (empty($charAlign)) { array_push($errors, "Character Alignment is required"); }
	if (empty($charBack)) { array_push($errors, "Character Background is required"); }

	if (count($errors) == 0) 
	{
		$query = "INSERT INTO characters (ownerID, name, race, class, STR, END, FIN, SPE, CON, CHA, INT, MAG, FAI, LUC, Feats, Background, Organization, Alignment, Age, Gender, Height, Weight, EyeColor, Hair, SkinColor, notes) 
  				VALUES('$id', '$charName', '$charRace', '$charClass', '$charSTR', '$charEND', '$charFIN', '$charSPE', '$charCON', '$charCHA', '$charInt', '$charMAG', '$charFAI', '$charLUC', '$charFeat', '$charBack', '$charOrg', '$charAlign', '$charAge', '$charGender', '$charHeight', '$charWeight', '$charEye', '$charHair', '$charSkin, '$charSkill')";
  		mysqli_query($db, $query);

		$_SESSION['success'] = "Character created successfully";
  	header('location: game.php');
	}
}

?>