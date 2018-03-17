<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/12/2018
 * Time: 9:11 PM
 */

class Dashboard_Model extends Model
{

    function __construct()
    {
        parent:: __construct();
    }

    function xhrInsert()
    {
        $text = $_POST['mytext'];

        $statement = $this->database->prepare('INSERT INTO test (text) VALUES (:text)');
        $statement->execute(array(
            ':text' => $text
        ));
        $data = array('text' => $text, 'id' => $this->database->lastInsertId());
        echo json_encode($data);
//        header('location: ../dashboard');
    }

    function xhrGetListings()
    {

        $statement = $this->database->prepare('SELECT * FROM test');
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        $data = $statement->fetchAll();
        ob_end_clean();
        echo json_encode($data);

//        $result = $this->database->select("SELECT * FROM test");
//        echo json_encode($result);

    }

    function xhrDeleteListing()
    {
        $id = $_POST['id'];

        $statement = $this->database - prepare('DELETE FROM test WHERE id = :id');

        $statement->execute(array(
                ':id' => $id
            )
        );
        echo json_encode(1);

//        $id = (int) $_POST['id'];
//        $this->db->delete('data', "id = '$id'");
    }

}