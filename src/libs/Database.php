<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/12/2018
 * Time: 8:27 AM
 */

class Database extends PDO{

    function __construct($DB_TYPE,$DB_HOST,$DB_NAME,$DB_USER,$DB_PASS){
        parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER,$DB_PASS);
//        echo ' <br>Database Main File<br>';

    }




    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {echo $value;
            $sth->bindValue("$key", $value);
        }
// die;
        $sth->execute();

        return $sth->fetchAll($fetchMode);
    }




    public function selectOne($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {echo $value;
            $sth->bindValue("$key", $value);
        }
// die;
        $sth->execute();

        return $sth->fetch($fetchMode);
    }




    public function insert($table, $data)
    {
        ksort($data);
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(' ,:', array_keys($data));

        echo "INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)";

        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
//            echo $key." ".$value."<br/>";
            $sth->bindValue(":$key", $value);

        }
//        echo $sth;
        $sth->execute();
    }




    public function update($table, $data, $where)
    {
        ksort($data);

        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');

        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
    }



    public function delete($table, $where, $limit = 1)
    {
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }

}