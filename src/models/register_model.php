<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/18/2018
 * Time: 3:28 AM
 */

class Register_Model extends Model{

    function __construct()
    {
        parent:: __construct();
//        echo '<br>Inside Register Model<br>';
    }

    public function create($data){
//        echo $data['username'];
//        echo $data['email'];
//        echo $data['first_name'];
//        echo $data['last_name'];
//        echo $data['password'];
//        echo $data['role'];
//        $statement = $this -> database -> prepare(
//            'INSERT INTO user ( username, email, first_name, last_name,password, role)
//                      VALUES(:username, :email, :first_name, :last_name, :password,:role)'   );
//        $statement ->execute(array(
//            ':username' => $data['username'],
//            ':email' => $data['email'],
//            ':first_name' => $data['first_name'],
//            ':last_name' => $data['last_name'],
//            ':password' => Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
//            ':role'=>$data['role']
//        ));

        $this-> database ->insert('user', array(
            'username' => $data['username'],
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
//            'password' => Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
            'password'=>$data['password'],
            'role'=>$data['role']
        ));

//        echo $data['username'];
    }


}