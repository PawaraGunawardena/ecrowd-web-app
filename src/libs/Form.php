<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/17/2018
 * Time: 12:10 AM
 */

require 'Form/Val.php';

class Form
{

    /** @var array $_currentItem The immediately posted item*/
    private $_currentItem = null;

    /** @var array $_postData Stores the Posted Data */
    private $_postData = array();

    /** @var object $_val The validator object */
    private $_val = array();

    /** @var array $_error Holds the current forms errors */
    private $_error = array();

    public function __construct() {
        $this->_val = new Val();
    }

    /**
     *
     */
    public function post($field)
    {
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
    }

    public function fetch($fieldName = false)
    {
        if ($fieldName)
        {
            if (isset($this->_postData[$fieldName]))
                return $this->_postData[$fieldName];

            else
                return false;
        }
        else
        {
            return $this->_postData;
        }

    }

    /**
     *
     */
    public function val($typeOfValidator, $arg = null)

    {

        if ($arg == null)
            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]);
        else
            $error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $arg);

        if ($error)
            $this->_error[$this->_currentItem] = $error;

        return $this;
    }




    public function submit()
    {
        if (empty($this->_error))
        {
            return true;
        }
        else
        {
            $str = '';
            foreach ($this->_error as $key => $value)
            {
                $str .= $key . ' => ' . $value . "\n";
            }
            throw new Exception($str);
        }
    }
}