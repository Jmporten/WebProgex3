<?php
/**
 * Created by PhpStorm.
 * User: Michael Porten
 * Date: 2/5/2018
 * Time: 10:18 AM
 */

class regUser extends Users
{
    //static method
    public static function staticFunc($a, $b){
        return ($a + $b) * $a;
    }

    //methods
    function __construct($user_level, $user_id){
        parent::__construct(1);
        $this->user_id = $user_id;
    }

    function getUserLevel()
    {
        return $this->user_level;
    }

    function getUserID()
    {
        return $this->user_id;
    }

    function getFirstName() {
        return $this->first_name;
    }

    function getLastName(){
        return $this->last_name;
    }

    function getEmailAddress() {
        return $this->email_address;
    }
}