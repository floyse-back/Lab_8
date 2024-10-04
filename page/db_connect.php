


<?php
class db_connect{
    private $dsn = 'mysql:host=localhost;dbname=users_comments';
    private $username="root";
    private $password="";
    private $database="users_comments";
    private $conn;

    public function connect_MYSQL(){
        $this->conn=new PDO($this->dsn, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function check_connect(){
        if (!$this->conn){
            self::connect_MYSQL();
        }      
    }
    public function SELECT_USERS(){
        self::check_connect();
        $stmt= $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            echo "ID: {$row['id']}, Name: {$row['name']}, Email: {$row['email']}";
        }
    }
    public function insert_user($username,$email,$password){
        self::check_connect();
        $stmt= $this->conn->prepare("INSERT INTO users (username,email,password)
        VALUES (:username, :email, :password)");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
    }
    public function SELECT_COMMENTS(){
        self::check_connect();
        $stmt= $this->conn->prepare("SELECT username, comment FROM comments");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function INSERT_COMMENTS($username,$comment){
        self::check_connect();
        $stmt= $this->conn->prepare("INSERT INTO comments (username,comment)
        VALUES (:username,:comment)");
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":comment", $comment, PDO::PARAM_STR);
        $stmt->execute();
    }
}
?>

