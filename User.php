<?php
include_once('Database.php');

class User extends Database {
	public function register_user($login, $email, $password, $name, $surname, $birthday, $pesel){
		$sql = "INSERT INTO users (login, email, password, name, surname, birthday, pesel)
VALUES ('$login', '$email', '$password', '$name', '$surname', '$birthday', '$pesel')";
		$query = $this->connection->query($sql);

		if ($query === TRUE) {
			header("Location: http:///clearphp.test/login.php", TRUE, 301);

		} else {
			echo "Error: " . $sql . "<br>" . $query->error;
		}

	}

	public function update_details($id, $name, $password)
	{
		$sql = "UPDATE users SET name = '$name', password  = '$password'  WHERE id = '$id'";
		$query = $this->connection->query($sql);
		mysqli_query($this->connection, $sql);
	}

	public function check_login($username, $password){

		$sql = "SELECT * FROM users WHERE login = '$username' AND password = '$password'";
		$query = $this->connection->query($sql);

		if($query->num_rows > 0){
			$row = $query->fetch_array();
			return $row['id'];
		}
		else{
			return false;
		}
	}
	public function details($sql){

		$query = $this->connection->query($sql);

		$row = $query->fetch_array();

		return $row;
	}

	public function escape_string($value){

		return $this->connection->real_escape_string($value);
	}


}