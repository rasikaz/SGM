<?php


class  Student_Class_model extends CI_Model
{
    // Insert data to Student_Class table
    public function registerStudentsToClass($data)
    {
        return $this->db->insert('student_class', $data);
    }
    

    //Get the student_classID for student
    public function getStudentClassID($classId, $index)
    {
        $restult = $this->db
            ->query("SELECT id FROM student_class  WHERE Class_id = '$classId' and Student_index = '$index'")
            ->row_array();

        return $restult['id'];
    }
}