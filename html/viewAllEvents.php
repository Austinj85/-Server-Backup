<?php $PageTitle="View All Events"; ?>
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
						<?php include 'displayAllEvents.php'; ?>
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
						<?php
						$login = "/var/PHPStuff/logintobeomaster.php";



						if (strpos($login, '..') == false || strpos($login, '.php') !== true) 
						{
							include ($login);
						}
					
						else
						{
							echo "Nice Try.";
						}
					
					
						$sql = "select Date_Of,Event_Name,Time_Of from BEO_Master ORDER BY Date_Of ASC;";
					
					
							$result = $conn->query($sql);
					
							if($result->num_rows > 0)
							{
								echo "<table>";
								echo "<tr>";
								echo "<th class = \"title\" colspan = 12>All Events</th>";
								echo "</tr>";
								echo "<tr>";
									echo "<td></td>";
									echo "<td>Event Date</td>";
									echo "<td>Event Name</td>";
									echo "<td>Time</td>";
								echo "</tr>";
								while($row = $result->fetch_assoc())
								{
						
									echo "<tr>";
					
											echo "<td><button>Edit</button></td>";	
											echo "<td>" . $row['Date_Of'] . "</td>";					
											echo "<td>" . $row['Event_Name'] . "</td>";
											echo "<td>" . $row['Time_Of'] . "</td>";
										
									echo "</tr>";
								}
								echo "</table>";
							}
							else
							{
								echo "<br>There are no events Scheduled.<br>";
							}
						?>
				</div>
			</div>
			</div>
		</div>
		
		
	</div>
	</div>
