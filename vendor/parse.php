<?php
// define location of Parse PHP SDK, e.g. location in "Parse" folder
// Defaults to ./Parse/ folder. Add trailing slash
define( 'PARSE_SDK_DIR', './Parse/' );
// include Parse SDK autoloader
require_once( 'autoload.php' );
// Add the "use" declarations where you'll be using the classes
use Parse\ParseClient;
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
// Init parse: app_id, rest_key, master_key
ParseClient::initialize('FcONE4kvJfViZpfIE3IWufHmuMXVeMozus6DfqUO', '8ASOmXjHjr20cJ8hJENhVTnhM1NPZ7udLGSWAFbd', 'Qx8k6DasCL5VXvzzxsWlM9eY4httZYCfaYyToQJD');
// save something to class TestObject
//$testObject = ParseObject::create("TestObject");
//$testObject->set("foo", "bar");
//$testObject->save();

$gameScore = new ParseObject("ShaInfo");

$gameScore->set("name", "Shavely");
$gameScore->set("age", "22");
$gameScore->set("boyfriend","Amore");

try {
  $gameScore->save();
 // echo 'New object created with objectId: ' . $gameScore->getObjectId();
} catch (ParseException $ex) {  
  // Execute any logic that should take place if the save fails.
  // error is a ParseException object with an error code and message.
  echo 'Failed to create new object, with error message: ' . $ex->getMessage();
}

?>
