<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/13/2018
 * Time: 12:03 AM
 */

class FormPartialValue{

    private $form_name;
    private $partial_name;
    private $partial_value;

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getFormName()
    {
        return $this->form_name;
    }

    /**
     * @param mixed $form_name
     */
    public function setFormName($form_name)
    {
        $this->form_name = $form_name;
    }

    /**
     * @return mixed
     */
    public function getPartialName()
    {
        return $this->partial_name;
    }

    /**
     * @param mixed $partial_name
     */
    public function setPartialName($partial_name)
    {
        $this->partial_name = $partial_name;
    }

    /**
     * @return mixed
     */
    public function getPartialValue()
    {
        return $this->partial_value;
    }

    /**
     * @param mixed $partial_value
     */
    public function setPartialValue($partial_value)
    {
        $this->partial_value = $partial_value;
    }


}