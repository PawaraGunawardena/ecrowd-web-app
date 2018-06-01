<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/13/2018
 * Time: 11:56 PM
 */

class Note_Model extends Model{

    function __construct()
    {
        parent:: __construct();
//        echo '<br>Inside User Model<br>';
    }

    public function noteList(){
//
//        $statement = $this -> database -> prepare(
//            'SELECT user_id, username, email, first_name, last_name, role FROM user'
//        );
//        $statement ->execute();
//        return $statement->fetchAll();

        return $this->database->select('SELECT * FROM note');
    }

    public function noteSingleList($id){
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
            'SELECT *
                      FROM note WHERE id =:id', array(':id' => $id));
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


    public function delete($id){
//        $statement = $this->database->prepare('DELETE FROM user WHERE user_id =:user_id');
//        $statement->execute(array(
//            ':user_id' =>$id
//        ));

        $result = $this->database->selectOne('SELECT role FROM user WHERE id = :id',
            array(':user_id' => $id));

        if ($result['role'] == 'owner')
            return false;

        $this->database->delete('user', "user_id = '$id'");
    }
    public function editSave($data){
//        echo $data['username'];
//        echo $data['email'];
//        echo $data['first_name'];
//        echo $data['last_name'];
//        echo $data['password'];
//        echo $data['role'];

//        $statement = $this -> database -> prepare(
//            'UPDATE user SET username = :username, email = :email, first_name = :first_name
//                              , last_name = :last_name ,password = :password, role = :role
//                              WHERE user_id = :user_id')                      ;
//        $statement ->execute(array(
//            ':user_id' => $data['user_id'],
//            ':username' => $data['username'],
//            ':email' => $data['email'],
//            ':first_name' => $data['first_name'],
//            ':last_name' => $data['last_name'],
//            ':password' =>Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
//            ':role'=>$data['role']
//        ));

        $postData = array(
            'username' => $data['username'],
            'email' => $data['email'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'password' => Hash::create('md5',$data['password'],HASH_PASSWORD_KEY),
            'role'=>$data['role']
        );

        $this->database->update('user ', $postData, "`user_id` = {$data['user_id']}");
    }}