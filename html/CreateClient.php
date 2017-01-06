<?php $PageTitle="Create Client"; ?>
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

			<div class = "maincontent">
				<div id= "main">
				<fieldset>
	            <legend>
	              <h1>Note</h1>
	             </legend>
					<p class ="note">In order to create an event you must first select an existing client or create a new client within the system. </p>
					<div class = "toggleclientsearch">

					<a href = "#" id = "toggleclientsform" type="button" onclick = "toggleClientForm();" >Create a new client.</a>
					</div>
				</fieldset>
				</div>
			</div>

	

			<div class = "maincontent">


			<div id= "main">



			<div id = "existingclient">
			<form action="php/searchclients.php" method="get" target="clientresults">
		    	<fieldset>
	            <legend>
	              <h1>Search for Existing Client</h1>
	             </legend>

					<input type="text" name="search" placeholder="Search Existing Clients">
    		      	<input type="submit" value="Search Clients">

					<iframe  name="clientresults">
					</iframe>


				</fieldset>
				</form>
			</div>

			<form action="createclient.php" method="post">
	
			<div id = "clientform">
	          <fieldset>
	            <legend>
	              <h1>Create a New Client</h1>
	             </legend>
	            <p>Enter the clients first and last name.</p>
	            <input type="text" name="firstname" placeholder="First Name" id ="client-name">	           
	            <input type="text" name="lastname" placeholder="Last Name">
	            <hr><br><br>
	            <p>Enter the clients email address.</p>
	            <input type="email" name="client-email" placeholder="Email">
	           	<hr><br><br>
	         	<p>Enter the clients telephone number.</p>
	            <input type="tel" name="client-tel" placeholder="Telephone">
    	      	<hr><br><br>
	         	<p>Enter the clients address.</p>
	            <input type="text" name="client-street" placeholder="Street">	           
	            <input type="text" name="client-city" placeholder="City">
	            <br><br>
	            <input type="text" name="client-state" placeholder="State">	           
	            <input type="text" name="client-zip" placeholder="Zip">
	                	      	<hr><br><br>

        	  <input type="submit" value="Create Client Record">    	
	            
	          </fieldset>

	          </div>
	          </form>


			</div>
			</div>



			</div>
		</div>
	</div>
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ END OF MAIN CONTENT ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<?php include('footer.php'); ?>