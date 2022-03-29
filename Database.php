<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','Crisek?97');
define('DB_DATABASE','clearphp');
class Database {
	private $host = 'localhost';
	private $username = 'root';
	private $password = 'Crisek?97';
	private $database = 'clearphp';

	protected $connection;

	public function __construct(){

		if (!isset($this->connection)) {

			$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}
		}

		return $this->connection;
	}

	public function create_table()
	{
		$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

		$sql =	"CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) UNIQUE,
login VARCHAR(30) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
name VARCHAR(30),
surname VARCHAR(30),
birthday DATE,
pesel INT(11),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
		if ($conn->query($sql) === TRUE) {
		} else {
		}
	}
}
