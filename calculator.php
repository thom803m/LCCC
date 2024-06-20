<!doctype html>
<html>
	<head>
		<title>Lorain County Community College</title>
		<link rel="stylesheet" type="text/css" href="Main.css">
		<script>
			var http = createRequestObject();
			
			function ProcessForm(){
				if(ValidateForm()){
					MakeAjaxCall();
				}
			}
			function ValidateForm(){
				bValid=true;
				strErrors="";
				document.getElementById("results").innerHTML="";
				if (document.getElementById("txtCredits").value==""){
					bValid=false;
					strErrors="Missing some credits;";
					
				}
				
				document.getElementById("errors").innerHTML=strErrors;
				return bValid;
		
			}
			

			function createRequestObject() {
				var ro;
				var browser = navigator.appName;
				if(browser == "Microsoft Internet Explorer"){
					ro = new ActiveXObject("Microsoft.XMLHTTP");
				}else{
					ro = new XMLHttpRequest();
				}
				return ro;
			}


			function MakeAjaxCall() {
				url="checkresidency.php?";
				credits=document.getElementById("txtCredits").value;
				resident=document.getElementById("txtResidents").value;
				url=url+"txtCredits="+ credits + "&txtResidents=" + resident;
				http.open('get', url);
				http.onreadystatechange = handleResponse;
				http.send(null);
			}

			function handleResponse() {
				if(http.readyState == 4){
				
					document.getElementById("results").innerHTML=http.responseText;
				}
			}
		</script>
	</head>
	<body>	
		<?php
			
			include ("header.inc");
			include ("nav.inc");

		?>
		<section>
			<h1>Check out how much tuition and costs you have in dollars($).</h1>
			<form>
				Credits: <input type="text" name="txtCredits" id="txtCredits"><br>
				Residents: <select name="txtResidents" id="txtResidents">
							<option value="1">Lorain County Resident</option>
							<option value="2">Out-of-County Resident</option>
							<option value="3">Out-of-State Resident</option>
							</select><br>
				<input  type="button" value="Calculate" name="btnCalculate" onclick="ProcessForm();">
				<span id="errors"></span>
				<span id="results"></span>
			</form>
		</section>
		<?php

			include ("footer.inc");
			
		?>
	</body>
</html>