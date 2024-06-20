<!doctype html>
<?php
			
			include ("rating.inc");
			include ("checkresidency.inc");
?>
<html>
	<head>
		<title>Lorain County Community College</title>
		<link rel="stylesheet" type="text/css" href="Main.css">
	</head>
	<body>	
			<?php
				$valid=ValidateForm();
				if ($valid){
					DisplayCalculation();
				}
			?>
		</section>
	</body>
</html>