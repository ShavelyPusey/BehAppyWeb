<?php
	
	require 'autoload.php';

	session_start();

  use Parse\ParseObject;
  use Parse\ParseQuery;
  use Parse\ParseACL;
  use Parse\ParsePush;
  use Parse\ParseUser;
  use Parse\ParseInstallation;
  use Parse\ParseException;
  use Parse\ParseAnalytics;
  use Parse\ParseFile;
  use Parse\ParseCloud;
  use Parse\ParseClient;

ParseClient::initialize('H4eCqPPDZW9QqrBmhYEZNODKjaNqqLoBg2NwqRMV', 'SAGWQHWetIUyUnvjFh2Gz6AOqIrgFvhTkQSLXDeg', 'Vu9JmsClUfIKgu5bxcoXiz1UPZSvqcHPT6kMFZ5z' );

	$user = ParseUser::logIn("sha", "123");

	//$user->set("usernam", "sha");


	$imageQuery = new ParseQuery("Photos");

	try {
		
		$query = new ParseQuery("Photos");
		$query->equalTo("autor", "6kakpVXf9b");
		$results = $query->find();
		echo "Successfully retrieved " . count($results) . " scores.";
		// Do something with the returned ParseObject values
			for ($i = 0; $i < count($results); $i++) {
			  $object = $results[$i];
			  echo $object->getObjectId() . ' - ';
		}	




		
	/*$imageQuery->equalTo("autor", ParseUser::getCurrentUser());
	$results = $imageQuery->find();
	//echo "Successfully retrieved " . count($results) . " scores.";

	for ($i = 0; $i < count($results); $i++) {
		$object = $results[$i];
		echo $object->get('rating') .'|';
	}*/
}
	catch {
	echo "Error";
}
	
?>
