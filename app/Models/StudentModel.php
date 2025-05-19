<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'student_id', 'elective2', 'software_engineering2', 'network_communication', 'methods_research', 'project_management'
    ];

    public function getStudents()
    {
        return $this->findAll();
    }
}
