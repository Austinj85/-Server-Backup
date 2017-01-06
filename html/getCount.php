
<h1>Hi</h1>

<?php

function getEventCount($time)
{
	date_default_timezone_set('America/Chicago');

	$year = date("Y",$time);
	$month = date("m",$time);
	$day = date("d",$time);

	$login = "/var/PHPStuff/logintobeomaster.php";


	if (strpos($login, '..') == false || strpos($login, '.php') !== true) 
	{
		include ($login);
	}

	else
	{
		echo "Nice Try.";
	}


	$sql = "SELECT count(*) FROM BEO_Master WHERE Date_Of = " . "\"". $year  . "-" . $month . "-" . $day . "\";";

	$count = "";

	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
		$row = $result->fetch_assoc();
		
		$count = $row["count(*)"];
	}

	return $count;
}


echo getEventCount(mktime(0, 0, 0, 7, 2, 2016));


?>
