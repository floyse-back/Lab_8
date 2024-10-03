


<?php
class db_connect{
    private $host="localhost";
    private $username="root";
    private $password="";
    private $database="anketabase";
    private $conn;

    public function connect_MYSQL(){
        $this->conn=mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
    public function check_connect(){
        if (!$this->conn){
            self::connect_MYSQL();
        }      
    }
    public function insert_into_ank($name,$email,$question1,$question2,$question3,$question4,$question5,$time){
        self::check_connect();
        $query="INSERT INTO users (name,email,question1,question2,question3,question4,question5,date)
        VALUES ('{$name}','$email','{$question1}','{$question2}','{$question3}','{$question4}','{$question5}','{$time}')";
        mysqli_query($this->conn,$query);
    }
    public function select_from_ask(){
        self::check_connect();
        $query="SELECT * FROM users";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }
    public function delete_anketa($id){
        self::check_connect();
        $query="DELETE FROM users 
        WHERE id={$id}";
        mysqli_query($this->conn,$query);

    }

}
?>

