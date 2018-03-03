<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>Owensboro Symphony Orchestra | Purchase Tickets</title>
	<meta name="description" content="Purchase your Ticket Package for the 2016/17 Season" />

	
	<!-- Favicon -->
	<link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon" />
	
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<!-- Master CSS File -->
	<link rel="stylesheet" href="../../../assets/css/master.css" type="text/css" media="screen">

	<!--jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	
	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
	
</head>

	<header>
		<a href="http://demo.raestilwell.com/oso/"><img src="../../../assets/images/logo-3.png" class="img-responsive logo" alt="OSO Logo" style="max-height: 100px;"></a>
	</header>

	 <!-- Navbar Template -->
	<?php include '../../../template/nav.php';?>
	
	<!-- Banner -->
	<div class="banner">
		<h1>Purchase Tickets</h1>
	</div>

	
	<!-- Main -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<h2>To make any of the following purchases:</h2>
					<ul>
						<li>Purchase or RENEW your seat for the 2016-2017 Season. (tickets mailed in October)</li>
						<li>TABLE at Concert on the Lawn</li>
						<li>Dinner Buffet at Concert on the Lawn</li>
						<li>TABLE at White on Second</li>
					</ul>
					
				<h3>Please fill out the order form below and complete your purchase</h3>
				
				<p><em>To purchase tickets to individual concerts, contact the <a href="http://riverparkcenter.org/">Riverpark Center Box Office.</a></em></p>
				
				<!-- Begin Ticket Purchase Form -->
				<hr>
				<form>
					<h3>Personal Information</h3>
					<h4>Your name</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="firstName">First Name:</label>
								    	<input type="text" class="form-control" id="lastName" placeholder="First Name">
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group">
									<label for="lastName">Last Name:</label>
								    	<input type="text" class="form-control" id="lastName" placeholder="Last Name">
								</div>
							</div>
						</div>
					
					<h4>Address</h4>
						<div class="form-group">
							<label for="addressLine1">Street Address:</label>
								<input type="text" class="form-control" id="addressLine1" placeholder="Street Address">
						</div>
					
						<div class="form-group">
							<label for="addressLine2">Address Line 2:</label>
								<input type="text" class="form-control" id="addressLine2" placeholder="Address Line 2 (optional)">
						</div>
					
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="city">City:</label>
										<input type="text" class="form-control" id="city" placeholder="City">
								</div>
							</div>
					
							<div class="col-sm-6">
								<div class="form-group">
									<label for="state">State</label>
										<select class="form-control" id="state">
											<option>Alabama</option>
											<option>Alaska</option>
											<option>Arizona</option>
											<option>Arkansas</option>
											<option>California</option>
											<option>Colorado</option>
											<option>Connecticut</option>
											<option>Delaware</option>
											<option>Florida</option>
											<option>Georgia</option>
											<option>Hawaii</option>
											<option>Idaho</option>
											<option>Illinois</option>
											<option>Indiana</option>
											<option>Iowa</option>
											<option>Kansas</option>
											<option>Kentucky</option>
											<option>Louisiana</option>
											<option>Maine</option>
											<option>Maryland</option>
											<option>Massachusetts</option>
											<option>Michigan</option>
											<option>Minnesota</option>
											<option>Mississippi</option>
											<option>Missouri</option>
											<option>Montana</option>
											<option>Nebraska</option>
											<option>Nevada</option>
											<option>New Hampshire</option>
											<option>New Jersey</option>
											<option>New Mexico</option>
											<option>New York</option>
											<option>North Carolina</option>
											<option>North Dakota</option>
											<option>Ohio</option>
											<option>Oklahoma</option>
											<option>Oregon</option>
											<option>Pennsylvania</option>
											<option>Rhode Island</option>
											<option>South Carolina</option>
											<option>South Dakota</option>
											<option>Tennessee</option>
											<option>Texas</option>
											<option>Utah</option>
											<option>Vermont</option>
											<option>Virginia</option>
											<option>Washington</option>
											<option>West Virginia</option>
											<option>Wisconsin</option>
											<option>Wyoming</option>
										</select>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="zip">Zip:</label>
										<input type="text" class="form-control" id="zip" placeholder="Zip Code">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="phone">Phone:</label>
										<input type="text" class="form-control" id="zip" placeholder="Phone Number">
								</div>
							</div>
  
							<div class="col-sm-6">
								<div class="form-group">
									<label for="email">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
							</div>
						</div>
							
						<hr>
							
						<div class="row">
							<div class="col-sm-12"</div>
								<h3>Ticket Package</h3>
								<p>Choose your events by selecting from the options below and specifying a quantity.</p>
								<p><strong>Please choose one or more of our upcoming events:</strong></p>
							</div>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> Season Renewal Section A <span class="ticket-price">$190.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> Season Renewal Section B <span class="ticket-price">$145.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> Season Renewal Section C <span class="ticket-price">$78.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> New Subscriber Section A Seating <span class="ticket-price">$95.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> New Subscriber Section B Seating <span class="ticket-price">$72.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> New Subscriber Section C Seating <span class="ticket-price">$78.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> Table at Concert on the Lawn <span class="ticket-price">$100.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> Dinner Buffet at Concert on the Lawn <span class="ticket-price">$15.00</span>
							</label>
						</div>
						
						<div class="checkbox">
							<label>
								<input type="checkbox"> Table at White on Second <span class="ticket-price">$100.00</span>
							</label>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="quantity">Ticket Package Quantity</label>
										<select class="form-control" id="quantity">
									    	<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
									    </select>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div clas="col-sm-12">
								<div class="form-group" style="margin-left:15px;">
									<label for="instructions">Special Instructions</label>
										<textarea class="form-control" id="instructions" rows="3"></textarea>
								</div>
							</div>
						</div>
							
						<div class="row">
							<div clas="col-sm-12">							
								<button type="submit" class="btn-primary" style="margin-left:15px;">Submit</button>
							</div>
						</div>
				</form>
			</div>
			
			<div class="col-md-4">
				<!-- Aside -->
				<?php include '../../../template/tickets-menu.php';?>
			</div>
		</div>
	</div>
	
	
	<!--Footer Template -->
	<?php include '../../../template/footer.php';?>

</body>
</html>