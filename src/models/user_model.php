<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/13/2018
 * Time: 11:56 PM
 */

class User_Model extends Model{

    function __construct()
    {
        parent:: __construct();
//        echo '<br>Inside User Model<br>';
    }

    public function userList(){
//
//        $statement = $this -> database -> prepare(
//            'SELECT user_id, username, email, first_name, last_name, role FROM user'
//        );
//        $statement ->execute();
//        return $statement->fetchAll();

        return $this->database->select('SELECT username, email, first_name, last_name, role FROM user');
    }

    public function userSingleList($username){
//        $statement = $this -> database -> prepare(
//            'SELECT user_id, username, email, first_name, last_name, role FROM user WHERE user_id =:user_id'
//        );
//        $statement ->execute(array(
//            ':user_id' => $id
//        ));
//        return $statement->fetch();

        /*
         * Below implementation use with the Database select statement. But it includes fetchAll can't assist with
         * single row
        */
        return $this->database->selectOne(
            'SELECT username, email, first_name, last_name, role
                      FROM user WHERE username =:username', array(':username' => $username));
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
            'password' => Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
            'role'=>$data['role']
        ));
//        echo $data['username'];
    }


    public function delete($username){
//        $statement = $this->database->prepare('DELETE FROM user WHERE user_id =:user_id');
//        $statement->execute(array(
//            ':user_id' =>$id
//        ));

        $result = $this->database->selectOne('SELECT role FROM user WHERE username = :username',
            array(':username' => $username));

        if ($result['role'] == 'owner')
            return false;

        $this->database->delete('user', "username = '$username'");
    }
    public function editSave($data, $username){
        echo $data['username'];
        echo $data['email'];
        echo $data['first_name'];
        echo $data['last_name'];

        echo $data['role'];

        $statement = $this -> database -> prepare(
            'UPDATE user SET username = :username, email = :email, first_name = :first_name
                              , last_name = :last_name ,password = :password, role = :role
                              WHERE username = :username')                      ;
        $statement ->execute(array(
            ':username' => $data['username'],

            ':email' => $data['email'],
            ':first_name' => $data['first_name'],
            ':last_name' => $data['last_name'],
            ':password' =>Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
            ':role'=>$data['role']
        ));

//        $postData = array(
//            'username' => $data['username'],
//            'email' => $data['email'],
//            'first_name' => $data['first_name'],
//            'last_name' => $data['last_name'],
//            'password' => Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
//            'role'=>$data['role']
//        );
//
//        $this->database->update('user ', $postData, "`username` = $username");
    }}