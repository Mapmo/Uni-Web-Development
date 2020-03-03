<?php include("includes/header.php");
	include("includes/bars.php");

?>

<h1>post a review</h1>

<form id="post_review" action="/action_page.php" target="_blank" method="post">
	<label for="fname">Name/Nickname:</label><br>
  	<input type="text" id="fname" name="fname" placeholder="John" required><br>
  	<label for="femail">Last name:</label><br>
 	<input type="email" id="femail" name="femail" placeholder="your@email.com" required><br>
	<label for="fcat">Category</label><br>
  	<select id="fcat" name="fcat" required>
  		<option value="volvo">Volvo</option>
	</select><br>
  	<label for="fconetent">Write your review:</label><br>
	<textarea id="fcontent" name="fcontent" form="post_review" rows="8" cols="60"></textarea> </br>
	<input class="arch_button" type="submit" value="Submit">
</form>

<?php include("includes/footer.php") ?>	
