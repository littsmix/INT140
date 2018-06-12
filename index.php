<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Intro to PHP</title>
	</head>
	<body>
		<?php  echo("This uses the echo() function to write to the page."); ?>


		<?php
		// Function to write to page
		echo("<h1>This uses the echo() function to write to the page.</h1>"); ?>

		<?php
		/* Author: JL
			URL: http://jlittler.com
			Description: Multiple line comment
		*/
		echo("<h3>Multiple line comment</h3>"); ?>

		<?php
			$date=date_create("2018-06-12");
			date_add($date,date_interval_create_from_date_string("10 days"));
			echo date_format($date, "Y-m-d");
		?>
		<br />

		<?php
			$dateVar = date("Y M D, h:i:sa");
			$stringVar = 'The Date is ';
			$stringVar = $stringVar . $dateVar;
			echo $stringVar;
		 ?>



	</body>
</html>
