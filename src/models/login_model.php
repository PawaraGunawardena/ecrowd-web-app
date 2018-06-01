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


        $statement= $this -> database->prepare("SELECT 
              username, email, role 
              FROM user WHERE username = :username AND password = :password");

        $statement->execute(array(
            ':username' => $_POST['username'],
            ':password'=>$_POST['password']
        ));
//        echo $_POST['username'];return false;
        $data = $statement->  fetch();
        $role = $data['role'];

        $count = $statement -> rowCount();
//        echo $count;return false;

        if($count==1){
            Session::init();
            Session::set('role', $role);
            Session::set('loggedIn', true);
            Session::set('loggedUser',$_POST['username']);
            header('location: ../index');
        }else{
            header('location: ../login');
        }

//        echo $statement ->rowCount();
        print_r($data);
    }

}