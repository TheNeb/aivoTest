<?php

// draw( $statuses ) : Draw tweets
function draw( $statuses ) {

	echo"<!DOCTYPE html>";
	// CDN's.
	echo"<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>";
	echo"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
	echo"<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js'></script>";
	
	echo "<div class='container-fluid'>";
	
	echo "<h1>Tweets</h1>";
	
	echo "<div class='panel panel-default'>";
	
	foreach($statuses as $item) {
		// If it's a replay then...
		if ( $item->in_reply_to_user_id > 0 ) {
			echo "<div class='panel-heading'>";
			echo $item->created_at . "<br>reply to: ". $item->in_reply_to_screen_name . "(" . $item->in_reply_to_user_id . ")</div>";
			echo "<div class='panel-body'>";
			echo $item->text . "</div>";
		} 
		else 
		{
			echo "<div class='panel-heading'>";
			echo $item->created_at . "</div>";
			echo "<div class='panel-body'>";
			echo $item->text . "</div>";
		}
	}
	
	echo "</div>"; //panel panel-default
	echo "</div>"; //container-fluid
	echo "</html>";
}

function getValuesFromIniFile () {
	$ini = parse_ini_file('config.ini');

	if ( !$ini ) {
		echo "Error reading ini file.";
		return false;
	}	
	
	return $ini;
}

?>
