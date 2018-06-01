<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/12/2018
 * Time: 11:49 PM
 */

class FormPartial{

    private $form_name;
    private $attribute_title;
    private $attribute_type;
    private $mobile;

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
    public function getAttributeTitle()
    {
        return $this->attribute_title;
    }

    /**
     * @param mixed $attribute_title
     */
    public function setAttributeTitle($attribute_title)
    {
        $this->attribute_title = $attribute_title;
    }

    /**
     * @return mixed
     */
    public function getAttributeType()
    {
        return $this->attribute_type;
    }

    /**
     * @param mixed $attribute_type
     */
    public function setAttributeType($attribute_type)
    {
        $this->attribute_type = $attribute_type;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }



}