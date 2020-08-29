<?php


class Marks_model extends CI_Model
{
    
    //Insert marks for database
    public function insertMarks($data)
    {
        return $this->db->insert('marks', $data);
    }

    // get the marks of the student
    public function getMark($studentclassid, $term){
        $restult = $this->db
                ->query("SELECT Subject_code, value FROM marks m WHERE Student_Class_id=$studentclassid AND term=$term")
                ->result_array();

        return $restult;
    }

    public function updateMarks($value, $stu_class_id, $subject_code, $term) {
        $gradePoint = 'A';

        if ($value < 35) {
            $gradePoint = 'F';
        } else if ($value < 50) {
            $gradePoint = 'S';
        } else if ($value < 65) {
            $gradePoint = 'C';
        } else if ($value < 75) {
            $gradePoint = 'B';
        }
        $restult = $this->db
            ->query("UPDATE `marks` SET value=$value, grade='$gradePoint' 
            WHERE marks.Student_Class_id=$stu_class_id AND marks.Subject_code=$subject_code AND marks.term=$term");


        return $restult;
    }
}