<?php
/**
 * Created by PhpStorm.
 * User: Rasika
 * Date: 3/8/2017
 * Time: 7:00 PM
 */

class User_Update_model extends CI_Model
{

    function __construct()
    {
        parent :: __construct();


    }

    //check where there is entry for specific username and password for teacher
    public function changePassword($username, $password, $index)
    {
        $restult = $this->db
            ->query("UPDATE `student_user` SET username='$username', password='$password' WHERE student_user.Student_index = $index");


        return $restult;
    }


    public function changeUserData($fName, $lName, $address, $telephone, $index)
    {
        $restult = $this->db
            ->query("UPDATE `student` SET fName='$fName', lName='$lName', address='$address', tel='$telephone' WHERE student.index = $index");


        return $restult;
    }
}