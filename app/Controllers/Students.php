<?php

namespace App\Controllers;

class Students extends BaseController
{

    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Load the model
        $studentModel = new \App\Models\StudentModel();

        // Get real student data from DB
        $data['students'] = $studentModel->findAll();

        return view('students/index', $data);
    }
    public function create()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('students/create');
    }

    public function store()
    {
        $request = service('request');

        $student_id = $request->getPost('student_id');

        // Ivavalidate kung nageexist na yung student ID
        $studentModel = new \App\Models\StudentModel();
        if ($studentModel->where('student_id', $student_id)->first()) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Student is already existing in the student list.'
            ]);
        }

        $studentModel->insert([
            'name' => $request->getPost('name'),
            'student_id' => $student_id,
            'elective2' => $request->getPost('elective2'),
            'software_engineering2' => $request->getPost('software_engineering2'),
            'network_communication' => $request->getPost('network_communication'),
            'methods_research' => $request->getPost('methods_research'),
            'project_management' => $request->getPost('project_management'),
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Student detail entered successfully.'
        ]);
    }
    public function edit($id)
    {
        $model = new \App\Models\StudentModel();
        $data['student'] = $model->find($id);

        if (!$data['student']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Student not found");
        }

        return view('students/edit', $data);
    }
    public function update($id)
    {
        $model = new \App\Models\StudentModel();
    
        // Check kung nageexist na yung student ID
        $newStudentId = $this->request->getPost('student_id');
        $existing = $model->where('student_id', $newStudentId)
                          ->where('id !=', $id)
                          ->first();
    
        if ($existing) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Student ID already exists for another student.'
            ]);
        }
    
        $updated = $model->update($id, [
            'name' => $this->request->getPost('name'),
            'student_id' => $newStudentId,
            'elective2' => $this->request->getPost('elective2'),
            'software_engineering2' => $this->request->getPost('software_engineering2'),
            'network_communication' => $this->request->getPost('network_communication'),
            'methods_research' => $this->request->getPost('methods_research'),
            'project_management' => $this->request->getPost('project_management'),
        ]);
    
        if ($updated) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Student updated successfully.'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Update failed. Please try again.'
            ]);
        }
    }
    
    public function delete($id)
    {
        if ($this->request->isAJAX()) {
            $studentModel = new \App\Models\StudentModel();
            $deleted = $studentModel->delete($id);

            return $this->response->setJSON([
                'success' => $deleted,
                'message' => $deleted ? 'Deleted successfully' : 'Delete failed'
            ]);
        } else {
            // fallback for non-AJAX
            return redirect()->to('/students')->with('message', 'Invalid request');
        }
    }
}
