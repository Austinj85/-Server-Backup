<?php

function numweeksinmonth($totaldays,$f,$l)
{

	$curday = $f;
	$numweeks = 1;

	for($i=1;$i<=$totaldays;$i++)
	{
		if($curday == 6)
		{
			$curday = 0;
			$numweeks++;
		}
		$curday++;
	}

	return $numweeks;
}

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

function constructCalendar($time)
{
	if($time==null)
	{
		$time=time();
	}
	date_default_timezone_set('America/Chicago');

	//1 - 31
	$dayofmonth = date("j",$time);
	//0 - 6
	$dayofweek = date("w",$time);
	//Sun - Mon
	$dayofweektext = date("l",$time);
	//1 - 12
	$month = date("n",$time);
	//Jan-Dec
	$monthtext = date("F",$time);
	//true/false
	$isleapyear = date("L",$time);
	//28-31
	$numdaysinmonth = date("t",$time);
	//1999
	$year = date("Y",$time);



	$timeoffirstday = mktime(0, 0, 0, 7, 1, 2016);
	//First day of the week of the month
	$firstdayofmonth = date("w",$timeoffirstday);
	$numdays = date("t",$timeoffirstday);
	//last day of the week of the month
	$timeoflastday = mktime(0, 0, 0, 7, $numdays, 2016);
	$lastdayofmonth = date("w",$timeoflastday);

	//number of rows in the calendar 
	$numweeks = numweeksinmonth($numdays,$firstdayofmonth,$lastdayofmonth);

	echo "<div class =\"cal\">";
	echo "<table>";
	echo "<tbody>";
	echo "<tr>";
	echo "<th colspan=\"7\" class=\"month title\">" . $monthtext . " " .  $year  . "</th>";
	echo "</tr>";
	echo "<tr class = \"weekdays\">";
	echo "<th>Su</th>";
	echo "<th>Mo</th>";
	echo "<th>Tu</th>";
	echo "<th>We</th>";
	echo "<th>Th</th>";
	echo "<th>Fr</th>";
	echo "<th>Sa</th>";
	echo "</tr>";

	echo "<tr>";
	//ONE
	for($i=0;$i<$firstdayofmonth;$i++)
	{
		echo "<td></td>";
	}
		$day = 1;
	for($i=$firstdayofmonth;$i<7;$i++)
	{	
		$eCount = getEventCount(mktime(0, 0, 0, $month, $day, $year));
		if($day == $dayofmonth)
		{
			if($eCount > 3)
			{
				echo "<td id = \"today\" class = \"red\">" . $day . "</td>";				
			}
			else
			{
				echo "<td id = \"today\">" . $day . "</td>";
			}
		}
		else
		{
			if($eCount > 3)
			{
				echo "<td class = \"red\">" . $day . "</td>";			
			}
			else
			{
				echo "<td>" . $day . "</td>";
			}
		}
		$day = $day + 1;
	}
	echo "</tr>";


	for($i=2;$i<$numweeks;$i++)
	{
		echo "<tr>";
		for($j=1;$j<8;$j++)
		{
			$eCount = getEventCount(mktime(0, 0, 0, $month, $day, $year));
			if($day>$numdaysinmonth)
			{
				$day = 1;
			}
			if($day == $dayofmonth)
			{
				if($eCount > 3)
				{
					echo "<td id = \"today\" class = \"red\">" . $day . "</td>";				
				}
				else
				{
					echo "<td id = \"today\">" . $day . "</td>";
				}
			}
			else
			{
				if($eCount > 3)
				{
					echo "<td class = \"red\">" . $day . "</td>";			
				}
				else
				{
					echo "<td>" . $day . "</td>";
				}
			}
			$day = $day + 1;
		}
		echo "</tr>";
	}


	for($i=0;$i<7;$i++)
	{
		if($day>$numdaysinmonth)
		{
			$day = 1;
		}
		$eCount = getEventCount(mktime(0, 0, 0, $month, $day, $year));
		if($day == $dayofmonth)
		{
				if($eCount > 3)
				{
					echo "<td id = \"today\" class = \"red\">" . $day . "</td>";				
				}
				else
				{
					echo "<td id = \"today\">" . $day . "</td>";
				}
		}
		else
		{
				if($eCount > 3)
				{
					echo "<td class = \"red\">" . $day . "</td>";			
				}
				else
				{
					echo "<td>" . $day . "</td>";
				}
		}
		$day = $day + 1;
	}



	echo "</tbody>";
	echo "</table>";
	echo "</div>";
}


//mktime(time,time,time,month,day,year)
constructCalendar();


?>