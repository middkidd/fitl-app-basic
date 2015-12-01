<?php
$id= $_REQUEST['id'];

$title = '';
$question = '';
$description = '';
$code ='';
$date ='';

// set the object variables
// based on the id value from the URL

if ($id == 1) {
	$title = 'A Campus Ride';
	$question = 'Trouble finding a ride to the airport?';
	$description = 'Get a ride to anywhere from your friends on the campus!';
	$code = 'alert(This is a message)';
	$date = 'Dec 1, 2015';
} 

elseif ($id == 2) {
	$title = 'Register Now';
	$question = 'Pay less on your ride to the airport or earn some extra money!';
	$description = 'Follow these easy steps to register your car and yourself!';
	$code = 'alert(This is a message)';
	$date = 'Question Date: Dec 1, 2015';
}
?>


<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>

	<body>
		<h1><?php echo $question; ?></h1>
		<p><?php echo $description; ?></p>
		<pre>
			<?php echo $code; ?>
		</pre>
		<p><?php echo $date; ?></p>
	</body>
</html>