<?php
require 'logic.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>P2 | xkcd Password Generator</title>

	<link href='css/style.css' rel='stylesheet'>


</head>
<body>


	<div class='container'>
		<h1>xkcd Password Generator</h1>

		<p class='password'>

    </p>

		<form action='logic.php' method='GET'>


				<label for='n_words'>Number of words</label>
				<input maxlength=1 type='number' name='n_words' id='n_words' value=''>  (Max 9)

        <br>

				<input type='checkbox' name='add_number' id='add_number' >
				<label for='add_number'>Add a number</label>

        <br>

				<input type='checkbox' name='add_symbol' id='add_symbol' >
				<label for='add_symbol'>Add a symbol</label>

        <br>
        <br>
		  	<input type='submit' class='btn btn-default' value='Generate'>

							<div class='error'>
									</div>

		</form>

		<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>

			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>

	</div>

</body>
</html>
