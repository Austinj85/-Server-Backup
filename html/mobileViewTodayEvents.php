<?php $PageTitle="Today's Events Mobile Page"; ?>
<?php include('header.php'); ?>

<div class = "visible-lg visible-md">
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div class = "maincontenrwrapper">
		<div class = "contentwrapper">
			<div class = "contentpadding">
				<div class = "maincontent">
					<div id= "main">
						<h1>Error 404</h1>
						<h4>Page not found!</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>
</div>
	
	<div class = "hidden-lg hidden-md">
		
		<div class = "hidden-xs">
			<div id = "textbanner">
			<marquee >Welcome to Banquet Event System Version Alpha 1.0.0 ------- Routine maintenance will take place on June 1, 2016 at 12:00am central standard time. At this time the webservice may become inaccessable for short periods of time.
			</marquee>
		</div>
		</div>
		<div id = "mobileTop" class = "col-sm-2 col-xs-2">
			
		</div>
		
		<div id = "mobileTop" class = "col-sm-8 col-xs-8">
			<div class = "mobileTitle">
				Banquet Event System
			</div>	
			<hr>
		<div id = "mobileTop" class = "col-sm-2 col-xs-2">
			
		</div>
		
		<div class = "col-sm-12 col-xs-12">	
			
		<div class = "mainmobilecontent">
			<div class = "maincontentwrapper">
			<div class = "contentwrapper">
					<div id= "main">
						<?php include 'php/displayTodayEvents.php'; ?>
				</div>
			</div>
			</div>
		</div>
		
		
	</div>
	</div>
	
	<script src="js/bootstrapjs/bootstrap.min.js"></script>
	<script type="text/javascript" src = "js/dropdown.js"></script>

</html>