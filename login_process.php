<?php
    session_start();

    $username= $_POST['username'];
    $password= $_POST['password'];

    if ($username&&$password) {

      $connect = mysqli_connect("localhost", "root", "") or die("Couldn't connect to database!");
      mysqli_select_db($connect, "db_food") or die("Couldn't find database!");

      $query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");

      $numrows = mysqli_num_rows($query);

      if ($numrows!==0) {
        while ($row= mysqli_fetch_assoc($query)) {
         $dbusername= $row['username'];
         $dbpassword= $row['password']; 
       }
   if ($username==$dbusername&&$password==$dbpassword) {
    session_start();
    $_SESSION['sess_user']=$user;
    $_SESSION['username']=$username;
    header('location: profile.php');
  }
  else
    echo "Your password is incorrect!!";
}
else
  die("That user doesn't exists!!"); 
}
else
  echo "Please enter a username and password!!";
?>
