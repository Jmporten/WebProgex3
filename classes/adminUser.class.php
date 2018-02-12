<?php
/**
 * Created by PhpStorm.
 * User: Michael Porten
 * Date: 2/5/2018
 * Time: 10:19 AM
 */

class adminUser extends Users
{
    //methods
    function __construct($user_level, $user_id){
        parent::__construct(2);
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