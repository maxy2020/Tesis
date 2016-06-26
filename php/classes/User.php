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

	/* data id iduser */
	private function setId($id)
	{
		if(is_null($id) || is_int(intval($id,10))) {
			$this->id = $id;
		}
		else {
			throw new Exception('el ID no es valido.'.$id);			
		}
	}
	public function getId()
	{
		return $this->id;
	}

	/* data user username */
	private function setUser($user)
	{
		if(strlen($user)>=4 && strlen($user)<=45) {
			$this->user = $user;
		}
		else {
			throw new Exception('No ingreso un usuario valido.');			
		}
	}
	public function getUser()
	{
		return $this->user;
	}

	/* data pass password */
	private function setPass($pass)
	{
		if(strlen($pass)>=6 && strlen($pass)<=15) {
			$this->pass = password_hash($pass, PASSWORD_BCRYPT);
		}
		elseif(strlen($pass)==60) {
			$this->pass = $pass;			
		}
		else {
			throw new Exception('No ingreso una contraseña valida.');
		}
	}
	public function getPass()
	{
		return $this->pass;
	}

	/* data email email */
	private function setEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {		    
			$this->email = $email;
		}
		else {
			throw new Exception('No ingreso un email valido.');
		}
	}
	public function getEmail()
	{
		return $this->email;
	}

	/* data name name */
	private function setName($name)
	{
		if((strlen($name)>=4 && strlen($name)<=45) || is_null($name)) {
			$this->name = $name;
		}
		else {
			throw new Exception('No ingreso un nombre valido.');			
		}
	}
	public function getName()
	{
		return $this->name;
	}

	/* data lname lastname */
	private function setLname($lname)
	{
		if((strlen($lname)>=4 && strlen($lname)<=45) || is_null($lname)) {
			$this->lname = $lname;
		}
		else {
			throw new Exception('No ingreso un apellido valido.');			
		}
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
		if(new DateTime($date)) {
			$this->date = $date;			
		}
		else {
			throw new Exception('No ingreso una fecha de creado valido.');	
		}
	}
	public function getDate()
	{
		return $this->date;
	}

	/* data birthday birthday */
	private function setBirthday($birthday)
	{
		if((new DateTime($birthday)) || is_null($birthday)) {
			$this->birthday = $birthday;			
		}
		else {
			throw new Exception('No ingreso una fecha de cumpleaños valida.');	
		}
	}
	public function getBirthday()
	{
		return $this->birthday;
	}

	/* data hig hoursingame */
	private function setHig($hig)
	{
		if(is_int(intval($hig)) || is_null($hig)) {
			$this->hig = $hig;			
		}
		else {
			throw new Exception('No ingreso cantidad de horas validas.');
		}
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

	static private function arrayToObject($arr)
	{
		return new User($arr["email"],$arr["username"],$arr["password"],$arr["iduser"],$arr["name"],$arr["lastname"],$arr["experience"],$arr["level"],$arr["date"],$arr["birthday"],$arr["hoursingame"],$arr["avatar"],$arr["status"]);		
	}

	/* actions GET DB */

	static public function getAll()
	{
		$query = "SELECT * FROM " . static::$table;

		$stmt = DBConnection::getStatement($query);

		$users = [];

		if($stmt->execute()) {
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$users[] = get_object_vars (static::arrayToObject($row));
			}			
		}

		return $users;
	}

	/* objeto a arreglo */


	static public function getById($id)
	{
		$query = "SELECT * FROM " . static::$table . " WHERE iduser = ?";

		$stmt = DBConnection::getStatement($query);

		if($stmt->execute([$id])) {
			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				return get_object_vars (static::arrayToObject($row));
			}			
		}

		return false;
	}

	static public function getByUserName($user)
	{
		$query = "SELECT * FROM " . static::$table . " WHERE username = ?";

		$stmt = DBConnection::getStatement($query);

		if($stmt->execute([$user])) {
			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				return static::arrayToObject($row);
			}			
		}

		return false;
	}

	/* actions REMOVE DB */

	public function remove()
	{
		$query = "UPDATE " . static::$table . " SET status=0 WHERE iduser = ? AND status=1";

		$stmt = DBConnection::getStatement($query);

		return $stmt->execute([$this->id]);
	}

	static public function removeById($id)
	{
		$query = "UPDATE " . static::$table . " SET status=0 WHERE iduser = ? AND status=1";

		$stmt = DBConnection::getStatement($query);

		return $stmt->execute([$id]);
	}

	static public function removeByUserName($user)
	{
		$query = "SELECT * FROM " . static::$table . " WHERE username = ?";

		$stmt = DBConnection::getStatement($query);

		return $stmt->execute([$user]);
	}

	/* actions ADD NEW DB */

	public function addNew()
	{
		$query = "INSERT INTO " . static::$table . " (username,password,email) VALUES (:username,:password,:email)";

		$stmt = DBConnection::getStatement($query);

		return $stmt->execute([
			":username" => $this->user,
			":password" => $this->pass,
			":email" => $this->email
		]);
	}

}