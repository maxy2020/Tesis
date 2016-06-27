<?php

require_once "DBConnection.php";

class User
{
	private $id;
	private $title;
	private $descrip;
	private $date;
	private $avatar;
	private $iduser;
	private $status;
	private static $table = "user";
 
	public function __construct($email, $user, $pass, $id=NULL, $name=NULL, $lname=NULL, $experience=0, $level=0, $date=NULL, $birthday=NULL, $hig=0, $avatar="img/user/empty.jpg", $status=1)
	{
			$this->setId($id);
			$this->setTitle($title);
			$this->setDate($date);
			$this->setDescrip($descrip);
			$this->setAvatar($avatar);
			$this->setTable($table);
			$this->setStatus($status);
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDescrip($descrip)
	{
		$this->descrip = $descrip;
	}

	public function getDescrip()
	{
		return $this->descrip;
	}

	public function setAvatar($avatar)
	{
		$this->avatar = $avatar;
	}

	public function getAvatar()
	{
		return $this->avatar;
	}

	public static function setTable($table)
	{
		self::$table = $table;
	}

	public static function getTable()
	{
		return self::$table;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setIduser($iduser)
	{
		$this->iduser = $iduser;
	}

	public function getIduser()
	{
		return $this->iduser;
	}


