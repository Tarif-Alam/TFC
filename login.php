
<!DOCTYPE html>


<html>
<head>
	<title>Log In</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">


</head>
<body>
<header class="main__header">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"a-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
      </button>
        
        <h1 class="navbar-brand"><a href="index.php">TFC</a></h1>
        <a href="#" onclick="javascript.void()" class="submenu">Menus</a> </div>
      <div class="menuBar">
        <ul class="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="register.php">register</a></li>
          <li class="active"><a href="login.php">log in</a></li>
          
          <li><a href="contact.php">contact us</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>

<section class="main__middle__container login">
  <div class="row text-center no-margin nothing">
    <div class="container headings">
      <h1 class="page_title">Log In</h1>
      <div class="seper"></div>

      <form action="login_process.php" method="post" class="form-inline" role="form">
          <div class="form-group">
            
          <h5><input type="text" class="form-control form-control-lg" name="username" placeholder="Username"></h5>
          
            
          <h5><input type="password" class="form-control form-control-lg" name="password" placeholder="Password"></h5>
            
            <h6>*Password must be 8 charecters*</h6>

      
            <button type="submit" name="btn-login" class="btn btn-info btn-lg" role="button">log in</button>
          

          </div>
        </form>
        
        <h5>Don't have an account!!! <a href="register.php">Register</a> now!!</h5>
      
    </div>
  </div>
</section>




<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>About</h3>
        <div class="seper"></div>
        <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br>
          <br>
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
      </div>
      <div class="col-md-3">
        <h3>Tweets</h3>
        <div class="seper"></div>
        <p><span>Tweet</span> <a href="http://www.twitter.com" target="blank">@You</a><br>
          For more info please follow us.</p>
        <p><span>Mail</span> <a href="http://www.gmail.com" target="blank">@You</a><br>
          We are wating for your feedback. Simply mail us.</p>
      </div>
      <div class="col-md-3">
        <h3>Mailing list</h3>
        <div class="seper"></div>
        <p>Subscribe to our mailing list for offers, news updates and more!</p>
        <br>
        <form action="#" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Your Email</label>
            <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="Your Email">
          </div>
          <button type="submit" class="btn btn-primary btn-md">subscribe</button>
        </form>
      </div>
      <div class="col-md-3">
        <h3>Contact</h3>
        <div class="seper"></div>
        <p>777, Rongmohol Tower<br>
          Bondorbazar, Sylhet<br>
          Bangladesh<br>
          <br>
          E-mail: info@tfc.com<br>
          Phone: (+880) 123-456789<br>
          Fax: (+880) 123-456789<br>
          <br>
        </p>
      </div>
    </div>
    <hr>
    <p class="text-center"> &copy Copyright TFC. All Rights Reserved.</p>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 

<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});
</script>

</body>
</html>