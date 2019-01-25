<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" style="margin: auto; padding-left: 1%; text-align: center; right: 0; left: 0;">
	<div class="w3-content w3-section" style="max-width:6000px">
	  <img class="mySlides" src="/xauticmas/assets/gallery/pic1.jpg" style="width:100%">
	  <img class="mySlides" src="/xauticmas/assets/gallery/pic2.jpg" style="width:100%">
	  <img class="mySlides" src="/xauticmas/assets/gallery/pic4.jpg" style="width:100%">
	</div>
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
	  setTimeout(carousel, 2000); // Change image every 2 seconds
	}
</script>