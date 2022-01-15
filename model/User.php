<?php
class User
{
    private $username = "username";
    private $password = "password";
    private $email = "email";
    private $premium = false;

    public function __construct()
    {
        
    }

    public function get_user_data()
    {
        $user_data = get_object_vars($this);
        unset($user_data['password']);
        return json_encode($user_data);
    }

    public function validate_user_login($username,$password){
        include 'db/connect.php';
        $conn=connect_to_db();
        $query=$conn->prepare("SELECT * FROM user WHERE Username = ? AND Password = ?");
        $query->bind_param("ss",$username,$password);
        $query->execute();
        $res=$query->get_result();
        if($res->num_rows==1){
            $res=$res->fetch_assoc();
            session_start();
            $_SESSION['UserId']=$res['UserId'];
            return true;
        }
        return false;
    }

    public function register_user($username,$password,$email,$premium){
        include 'db/connect.php';
        $conn=connect_to_db();
        $query=$conn->prepare("INSERT INTO user (Username, Password, Email, Premium) VALUES (?,?,?,?)");
        $query->bind_param("ssss",$username,$password,$email,$premium);
        $query->execute();
    }

}

// $p = new User();
// echo $p->username;
// $data = (array) json_decode($p->get_user_data());
// print_r($data);
// echo "<br>".$data['username'];

