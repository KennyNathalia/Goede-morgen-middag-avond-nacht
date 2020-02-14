<?php
	date_default_timezone_set("Europe/Amsterdam");
	$timelive = date("H:i");
	$tijd = date("H");

	if ($tijd >= 6 && $tijd < 12) {
		$img = 'morning.png';
		$message = "Goede Morgen! <br> Het is nu ";
	}
	if ($tijd >= 12 && $tijd < 18) {
		$img ='afternoon.png';
		$message = "Goede Middag! <br> Het is nu ";
	} 
	if ($tijd >= 18 && $tijd <= 23) {
		$img = 'evening.png';
		$message = "Goede Avond! <br> Het is nu ";
	} 
	if ($tijd >= 0 && $tijd < 6) {
		$img = 'night.png';
		$message = "Goede Nacht! <br> Het is nu ";
	}
?>