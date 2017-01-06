<?php $PageTitle="Create Location"; ?>
<?php include('header.php'); ?>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
	<div class = "maincontenrwrapper">
		<div class = "contentwrapper">
			<div class = "contentpadding">
				<div class = "leftpanel">
					<script type="text/javascript" src="js/calendar.js"></script>
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

			<form action="php/addlocation.php" method="post">
				<div class = "maincontent">
					<div id= "main">
			            <fieldset>
				            <legend>
				              <h1>Add a Location</h1>
				            </legend>
				            <p>Location name</p>
				            <input type="text" name="location" placeholder="Location Name">	           
				            <hr><br><br>
				            <p>Description</p>
	            	     	<textarea name="locationdescription" cols="50" rows="5"></textarea>
				           	<hr><br><br>
				            <input type="submit" value="Create Location">
				            <input type="reset" value="Reset">
			        	</fieldset>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<?php include('footer.php'); ?>