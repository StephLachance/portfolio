<?php
// set up some variables
$Name = $_GET['txtName'];
$Pump = $_GET['radPump'];
$PumpCheck = $_GET['checkPump'];
$BGColour = $_GET['selColour'];
// if the name is Nathan ... or any variation in capitals.... then redirect to a cool car site


// note, this header thing, MUST go before anything else is written to page, like the HTML etc. 
if(strtoupper($Name)=="NATHAN")
{
	// Redirecting to a new URL in PHP is done with the header() function
	header("Location: http://www.lamborghini.com/2006/lamboSitenormal.asp?lang=eng");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Your results!</title>
	

	<style type="text/css">

		body {
    	background-color:
<?php  
 	echo $BGColour;
?>
		;
		color:
<?php  
	if ($BGColour=="black") {
	  echo "white";
	} else {
	  echo "black";
	}
?>
		;
		}

	</style>
</head>
	
<body>

<?php
echo "<h1>" . $Name . ", here is your dancing pumkpin! " . "</h1> ";

switch ($PumpCheck)

{
	case "iLike":
		echo "Awh yiss dancing pumpkin!<br><br>";
		break;	
	case "iDontLike":
		echo "Even though you don't like dancing pumpkins, here's one anyways!<br><br>";
		break;
	case "iDontKnow":
		echo "Since you're unsure, here's one anyways!<br><br>";
		break;
} 

switch ($Pump)

{
	case "dancing01":
		echo "<img src='images/dancing01.gif' alt='' />";
		break;
	case "dancing02":
		echo "<img src='images/dancing02.gif' alt=''/>";
		break;	
	case "dancing03":
		echo "<img src='images/dancing03.gif' alt=''/>";
		break;
}
?>


</body>
</html>