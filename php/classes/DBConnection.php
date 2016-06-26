<?php

class DBConnection
{

	private static $database;

	private function __construct() {}

	private static function connect()
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$name = "reminds";
		$dsn = "mysql:host=" . $host . ";dbname=" . $name . ";charset=utf8";

		try {
			self::$database = new PDO($dsn, $user, $pass);
		} catch(Exception $e) {
			echo "Oops, error en la página: " . $e->getMessage();
		}
	}

	public static function getConnection()
	{
		if(empty(self::$database)) {
			self::connect();
		}

		return self::$database;
	}

	public static function getStatement($query)
	{
		return self::getConnection()->prepare($query);
	}
}