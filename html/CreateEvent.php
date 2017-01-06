<?php $PageTitle="Create Event"; ?>
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


			<form action="php/createEvent.php" method="post">

			<div class = "maincontent">
					<div id= "main">

	          <fieldset>
	            <legend>
	              <h1>Event Information</h1>
	             </legend>
   		        <p>Client</p>
   		        <select name="clientemail">
   		        <?php
   		        	include 'php/getclientemailasoptions.php';	 
	            ?>     
	            </select>     
	            <hr><br><br>

	            <p>Enter the event name.</p>
	            <input type="text" name="eventname" placeholder="Event Name">	           
	            <hr><br><br>
	            <p>Enter the date and time.</p>
	            <input type="date" name="eventdate">
	           	<input type="time" name="eventtime">
	           	<hr><br><br>
	         	<p>Pick an existing category.</p>
					<select name="category">
						<?php include 'php/getcategoriesasoptions.php';?>
					</select>
    	      	<hr><br><br>
	         	<p>Reserve a Room.</p>
					<select name="location">
						<?php include 'php/getlocationsasoptions.php';?>
					</select>
	            <br><br>
	          	<p>Cocktails</p>
	          	<textarea name="cocktails" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Food</p>
	          	<textarea name="food" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Menu</p>
	          	<textarea name="menu" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Table Setup</p>
	          	<textarea name="table_setup" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Room Setup</p>
	          	<textarea name="room_setup" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Bar Setup</p>
	          	<textarea name="bar_setup" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Flowers and Decoration</p>
	          	<textarea name="flowers_and_decor" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Rentals</p>
	          	<textarea name="rentals" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Audio and Visual</p>
	          	<textarea name="audio_and_visual" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Music and Entertainment</p>
	          	<textarea name="music_and_entertainment" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Timeline</p>
	          	<textarea name="timeline" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Notes</p>
	          	<textarea name="notes" cols="50" rows="5"></textarea>
	            <hr><br><br>
	          	<p>Special Notes</p>
	          	<textarea name="special_notes" cols="50" rows="5"></textarea>
	            <hr><br><br>
	            <input type="submit" value="Create Event">
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