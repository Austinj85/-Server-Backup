function closeBanner()
{
	document.getElementById('dropdown').style.display = 'none';
  document.getElementById('dropdownhome').style.display = 'none';
}

function openDropdown(text)
{
    if(text == "two")
    {
		  dropdown = document.getElementById('dropdown');
    }
    else
    {
        dropdown = document.getElementById('dropdownhome'); 
    }
		var one = document.getElementById(text);
		dropdown.style.display = 'block';
		dropdown.style.position="absolute";

		dropdown.style.top = parseInt(one.getBoundingClientRect().bottom) + window.pageYOffset +  'px';
		dropdown.style.left = parseInt(one.getBoundingClientRect().left) + 'px';

		console.log(one.getBoundingClientRect().left);

}

function keepDropdownOpen(text)
{
    var dropdown;

      dropdown = document.getElementById('dropdown');


		dropdown.style.display = 'block';




}

function keepHomeOpen(text)
{
    var dropdown;

      dropdown = document.getElementById('dropdownhome');


    dropdown.style.display = 'block';




}


document.getElementById("dropdown").onmouseover = function() {
  // code to run when the user hovers over the div
  keepDropdownOpen();
};

document.getElementById("dropdown").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();
};

document.getElementById("dropdownhome").onmouseover = function() {
  // code to run when the user hovers over the div
  keepHomeOpen();
};

document.getElementById("dropdownhome").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();
};


document.getElementById("one").onmouseover = function() {
  // code to run when the user hovers over the div
  openDropdown("one");
};

document.getElementById("one").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();
};




document.getElementById("two").onmouseover = function() {
  // code to run when the user hovers over the div
  openDropdown("two");
};

document.getElementById("two").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();
};



document.getElementById("three").onmouseover = function() {
  // code to run when the user hovers over the div
  openDropdown("three");
};

document.getElementById("three").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();

};

document.getElementById("four").onmouseover = function() {
  // code to run when the user hovers over the div
  openDropdown("four");
};

document.getElementById("four").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();
};

document.getElementById("five").onmouseover = function() {
  // code to run when the user hovers over the div
  openDropdown("five");
};

document.getElementById("five").onmouseout = function() {
  // code to run when the user hovers over the div
  closeBanner();
};

closeBanner();