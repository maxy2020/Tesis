<?php

require_once "DBConnection.php";

class User
{
	private $id;
	private $title;
	private $descrip;
	private $date;
	private $avatar;
	private $status;
	private static $table = "user";
 
	public function __construct($email, $user, $pass, $id=NULL, $name=NULL, $lname=NULL, $experience=0, $level=0, $date=NULL, $birthday=NULL, $hig=0, $avatar="img/user/empty.jpg", $status=1)
	{
			$this->setId($id);
			$this->setUser($user);
			$this->setPass($pass);
			$this->setEmail($email);
			$this->setName($name);
			$this->setLname($lname);
			$this->setExperience($experience);
			$this->setLevel($level);
			$this->setDate($date);
			$this->setBirthday($birthday);
			$this->setHig($hig);
			$this->setAvatar($avatar);
			$this->setStatus($status);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getDescrip()
	{
		return $this->descrip;
	}

	public function setDescrip($descrip)
	{
		$this->descrip = $descrip;
	}

	public function getAvatar()
	{
		return $this->avatar;
	}

	public function setAvatar($avatar)
	{
		$this->avatar = $avatar;
	}

	public static function getTable()
	{
		return self::$table;
	}

	public static function setTable($table)
	{
		self::$table = $table;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

