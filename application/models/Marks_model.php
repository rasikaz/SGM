<?php


class Marks_model extends CI_Model
{
    
    //Insert marks for database
    public function insertMarks($data)
    {
        return $this->db->insert('marks', $data);
    }
}