<!doctype html>
	<html>
  		<head>
  			<meta charset="UTF-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    		<link rel="stylesheet" type="text/css" href="css/jamisonStyle.css">
    	</head>
    	
<body>
	<header>	
		<div class = "title">
			<h1>Jamison Mobile Applications</h1>
			<h2>Modern Software for an Innovative Market</h2>
			<a href="HomePage.php">
			<img src="Images/Jamison Logo 2-1 small.png" alt="Logo" style="width:80px;height:100px;border:0;">
			</a>
		</div>
	</header>

<!-- NAVBAR AND SEARCHBAR -->
		<div class="container">
				<li class="nav-item">
					<a class="navlink" href="index.php">Home <span class="glyphicon glyphicon-home" aria-hidden="true"</span></a>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Events<span class="glyphicon glyphicon-menu-down"</span></a>
					<ul class="dropdown-menu">
						<li><a href="viewAllEvents.php">View All Events</a></li>
						<li><a href="">Banquet Events</a></li>
						<li><a href="#">Weddings</a></li>
						<li><a href="#">Golf Events</a></li>
						<li><a href="#">+ New Category</a></li>
						<li><a href="#">Edit Categories</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Reservations<span class="glyphicon glyphicon-menu-down"</span></a>
					<ul class="dropdown-menu">
						<li><a href="viewAllReservations.php">View All Reservations</a></li>
						<li><a href="#">Restaurant Reservations</a></li>
						<li><a href="#">Bar Reservations</a></li>
						<li><a href="#">Patio Reservations</a></li>
						<li><a href="#">+ New Category</a></li>
						<li><a href="#">Edit Categories</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Support<span class="glyphicon glyphicon-menu-down"</span></a>
					<ul class="dropdown-menu">
						<li><a href="FAQ.php">FAQ's</a></li>
						<li><a href="contactUs.php">Contact Us</a></li>
						<li><a href="aboutPage.php">About</a></li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><form class="navbar-form" role="search" action="searchResults.php" method = "post">
	    			<div class="input-group">
	        			<input type="text" class="form-control" placeholder="Search" name="searchInput" id ="searchInput">
		        		<div class="input-group-btn">
		            		<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
		            	</div>
	        		</div>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <form class="form-horizontal" role="form">
                        	<div class="form-group">
                            	<label for="filter">Category</label>
                                <select class="form-control">
                                    <option value="0">All Categories</option>
                                    <option value="1">Health</option>
                                    <option value="2">Animal</option>
                                    <option value="3">Environmental</option>
                                    <option value="4">International</option>
                                    <option value="5">Education</option>
                                    <option value="6">ArtsCulture</option>
                                </select>
                            </div>
                          	<div class="form-group">
                                <label for="contain">Contains the words</label>
                                <input class="form-control" type="text" />
                          	</div>
                          	<button type="submit" class="btn btn-primary">Search <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </form>
                    </div>
	        		</form>
				</li>
				<li class="nav-item">
					<a class="navlink" href="#">Inbox <span class="badge">42</span></a>
				</li>
				<li class="nav-item">
					<a class="navlink" href="#">Login</a>
				</li>
			</ul>
		</div>
	</nav>
</div>