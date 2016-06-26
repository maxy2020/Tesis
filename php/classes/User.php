<?php


require_once "DBConnection.php";

class User
{
	private $id;
	private $user;
	private $pass;
	private $email;
	private $name;
	private $lname;
	private $experience;
	private $level;
	private $date;
	private $birthday;
	private $hig;
	private $avatar;
	private $status;
	private static $table = "user";
 
	public function __construct($email, $user, $pass, $id=NULL, $name=NULL, $lname=NULL, $experience=0, $level=1, $date=NULL, $birthday=NULL, $hig=0, $avatar="img/user/empty.jpg", $status=1,)
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

	/* data id iduser */
	private function setId($id)
	{
		$this->id = $id;
	}
	public function getId()
	{
		return $this->id;
	}
	/* data user username */
	private function setUser($user)
	{
		$this->user = $user;
	}
	public function getUser()
	{
		return $this->user;
	}
	/* data pass password */
	private function setPass($pass)
	{
		$this->pass = $pass;
	}
	public function getPass()
	{
		return $this->pass;
	}
	/* data email email */
	private function setEmail($email)
	{
		$this->email = $email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	/* data name name */
	private function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
	/* data lname lastname */
	private function setLname($lname)
	{
		$this->lname = $lname;
	}
	public function getLname()
	{
		return $this->lname;
	}
	/* data experience experience */
	private function setExperience($experience)
	{
		$this->experience = $experience;
	}
	public function getExperience()
	{
		return $this->experience;
	}
	/* data level level */
	private function setLevel($level)
	{
		$this->level = $level;
	}
	public function getLevel()
	{
		return $this->level;
	}
	/* data date date */
	private function setDate($date)
	{
		$this->date = $date;
	}
	public function getDate()
	{
		return $this->date;
	}
	/* data birthday birthday */
	private function setBirthday($birthday)
	{
		$this->birthday = $birthday;
	}
	public function getBirthday()
	{
		return $this->birthday;
	}
	/* data hig hoursingame */
	private function setHig($hig)
	{
		$this->hig = $hig;
	}
	public function getHig()
	{
		return $this->hig;
	}
	/* data avatar avatar */
	private function setAvatar($avatar)
	{
		$this->avatar = $avatar;
	}
	public function getAvatar()
	{
		return $this->avatar;
	}
	/* data status status */
	private function setStatus($status)
	{
		$this->status = $status;
	}
	public function getStatus()
	{
		return $this->status;
	}





/*
	private function setId($id)
	{
		if(is_null($id) || is_int(intval($id,10))) {
			$this->id = $id;
		}
		else {
			throw new Exception('el ID no es valido.'.$id);			
		}

	}

	private function setName($name)
	{
		if(strlen($name)>=4 && strlen($name)<=15) {
			$this->user = $name;
		}
		else {
			throw new Exception('No ingreso un usuario valido.');			
		}

	}

	private function setPass($pass)
	{
		if(strlen($pass) >= 4 && strlen($pass) <= 12) {
			$this->pass = md5($pass);
		}
		else if(strlen($pass)==32){
			$this->pass = $pass;
		}
		else {
			throw new Exception('El password no cumple con los requisitos.');
		}
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->user;
	}

	public function getPassword() {
		return $this->pass;
	}

	public static function getUsers()
	{
			$query = "SELECT * FROM " . static::$table;

			$stmt = DBConnection::getStatement($query);

			$users = [];

			if($stmt->execute()) {
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					$user = new User($row["users"],$row["pass"],$row["iduser"]);
					$users[] = $user;
				}			
			}

			return $users;
	}

	public static function getUserByName($name)
	{
		$query = "SELECT * FROM " . static::$table . " WHERE users = ?";

		$stmt = DBConnection::getStatement($query);

		if($stmt->execute([$name])) {
			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$user = new User($row["users"],$row["pass"],$row["iduser"]);
				return $user;
			}
		}

		return false;
	}

	public static function getUserById($id)
	{
		$query = "SELECT * FROM " . static::$table . " WHERE iduser = ?";

		$stmt = DBConnection::getStatement($query);

		if($stmt->execute([$id])) {
			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$user = new User($row["users"],$row["pass"],$row["iduser"]);
				return $user;
			}
			else {
				return false; /* algo que identifique que el id no existe 
			}
		}
		else {
			return false; /* parametro malo 
		}

	}
*/
}