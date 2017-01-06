<?php $PageTitle="Search Results"; ?>
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
						<?php 
							$searchOption = ($_POST["searchOption"]);
							/*
							$eventName = ($_POST["eventName"]);
							$eventDate = ($_POST["eventDate"]);
							$eventLocation = ($_POST["eventLocation"]);
							$clientName = ($_POST["clientName"]);
							$allCats = ($_POST["allCats"]); */
							$searchInput = ($_POST["searchInput"]);
							
							if($searchOption == "allCats")
								{
									$sql = "select * from BEO_Master AND * from Reservations AND * from Clients where Event_Name, 
									Date_Of, Time_Of, Location, Email, First_Name, Last_Name, Phone, reservation_Name, reservation_Location, 
									reservation_Date LIKE $searchInput";
									$result = $conn->query($sql);

									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Events</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Event Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
											echo "<td>Client</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";						
													echo "<td>" . $row['Event_Name'] . "</td>";
													echo "<td>" . $row['Time_Of'] . "</td>";
													echo "<td>" . $row['Location'] . "</td>";
													echo "<td>" . $row['First_Name']['LastName'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no events scheduled for your search criteria.<br>";
									}
									
									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Reservations</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date</td>";
											echo "<td>Client Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['reservation_Date'] . "</td>";						
													echo "<td>" . $row['reservation_Name'] . "</td>";
													echo "<td>" . $row['reservation_Time'] . "</td>";
													echo "<td>" . $row['reservation_Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no reservations scheduled for your search criteria.<br>";
									}
								}

							if($searchOption == "eventName")
								{
									$sql = "select Date_Of, Event_Name, Time_Of, Location from BEO_Master where Event_Name LIKE $searchInput";
									$result = $conn->query($sql);

									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Events</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Event Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
											echo "<td>Category</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";						
													echo "<td>" . $row['Event_Name'] . "</td>";
													echo "<td>" . $row['Time_Of'] . "</td>";
													echo "<td>" . $row['Location'] . "</td>";
													echo "<td>" . $row['Category_Name'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no events scheduled for your search criteria.<br>";
									}
								}

								if($searchOption == "eventDate")
								{
									$sql = "select Date_Of, Event_Name, Time_Of, Location from BEO_Master AND reservation_Name, reservation_Time, 
									reservation_Date, reservation_Location from Reservations where Date_of OR reservation_Date = $searchInput";
									$result = $conn->query($sql);

									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Events</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date of Event</td>";
											echo "<td>Event Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['Date_Of'] . "</td>";						
													echo "<td>" . $row['Event_Name'] . "</td>";
													echo "<td>" . $row['Time_Of'] . "</td>";
													echo "<td>" . $row['Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no events scheduled for your search criteria.<br>";
									}
									
									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Reservations</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date</td>";
											echo "<td>Client Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['reservation_Date'] . "</td>";						
													echo "<td>" . $row['reservation_Name'] . "</td>";
													echo "<td>" . $row['reservation_Time'] . "</td>";
													echo "<td>" . $row['reservation_Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no reservations scheduled for your search criteria.<br>";
									}
								}
							if($searchOption == "eventLocation")
								{
									$sql = "select Date_Of, Event_Name, Time_Of, Location from BEO_Master AND reservation_Name, reservation_Time, 
									reservation_Date, reservation_Location from Reservations where Location OR reservation_Location LIKE $searchInput";
									$result = $conn->query($sql);

									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Events</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date of Event</td>";
											echo "<td>Event Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['Date_Of'] . "</td>";						
													echo "<td>" . $row['Event_Name'] . "</td>";
													echo "<td>" . $row['Time_Of'] . "</td>";
													echo "<td>" . $row['Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no events scheduled for your search criteria.<br>";
									}
									
									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Reservations</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date</td>";
											echo "<td>Client Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['reservation_Date'] . "</td>";						
													echo "<td>" . $row['reservation_Name'] . "</td>";
													echo "<td>" . $row['reservation_Time'] . "</td>";
													echo "<td>" . $row['reservation_Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no reservations scheduled for your search criteria.<br>";
									}
								}
							if($searchOption == "clientName")
								{
									$sql = "select First_Name, Last_Name from Clients AND reservation_Name from Reservations where First_Name OR 
									Last_Name OR reservation_Name LIKE '$searchInput%'";
									$result = $conn->query($sql);

									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Events</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date of Event</td>";
											echo "<td>Event Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['Date_Of'] . "</td>";						
													echo "<td>" . $row['Event_Name'] . "</td>";
													echo "<td>" . $row['Time_Of'] . "</td>";
													echo "<td>" . $row['Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no events scheduled for your search criteria.<br>";
									}
									
									if($result->num_rows > 0)
									{
										echo "<table>";
										echo "<tr>";
										echo "<th class = \"title\" colspan = 5>Reservations</th>";
										echo "</tr>";
										echo "<tr>";
											echo "<td></td>";
											echo "<td>Date</td>";
											echo "<td>Client Name</td>";
											echo "<td>Time</td>";
											echo "<td>Location</td>";
										echo "</tr>";
										while($row = $result->fetch_assoc())
										{
								
											echo "<tr>";
							
													echo "<td><button>Edit</button></td>";
													echo "<td>" . $row['reservation_Date'] . "</td>";						
													echo "<td>" . $row['reservation_Name'] . "</td>";
													echo "<td>" . $row['reservation_Time'] . "</td>";
													echo "<td>" . $row['reservation_Location'] . "</td>";
												
											echo "</tr>";
										}
										echo "</table>";
									}
									else
									{
										echo "<br>There are no reservations scheduled for your search criteria.<br>";
									}
								}
							
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<?php include('footer.php'); ?>
</div>