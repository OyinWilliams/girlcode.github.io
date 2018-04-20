<?php
session_start();
$fullname = "";
$user_name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'users');

// REGISTER USER
if (isset($_POST['submit_form'])) {
  // receive all input values from the form
  $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
  $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $user_password = mysqli_real_escape_string($db, $_POST['user_password']);

  if (empty($fullname)) { array_push($errors, "Fullname is required"); }
  if (empty($user_name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($user_password)) { array_push($errors, "Password is required"); }
 
  $user_check_query = "SELECT * FROM registration WHERE user_name ='$user_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['user_name'] === $user_name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  $query = "INSERT INTO registration (fullname,  user_name, email, user_password)
        VALUES ('$fullname',  '$user_name', '$email', '$hashed_password')";
  	mysqli_query($db, $query);
  	$_SESSION['user_name'] = $user_name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
  // LOGIN USER
if (isset($_POST['login_form'])) {
  $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
  $user_password = mysqli_real_escape_string($db, $_POST['user_password']);

  if (empty($user_name)) {
    array_push($errors, "Username is required");
  }
  if (empty($user_password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $user_password = md5($user_password);
    $query = "SELECT * FROM users WHERE user_name ='$user_name' AND user_password='$user_password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $user_name;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>

