
		date = new Date();
		createCalendarWidget(date);

	
		function daysInMonth(month,year) 
		{
			return new Date(year, month, 0).getDate();
		}
		
		function createCalendarWidget(date)
		{
			Months = ["January","February", "March","April","May","June","July","August","September", "October","November","December"];
			today = date;

			
			var isNextMonth = false;
			var month = today.getMonth();
			var year = today.getFullYear();
			var day = today.getUTCDate();
			
			
			var numDays = daysInMonth(month+1,year);
			var firstDayOfMonth = new Date((month+1).toString()+"/"+"1"+"/"+year.toString());			

				tableHeader = 	 "<div class = \"cal\">"
										+ "<table>"
										+ "<th colspan = \"7\" class = \"month title\">"+ Months[month] + " " + year.toString() + "</th>"
										+ "<tr class =\"weekdays\">"
										+ "<th  >Su</th>"
										+ "<th>Mo</th>"
										+ "<th>Tu</th>"
										+ "<th>We</th>"
										+ "<th>Th</th>"
										+ "<th>Fr</th>"
										+ "<th>Sa</th>"
										+ "</tr>";
										
			var tableBodyOne = "<tr>";
										
			var i = 0;
			var curDay = 1;
			
			
			for(i = 0;i<(firstDayOfMonth.getDay());i++)
			{
				tableBodyOne = tableBodyOne + "<td></dt>";
			
			}
			

			for(i;i<7;i++)
			{
				if(curDay == day)
				{
					tableBodyOne += "<td id = \"today\">" +curDay.toString()+"</td>";
				}
				else
				{
					tableBodyOne += "<td>" +curDay.toString()+"</td>";			
				}
				curDay++;
			}
			
			tableBodyOne += "</tr>";
			
			var tableBodyTwo =  "<tr>"
			

			
			for(i=0;i<7;i++)
			{
				if(curDay == day)
				{
					tableBodyTwo += "<td id = \"today\">" +curDay.toString()+"</td>";
				}
				else
				{
					tableBodyTwo += "<td>" +curDay.toString()+"</td>";			
				}
				curDay++;
			}
			
			tableBodyTwo += "</tr>";
			
					
			
			tableBodyTwo += "<tr>";
			
			for(i=0;i<7;i++)
			{
				if(curDay == day)
				{
					tableBodyTwo += "<td id = \"today\">" +curDay.toString()+"</td>";
				}
				else
				{
					tableBodyTwo += "<td>" +curDay.toString()+"</td>";			
				}
				curDay++;
			}
			
			tableBodyTwo += "</tr>";
			
			tableBodyTwo += "<tr>";
			
			for(i=0;i<7;i++)
			{
				if(curDay == day)
				{
					tableBodyTwo += "<td id = \"today\">" +curDay.toString()+"</td>";
				}
				else
				{
					tableBodyTwo += "<td>" +curDay.toString()+"</td>";			
				}
				curDay++;
			}
			
			tableBodyTwo += "</tr>";
			
			
			tableBodyTwo += "<tr>";
			
			for(i=0;i<7;i++)
			{			
				if(curDay > numDays)
				{
					curDay = 1;
					isNextMonth = true;
				}
				if(curDay == day)
				{
					tableBodyTwo += "<td id = \"today\">" +curDay.toString()+"</td>";
				}
				else
				{
					tableBodyTwo += "<td>" +curDay.toString()+"</td>";			
				}
				curDay++;
			}

			tableBodyTwo += "</tr>";
			
			if(curDay <= numDays && !isNextMonth)
			{

				tableBodyTwo += "<tr>";
				
			for(i=0;i<7;i++)
			{			
				if(curDay > numDays)
				{
					curDay = 1;
					isNextMonth = true;
				}
				tableBodyTwo +="<td>" +curDay.toString()+"</td>";
				curDay++;
			}

				tableBodyTwo += "</tr>";
			}
			
			tableBodyTwo += "</table>"
								     + "</div>";

		document.write(tableHeader + tableBodyOne + tableBodyTwo);
	}
		

