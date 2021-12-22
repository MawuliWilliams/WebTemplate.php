<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template</title>
</head>
<body>
	<?php include("inc_header.html"); ?>
	<div style="width: 20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>

	</div>
	<!--Start of the Dynamic Content Section -->
	<?php
		// Check if the submit buttons were clicked or if we just opened the page
		if(isset($_GET["content"])){
			switch($_GET["content"]){
				case "About Us":
					include("inc_about.html");
					break;
				case "Contact Me":
					include("inc_contact.html");
					break;
				default:
					include("inc_home.html");
					break;

			}// end of switch

		}
		else{
			// no button was clicked
			include("inc_home.html");
		}
	?>

</body>
</html>