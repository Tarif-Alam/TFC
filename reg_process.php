<?php
  session_start();
  $name= $_POST['name'];
  $username= $_POST['username'];
  $email= $_POST['email'];
  $password= $_POST['password'];

  if ($name&&$username&&$email&&$password) {
    
    $connect = mysql_connect("localhost", "root", "") or die("Couldn't connect to database!");
    mysql_select_db("db_food") or die("Couldn't find database!");

    $query = mysql_query("SELECT * FROM users WHERE username = '$username' and email= '$email'");

    $numrows = mysql_num_rows($query);

    if ($numrows==0) {
    	$sql=mysql_query("INSERT INTO users(id,name,username,email,password) 
    		VALUES ('','$name','$username','$email','$password' )");
    	header('location: profile.php');
		}
    else{
    		echo "The username or email already exists. Try again with another one.";
    	}
    }
    else {
    	echo "All fields are required.";
    }
?>
