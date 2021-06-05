<?php
// page located at http://yourserver/process_gather.php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
if($_REQUEST['Digits'] =='253'){
	echo "<Response><Pause length=\"1\"></Pause><Play digits=\"wwww9\"></Play> <Pause length=\"1\"></Pause><Say> Please enter. Have a great day!</Say>  <Pause length=\"1\"></Pause> </Response>";
} else {
	echo "<Response><Say>Sorry you entered the wrong key.</Say></Response>";
}
?>
