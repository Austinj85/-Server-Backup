
	<div class="myFirstCarousel">
	  <img class="mySlides" src="Images/casinopic1.png" style="width:100%">
	  <img class="mySlides" src="Images/casinopic2.png" style="width:100%">
	  <img class="mySlides" src="Images/casinopic3.jpg" style="width:100%">
	  <img class="mySlides" src="Images/casinopic4.jpg" style="width:100%">
	</div>
	<script>
	var myIndex = 0;
	carousel();
	
	function carousel() {
	    var i;
	    var x = document.getElementsByClassName("mySlides");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";
	    }
	    myIndex++;
	    if (myIndex > x.length) {myIndex = 1}
	    x[myIndex-1].style.display = "block";
	    setTimeout(carousel, 5000);
	}
	</script>