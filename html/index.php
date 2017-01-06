<?php $PageTitle="BEO Home"; ?>
<?php include('header.php'); ?>

<div class = "visible-lg visible-md">
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div class = "maincontenrwrapper">
		<div class = "contentwrapper">
			<div class = "contentpadding">
				<div class = "leftpanel">
					<?php include 'php/testcal.php';?>
						<div id="notifications">
							<table>
								<thead>
									<tr>
										<th class ="title">Notifications</th>
									</tr>
								</thead>
									<tbody>
										<tr>
											<td>Melissa B. changed the TIME of Smith Retirement Party</td>
										</tr>
										<tr>
											<td>Melissa B. changed the TIME of Smith Retirement Party</td>
										</tr>
										<tr>
											<td>Melissa B. changed the TIME of Smith Retirement Party</td>
										</tr>
										<tr>
											<td>Melissa B. changed the TIME of Smith Retirement Party</td>
										</tr>
										<tr>
											<td>Melissa B. changed the TIME of Smith Retirement Party</td>
										</tr>
									</tbody>
							</table>
						</div>
				</div>

				<div class = "maincontent">
					<div id= "main">
						<?php include 'php/displayTodayEvents.php'; ?>
					</div>
				</div>
				

				<div class = "maincontent">
					<div id= "main">
						<?php include 'displayTodayReservations.php'; ?>
					</div>
	      		</div>
			</div>
		</div>
	</div>
	
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<?php include('footer.php'); ?>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MOBILE CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<div class = "hidden-lg hidden-md">
		<div class = "hidden-xs">
			
		</div>
		
		<div id = "mobileTop" class = "col-sm-2 col-xs-2">
			
		</div>
		
		<div id = "mobileTop" class = "col-sm-8 col-xs-8">
			<div class = "mobileTitle">
				Banquet Event System
			</div>	
			<hr>
			
		<p><a href = "mobileViewTodayEvents.php" class = "btn-primary btn-lg btn-block text-center" role = "button">Today's Events</a></p>
		<p><a href = "Reservations1-2.php" class = "btn-primary btn-lg text-center center-block" role = "button">Today's Reservations</a></p>
		<p><a href = "viewAllEvents.php" class = "btn-primary btn-lg text-center center-block" role = "button">View/Edit Events</a></p>
		<p><a href = "viewAllReservations.php" class = "btn-primary btn-lg text-center center-block" role = "button">View/Edit Reservation</a></p>
		<hr>
		<div style="text-align: center">
			<form>
				<input type="text" name="search" placeholder="Search Events">
				<input id = "search" type="button" value="Search">
				<!--<p>Search icon: <span class="glyphicon glyphicon-search"></span></p> -->
			</form>
		</div>
		</div>
		
		<div id = "mobileTop" class = "col-sm-2 col-xs-2">
			
		</div>
		<div class = "col-sm-12 col-xs-12">
			
		</div>
	</div>
