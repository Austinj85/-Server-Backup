var isVisible = false;

function toggleClientForm()
{
	var form = document.getElementById("clientform");
	var existingclient = document.getElementById("existingclient");
	var togglebutton = document.getElementById("toggleclientsform");

	if(isVisible)
	{
		isVisible  = false;
		form.style.display = "none";
		existingclient.style.display = "block";
		togglebutton.innerHTML = "Create a new client."


	}
	else
	{
		isVisible = true;
		form.style.display = "block";
		existingclient.style.display = "none";
		togglebutton.innerHTML = "Search for existing client."
	}



}
