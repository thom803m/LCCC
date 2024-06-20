<!doctype html>
<?php include ("rating.inc");?>
<html>
	<head>
		<title>Lorain County Community College</title>
		<link rel="stylesheet" type="text/css" href="Main.css">
	</head>
	
	<body>
		<style>
			
		</style> 
		<?php

			include ("header.inc");
			include ("nav.inc");
		?>

		
		<section>
			<h1 id="tuition">Tuition and Cost</h1>
			<h2 id="costs">The cost depends on where you live and how many credits you have in total.</h2>
			<table id="credits">
				<tr>
					<th>Credit Hours</th>
					<th>Lorain County Resident</th>
					<th>Out-of-County Resident</th>
					<th>Out-of-State Resident</th>
				</tr>
			<?php
				for($credits=1;$credits <= 22;$credits=$credits+1)
					{
			?>
				<tr>
					<td><?php print($credits); ?></td>
					<td><?php
						$column2=CalcLorain($credits);
						print("$$column2");
					?></td>
					<td><?php
						$column3=CalcCounty($credits);
						print("$$column3");
					?></td>
					<td><?php
						$column4=CalcState($credits);
						print("$$column4");
					?></td>
				</tr>
			<?php
					}
			?>
			</table>
		</section>
		
		<?php
			include ("footer.inc");
			
		?>


	</body>

</html>