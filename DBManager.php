<?php 
require "lib/predis/autoload.php";
Predis\Autoloader::register();

class DBManager {

	public $client;
	
	/*
	* initializes redis with the given credentials
	*/
	
	public function __construct() {
		$lines = file("Config.properties"); 
		foreach ($lines as $line) {
			list($k, $v) = explode('=', $line);
			if (rtrim(ltrim($k)) == rtrim(ltrim("app42.paas.db.port"))) {
				$port = rtrim(ltrim($v));
			}if (rtrim(ltrim($k)) == rtrim(ltrim("app42.paas.db.password"))) {
				$password = rtrim(ltrim($v));
			}if (rtrim(ltrim($k)) == rtrim(ltrim("app42.paas.db.ip"))) {
				$ip = rtrim(ltrim($v));
			}
		}
		
		try{
			$this->client = new Predis\Client(array(
			"scheme" => "tcp",
			"host" => "$ip",
			"port" => $port)); 
			$this->client->auth("$password");
		} catch (Exception $e) {
			echo "Couldn't connected to Redis";
			echo $e->getMessage();
		}
    }


	/*
	* push data into redis 
	*/
	
	public function insert($name) {
		
		try{
			$this->client->lpush("username", $name);
		} catch(Exception $e){
				print_r("Exception occured while inserting");
		}
		
    }
	
	/*
	* get all data from redis 
	*/
	
	public function getAllData() {
		return $this->client->lrange("username", 0, 1000);
	}

}

?>