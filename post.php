<?php include("includes/header.php");
	include("includes/bars.php");

?>

<h1>post a review</h1>
<form class="arch_form" action="includes/post_review.php" target="_self" method="post" color="red">
	<label for="fname" color="red">Name/Nickname:</label><br>
  	<input type="text" id="fname" name="fname" placeholder="John" required><br>
  	<label for="femail">Email:</label><br>
 	<input type="email" id="femail" name="femail" placeholder="your@email.com" required><br>
	<label for="fcat">Category</label><br>
  	<select id="fcat" name="fcat" required>
		<?php include("includes/print_categories_form.php"); ?>
	</select><br>
	<label for="ftitle" color="red">Title:</label><br>
	<input type="text" id="ftitle" name="ftitle" placeholder="Gothic is great" required><br>
	<label for="fsummary" color="red">Summary:</label><br>
        <textarea id="fsummary" name="fsummary" placeholder="Place a summary that will be shown in the search panels" rows="3" cols="60" required></textarea><br>
	<label for="fcontent">Review:</label><br>
	<textarea id="fcontent" name="fcontent" rows="8" cols="60" placeholder="Type your full review here" required></textarea> </br>
	<input class="arch_button" type="submit" value="SUBMIT">
</form>
<?php include("includes/footer.php") ?>	
