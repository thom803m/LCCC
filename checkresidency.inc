		<?php
			function DisplayCalculation() {
				$credits=$_REQUEST["txtCredits"];
				$resident=$_REQUEST["txtResidents"];
				$result=CalculateTuition($credits, $resident);
				if ($resident==1 || $resident==2 || $resident==3){	
					print $result;
				}
			}
			
			function ValidateForm(){
				$valid=true;
				$credits=$_REQUEST["txtCredits"];
				$resident=$_REQUEST["txtResidents"];
				if (!isset($credits)){
					$valid=false;
					print ("<p>Please insert your credits</p>");
					
				}
				if (!is_numeric($credits)){
					$valid=false;
					print ("<p>You must use a number. Credit is a number, right?</p>");
					
				}	
				return $valid;
			}
		?>