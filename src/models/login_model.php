<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/12/2018
 * Time: 8:33 AM
 */
class Login_Model extends Model{

    function __construct()
    {
        parent:: __construct();
//        echo '<br>Inside Login Model<br>';
    }

//    function blah(){
//        return 10+10;
//    }

    public function run(){
//        $username = $_POST['username'];
//        $password = $_POST['password'];
//        $this->database->query("SELECT user_id from user where username = '$username' AND password = '$password'");
//


        $statement= $this -> database->prepare("SELECT user_id,
              username, role FROM user WHERE username = :username AND password = :password");

        $statement->execute(array(
            ':username' => $_POST['username'],
            ':password'=>Hash::create('md5',$_POST['password'],HASH_PASSWORD_KEY)
        ));

        $data = $statement->  fetch();
        $role = $data['role'];

        $count = $statement -> rowCount();
        if($count==1){
            Session::init();
            Session::set('role', $role);
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        }else{
            header('location: ../login');
        }

//        echo $statement ->rowCount();
        print_r($data);
    }

}