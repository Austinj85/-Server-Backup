
<?php


	function fillEvents()
	{


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
	$email = array("johndoe@gmail.com", "someone@gmail.com", "brucebanner", "peterparker@gmail.com", "tonystark@gmail.com");
	//$phone = $_POST["client-tel"];
	//$street = $_POST["client-street"];
	//$city = $_POST["client-city"];
	//$state = $_POST["client-state"];
	//$zip = $_POST["client-zip"];
//-------------------------------------------------


	$ename = "The Event";
	$dateToday = date("d-m-Y");
	$edate = date("Y-m-d", strtotime($dateToday));

	$etime = strtotime("5:00 PM");
	$ecategory = array("Party", "Party", "Wedding", "Party", "Super Party");
	$elocation = array("Ballroom 1", "Ballroom 2", "Ballroom 3", "Ballroom 4", "Ballroom 5");
	$ecocktials = array("Margaritas", "Jack and Coke", "Champagne", "Pina Coladas", "Irish Carbombs");
	$efood = array("Burgers", "Burgers and Fries", "Steaks", "Burgers", "Burgers and Fries");
	$emenu = array("Menu 1", "Menu 2", "Menu 3", "Menu 4", "Menu 5");
	$etable = array("Layout 1", "Layout 2", "Layout 3", "Layout 4", "Layout 5");
	$eroom = array("Layout 1", "Layout 2", "Layout 3", "Layout 4", "Layout 5");
	$ebar = array("Layout 1", "Layout 2", "Layout 3", "Layout 4", "Layout 5");
	$edecor = array("Layout 1", "Layout 2", "Layout 3", "Layout 4", "Layout 5");
	$erentals = array("Rental 1", "Rental 2", "Rental 3", "Rental 4", "Rental 5");
	$eaudiovisual = array("Audio and Visual setup 1", "Audio and Visual setup 2", "Audio and Visual setup 3", "Audio and Visual setup 4","Audio and Visual setup 5");
	$eentertainment = array("Entertainment Setup 1", "Entertainment Setup 2", "Entertainment Setup 3", "Entertainment Setup 4", "Entertainment Setup 5" );
	$etimeline = array("Timeline 1", "Timeline 2", "Timeline 3", "Timeline 4", "Timeline 5" );
	$enotes = array("Note 1", "Note 2", "Note 3", "Note 4", "Note 5");
	$especialnotes = array("Note 1", "Note 2", "Note 3", "Note 4", "Note 5");
	//$edate = date('Y-m-d H:i:s');


	for($i=0;$i<100;$i++)
	{
		$ename = "The Event";
		$random = rand(0,4);

	echo $edate;

		$ename = $ename ." ".  (string)($i + 1);

		$pass_hashed = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO BEO_Master (Event_Name,Date_Of,Time_Of,CLient_Email,Salesperson_Email,Category_Name,Location,Cocktails_Served, Food_Served,Notes,Menu,Room_Setup,Table_Setup,Bar_Setup,Flowers_And_Decor,Rentals,Audio_And_Visual,Music_And_Entertainment, Special_Notes,Timeline)
		VALUES ('$ename','$edate','$etime','$email[$random]', 'use logged in email address', '$ecategory[$random]','$elocation[$random]','$ecocktials[$random]','$efood[$random]','$enotes[$random]','$emenu[$random]','$eroom[$random]','$etable[$random]','$ebar[$random]','$edecor[$random]','$erentals[$random]','$eaudiovisual[$random]','$eentertainment[$random]','$especialnotes[$random]','$etimeline[$random]')";

		echo "this worked";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}


		$conn->close();

	}


	fillEvents();

?>
