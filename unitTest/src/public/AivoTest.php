<?php
use PHPUnit\Framework\TestCase;
include "./src/public/tools.php";

class AivoTest extends TestCase {
	
	public function testgetValuesFromIniFile() {
		$this->assertTrue( getValuesFromIniFile() != false );
	}
	
	public function testgetValuesFromIniFileCount() {
		$this->assertTrue( getValuesFromIniFile()['count'] > 0 );
	}
	public function testgetValuesFromIniFileConsumerKey() {
		$this->assertTrue( strlen(getValuesFromIniFile()['consumer_key']) == 25 );
	}
	
	public function testgetValuesFromIniFileConsumerSecret() {
		$this->assertTrue( strlen(getValuesFromIniFile()['consumer_secret'])  == 50 );
	}
	public function testgetValuesFromIniFileToken() {
		$this->assertTrue( strlen(getValuesFromIniFile()['access_token']) == 50 );
	}
	public function testgetValuesFromIniFileTokenSecrect() {
		$this->assertTrue( strlen(getValuesFromIniFile()['access_token_secret']) == 45 );
	}

}

?>
