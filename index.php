<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title>Owensboro Symphony Orchestra</title>
	<meta name="description" content="The Owensboro Symphony Orchestra, located in Owensboro, KY | Bringing Music to the Community" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
	
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Master CSS File -->
	<link rel="stylesheet" href="assets/css/master.css" type="text/css" media="screen">

	<!--jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
	
	<!-- Calendar -->
	<script src="assets/js/zabuto_calendar.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.min.css">
	
</head>

	<header>
		<a href="http://demo.raestilwell.com/oso"><img src="assets/images/logo-3.png" class="img-responsive logo" alt="OSO Logo" style="max-height: 100px;"></a>
	</header>

	 <!-- Navbar Template -->
	<?php include 'template/nav.php';?>
	
	 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
      <div class="carousel-inner" role="listbox">
        
        <div class="item active">
          <img class="first-slide" src="assets/images/slider3.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
			<!--Caption Text-->
            </div>
          </div>
        </div>
        
        <div class="item">
          <img class="second-slide" src="assets/images/slider2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
	            <!--Caption Text-->
	            <h3>Fifty Years of Music</h3>
				<p>Dedication to the Community</p>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img class="third-slide" src="assets/images/slider1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
	            <!--Caption Text-->
	            <h3>Preparing the 2016/2017 Season</h3>
				<p>The Search is On</p>
            </div>
          </div>
        </div>
      </div>
      
      <!--Carousel Buttons -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

	<!-- Call Outs -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-12">
			<!--Events Calendar -->
			<div id="my-calendar"></div>
			</div>
			
			<div class="col-md-2 col-sm-4 col-xs-10">
				<div class="callout">
					<img src="assets/images/callout1.jpg" class="img-responsive" alt="Image of the Inside of a Theatre">
					<h4>Purchase Tickets</h4>
					<p>Purchase Ticket Packages for the 2016/2017 Season</p>
					<a class="btn btn-primary" href="site/tickets/purchase-tickets/" role="button">Visit Page</a>
				</div>
			</div>
			
			<div class="col-md-2 col-sm-4 col-xs-10">
				<div class="callout">
					<img src="assets/images/callout2.jpg" class="img-responsive" alt="Image of the OSO Symphony">
					<h4>Inside the OSO</h4>
					<p>Learn more about the OSO.</p>
					<a class="btn btn-primary" href="site/about/inside-the-oso/" role="button">Visit Page</a>
				</div>
			</div>
			
			<div class="col-md-2 col-sm-4 col-xs-10">
				<div class="callout">
					<img src="assets/images/callout-ex.jpg" class="img-responsive" alt="Violins">
					<h4>Contact Us</h4>
					<p>We'd love to hear from you.</p>
					<a class="btn btn-primary" href="site/contact/" role="button">Visit Page</a>
				</div>
			</div>
		</div>
	</div>
			
	
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-12">		
				<h3>News From the OSO</h3>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4">
				<div class="news-section">
					<h4>Symphony’s Concert on the Lawn - Fun for the Family!</h4>
					<p><em>July 21, 2016</em></p>
					<p class="n-blurb">On August 6, 2016 at 7:00 p.m. US Bank Home Mortgage will present Concert on the Lawn. A fun-filled night with the Owensboro Symphony featuring Randy Lanham, Annabelle Watts, Chris Joslin, and Tom Ewing! This free family-friendly event will be a celebration of All Things Kentucky! Bluegrass, Bar-B-Que, and a little bit of Banjo will be prominent throughout the evening.</p>
				</div>
				<a class="btn btn-primary" href="blog/2016/July/21" role="button">Read More</a>
			</div>
			
			<div class="col-md-4">
				<div class="news-section">
					<h4>RiverPark Center offers Vivid Visual Art Camp</h4>
					<p><em>July 29, 2016</em></p>
					<p class="n-blurb">Rex Halterman sent his son to a Missoula Children’s Theatre camp as a young boy. The experience built a love for theater, and eventually, a career for his son. That’s one of the reasons he encourages sending children to arts programs, like the RiverPark Center’s Vivid Visual Art Camp that he’s teaching this week.</p>
				</div>
				<a class="btn btn-primary" href="blog/2016/June/29" role="button">Read More</a>
			</div>
			
			<div class="col-md-4">
				<div class="news-section">
					<h4>Owensboro Symphony Music On Call Impacting Lives of Inmates</h4>
					<p><em>June 8, 2016</em></p>
					<p class="n-blurb">OWENSBORO, KY – Over the last few weeks, The Owensboro Symphony Music On Call Community Engagement program has been making a powerful and positive impact on the lives of several inmates at the Daviess County Detention Center. Every Friday since the middle of May, women in the detention center who had an interest in being a part of a choir have been working together...</p>
				</div>
				<a class="btn btn-primary" href="blog/2016/June/8" role="button">Read More</a>
			</div>
		</div>
	</div>
	
<!-- Modal for Email Signup -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Newsletter Sign Up</h4>
      </div>
      <div class="modal-body">
        <p>Would you like to receive news and updates from the OSO? Sign up to receive our monthly newsletter.</p>
        
        <form>
			<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			</div>
        </form>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Subscribe</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	
	<!--Footer Template -->
	<?php include 'template/footer.php';?>

</body>

<script type="application/javascript">
var eventData = [
   {
     "date": "2016-08-06",
     "badge": false,
     "title": "Concert on the Lawn"
   },
   {
     "date": "2016-09-17",
     "badge": false,
     "title": "White on Second"
   },
   {
     "date": "2016-10-01",
     "badge": false,
     "title": "Big Band Glow in the Park Party"
   },
   {
     "date": "2016-10-22",
     "badge": false,
     "title": "Opening Night"
   },
   {
     "date": "2016-11-19",
     "badge": false,
     "title": "American Roots"
   },
   {
     "date": "2016-12-10",
     "badge": false,
     "title": "Holiday Spectacular"
   },
   {
     "date": "2017-02-18",
     "badge": false,
     "title": "Russian Romance"
   },
   {
     "date": "2017-04-22",
     "badge": false,
     "title": "Awaiting Summer"
   },
];
$(document).ready(function () {
    $("#my-calendar").zabuto_calendar({ data: eventData });
});
</script>


</html>