<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet">

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
        <a href="#" onclick="javascript.void()" class="submenu">Menus</a> 
      </div>
      <div class="menuBar">
        <ul class="menu">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="register.php">register</a></li>
          <li><a href="login.php">log in</a></li>
          <li><a href="contact.php">contact us</a></li>
        </ul>
      </div>
    </nav>
  </div>
</header>


<section class="slider">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item"> <img data-src="img/slider.jpg" alt="First slide" src="img/slider.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="">Welcome to the world of Food</h1>
            <p>Enjoy your meal at any time.</p>
            <p><a class="btn btn-default btn-lg" href="login.php" role="button">Log In</a>
            <a class="btn btn-default btn-lg" href="register.php" role="button">Register</a></p>
          </div>
        </div>
      </div>
      <div class="item active"> <img data-src="img/slider1.jpg" alt="Second slide" src="img/slider1.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="">Welcome To TFC</h1>
            <p>Here you can order any food or drinks that you wanted.</p>
            <p><a class="btn btn-default btn-lg" href="login.php" role="button">Log In</a>
            <a class="btn btn-default btn-lg" href="register.php" role="button">Register</a></p>
          </div>
        </div>
      </div>
      <div class="item"> <img data-src="img/slider2.jpg" alt="Third slide" src="img/slider2.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>Thank you for taking our service</h1>
            <p>If any query, just contact us.</p>
            <p><a class="btn btn-default btn-lg" href="login.php" role="button">Log In</a>
            <a class="btn btn-default btn-lg" href="register.php" role="button">Register</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="myCarousel" data-slide="prev">
    <span class="glyphicon carousel-control-left"></span></a> 
    <a class="right carousel-control" href="myCarousel1" data-slide="next">
    <span class="glyphicon carousel-control-right"></span></a> 
    </div>
</section>

<section class="main__middle__container homepage">
  <div class="row text-center no-margin nothing">
    <div class="container headings">
      <h1 class="page_title">We are here to help you</h1>
      <div class="seper"></div>
      <p>By using our website you can order food, booking table, booking whole restaurant for arrange party and so on.
       We also take online order.</p>
       <p><a class="btn btn-info btn-lg" href="info.php" role="button">read more</a></p>
    </div>
  </div>
  <div class="row three__blocks text-center no_padding no-margin">
    <div class="container"> <img src="img/service.png" alt="services" class="absolute__icon">
      <h2 class="page__title">Our Services</h2>
      <div class="seper"></div>
      <p class="small-paragraph">We provide different types of services. To know the service just contact us.</p>
      <div class="col-md-4">
        <h3><a href="letest_design.php">Modern Design</a></h3>
        <img src="img/img1.jpg" alt="image" class="img-responsive img-rounded">
        <p>We provide more website designs. To getting designs contact us.</p>
        <p><a class="btn btn-info btn-md" href="info.php" role="button">Learn more</a> 
      </p>
      </div>
      <div class="col-md-4 middl">
        <h3><a href="high_img.php">High Quality</a></h3>
        <img src="img/img2.jpg" alt="image" class="img-responsive img-rounded">
        <p>For high definition quality website contact us. </p>
        <p><a class="btn btn-info btn-md" href="info.php" role="button">Learn more</a> 
      </p>
      </div>
      <div class="col-md-4">
        <h3><a href="help_desk.php">Quick Support</a></h3>
        <img src="img/img3.jpg" alt="image" class="img-responsive img-rounded">
        <p>For getting quick support contact us. </p>
        <p><a class="btn btn-info btn-md" href="info.php" role="button">Learn more</a> 
      </p>
      </div>
    </div>
  </div>
  <div class="row three__blocks text-center no_padding no-margin">
    <div class="container headings"> <img src="img/testimonials.png" alt="testimonials" class="absolute__icon">
      <h2 class="page__title">Testimonials</h2>
      <div class="seper"></div>
      <p class="small-paragrapher">Are you interested about our employee?</p>
      <div id="myCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel2" data-slide-to="0" class=""></li>
          <li data-target="#myCarousel2" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel2" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item">
            <p>"If you want to contact our manager, then simply mention."</p>
            <p class="small-paragraph"><small>- Tarif Alam, Company Manager</small></p>
          </div>
          <div class="item">
            <p>"If you want to contact our Sales Consultant, then simply mention."</p>
            <p class="small-paragraph"><small>- MD. Mahmudul Alam, Sales Consultant</small></p>
          </div>
          <div class="item active">
            <p>"If you want to contact our Web manager, then simply mention."</p>
            <p class="small-paragraph"><small>- Taufic Raihan, Web Manager</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="title text-center">
    <div class="container">
      <h2 class="page__title">About Us</h2>
      <div class="seper"></div>
      <img src="img/big_image.jpg" alt="big image" class="img-rounded img-responsive">
      <p>We are a member of Style group. We can ensure your comfort with our service. Our first priority is your comfort. 
      We believe  in service not in money. We are waiting for you.Phasellus id est. Quisque blandit eros sed pede. 
      Quisque est. Donec lectus neque, posuere at, adipiscing id, lobortis id, nisl. Vivamus id ante. 
      Aliquam ut augue. Fusce venenatis libero vel urna. Suspendisse quis dui sit amet purus tincidunt facilisis. 
      Sed velit. Sed varius, nibh quis egestas aliquam, eros libero feugiat lorem, eu lobortis</p>
    </div>
  </div>
  <div class="row grey-info-block text-center">
    <div class="container"> <img src="img/whatwedo.png" alt="what_we_do" class="absolute__icon">
      <h2 class="page__title">What we do</h2>
      <div class="seper"></div>
      <p class="small-paragraph">We are here to help you. We can make your life easy by our service.</p>
      <div class="col-md-6">
        <h3>We serve fresh and pure food</h3>
        <img src="img/pic1.jpg" alt="pic" class="img-rounded img-responsive" id="picture">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p><a class="btn btn-info btn-md" href="info.php" role="button">Learn more</a></p>
      </div>
      <div class="col-md-6">
        <h3>We believe in purity</h3>
        <img src="img/pic2.jpg" alt="pic" class="img-rounded img-responsive">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p><a class="btn btn-info btn-md" href="info.php" role="button">Learn more</a></p>
      </div>
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
        <h3>Social</h3>
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
$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script> 

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