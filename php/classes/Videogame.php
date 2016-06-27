<?php

require_once "DBConnection.php";

class Videogame
{
	private $id;
	private $title;
	private $descrip;
	private $date;
	private $avatar;
	private $link;
	private $iduser;
	private $status;
	private static $table = "videogame";
 
	public function __construct($title, $link, $iduser,$id=NULL, $date=NULL, $descrip=NULL, $avatar="img/juegos/default.jpg", $status=1)
	{
			$this->setId($id);
			$this->setTitle($title);
			$this->setDate($date);
			$this->setDescrip($descrip);
			$this->setAvatar($avatar);
			$this->setLink($link);
			$this->setStatus($status);
			$this->setIduser($iduser);
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

	public function setLink($link)
	{
		$this->link = $link;
	}

	public function getLink()
	{
		return $this->link;
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

	static private function arrayToObject($arr)
	{
		return new Videogame($arr['title'],$arr['url'],$arr['user_iduser'],$arr['idvideogame'],$arr['date'],$arr['description'],$arr['avatar'],$arr['status']);		
	}

	static public function getGames($amount=NULL)
	{
		if(IS_NULL($amount)){
			$query = "SELECT * FROM " . static::$table . " ORDER BY date DESC";

			$stmt = DBConnection::getStatement($query);

			$games = [];

			if($stmt->execute()) {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$games[] = $row;
				}			
			}

			return $games;
		}
		else {
			$query = "SELECT * FROM " . static::$table . " ORDER BY date DESC LIMIT " . $amount ;

			$stmt = DBConnection::getStatement($query);

			$games = [];

			if($stmt->execute()) {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$games[] = $row;
				}			
			}

			return $games;
		}
	}

	static public function getGame($id)
	{
		$query = "SELECT * FROM " . static::$table . " WHERE idvideogame=?";

		$stmt = DBConnection::getStatement($query);

		if($stmt->execute([$id])) {
			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				return $row;
			}			
		}

	}

	public function addNew()
	{
		$query = "INSERT INTO " . static::$table . " (title,description,status,url,avatar,user_iduser) VALUES (:title,:description,1,:url,:avatar,:user_iduser)";

		$stmt = DBConnection::getStatement($query);

		return $stmt->execute([
			":title" => $this->title,
			":description" => $this->descrip,
			":url" => $this->link,
			":avatar" => $this->avatar,
			":user_iduser" => $this->iduser
		]);
	}
}