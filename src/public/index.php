<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Abraham\TwitterOAuth\TwitterOAuth;

require '../../vendor/autoload.php';
include 'tools.php';


// Generate Slim instance
$app = new \Slim\App;

// Route
$app->get('/getT', function (Request $request, Response $response, array $args	) {

	$ini = getValuesFromIniFile();
	
	// Exit with failure.
	if ( !$ini )
		exit(-1);
		
	// Connect to Twitter
	$connection = new TwitterOAuth($ini['consumer_key'], $ini['consumer_secret'], $ini['access_token'], $ini['access_token_secret']);
	$content = $connection->get("account/verify_credentials");
	
	// Checking for connection errors.
	if ( $connection->getLastHttpCode() == 401 ) {
		echo "Error autenticating, check values at .ini file";
		exit(-1);
	} else if ($connection->getLastHttpCode() == 400 ) {
		echo "Error bad request";
		exit(-1);
	}
    // Tweet posted succesfully.
	
	// Retrieve tweets.
	$statuses = $connection->get("statuses/home_timeline", ["count" => $ini['count'], "exclude_replies" => false]);
	
	// Draw screen.
	draw($statuses);

	return $response; // not used at this moment.
});

$app->run();
?>
