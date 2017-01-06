
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

//Maybe we will change this to be dynamic later and either pick an existing client or create a new one. 
	//$firstname = $_POST["firstname"];
	//$lastname = $_POST["lastname"];
	$email = $_POST["clientemail"];
	//$phone = $_POST["client-tel"];
	//$street = $_POST["client-street"];
	//$city = $_POST["client-city"];
	//$state = $_POST["client-state"];
	//$zip = $_POST["client-zip"];
//-------------------------------------------------



	$ename = $_POST["eventname"];
	$edate = $_POST["eventdate"];
	$etime = $_POST["eventtime"];
	$ecategory = $_POST["category"];
	$elocation = $_POST["location"];
	$ecocktials = $_POST["cocktails"];
	$efood = $_POST["food"];
	$emenu = $_POST["menu"];
	$etable = $_POST["table_setup"];
	$eroom = $_POST["room_setup"];
	$ebar = $_POST["bar_setup"];
	$edecor = $_POST["flowers_and_decor"];
	$erentals = $_POST["rentals"];
	$eaudiovisual = $_POST["audio_and_visual"];
	$eentertainment = $_POST["music_and_entertainment"];
	$etimeline = $_POST["timeline"];
	$enotes = $_POST["notes"];
	$especialnotes = $_POST["special_notes"];
	$esalesname = $_POST["salespeople"];



		$pass_hashed = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO BEO_Master (Event_Name,Date_Of,Time_Of,CLient_Email,Email,Category_Name,Location,Cocktails_Served, Food_Served,Notes,Menu,Room_Setup,Table_Setup,Bar_Setup,Flowers_And_Decor,Rentals,Audio_And_Visual,Music_And_Entertainment, Special_Notes,Timeline)
		VALUES ('$ename','$edate','$etime','$email', '$esalesname', '$ecategory','$elocation','$ecocktials','$efood','$enotes','$emenu','$eroom','$etable','$ebar','$edecor','$erentals','$eaudiovisual','$eentertainment','$especialnotes','$etimeline')";

		echo "this worked";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}


		$conn->close();


?>
