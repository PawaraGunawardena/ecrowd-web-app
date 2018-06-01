<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/12/2018
 * Time: 3:54 PM
 */
class FormGeneral{

//    $this->$name = null;
    private $form_name = null ;
    private $table_name= null;
    private $starting_date;
    private $closing_date;
    private $username;



    function __construct()
    {

    }


    /**
     * @return null
     */
    public function getFormName()
    {
        return $this->form_name;
    }

    /**
     * @param null $form_name
     */
    public function setFormName($form_name)
    {
        $this->form_name = $form_name;
    }

    /**
     * @return null
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * @param null $table_name
     */
    public function setTableName($table_name)
    {
        $this->table_name = $table_name;
    }

    /**
     * @return mixed
     */
    public function getStartingDate()
    {
        return $this->starting_date;
    }

    /**
     * @param mixed $starting_date
     */
    public function setStartingDate($starting_date)
    {
        $this->starting_date = $starting_date;
    }

    /**
     * @return mixed
     */
    public function getClosingDate()
    {
        return $this->closing_date;
    }

    /**
     * @param mixed $closing_date
     */
    public function setClosingDate($closing_date)
    {
        $this->closing_date = $closing_date;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }




}