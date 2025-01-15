<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartmentModel;
use App\Models\EmployeeModel;
use CodeIgniter\HTTP\RedirectResponse;

class Employees extends BaseController
{
    protected $helpers = ['form'];

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return string
     */
    public function index()
    {
        $model = new EmployeeModel();
        $employees = $model->findAll();

        return view('employees/index', ['employees' => $employees]);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return string
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return string
     */
    public function new()
    {
        $model = new DepartmentModel();
        $departments = $model->findAll();

        return view('employees/new', ['departments' => $departments]);
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return string
     */
    public function create(): RedirectResponse
    {
        $rules = [
            'code' => 'required|string|min_length[5]|max_length[5]|is_unique[employees.code]',
            'name' => 'required',
            'birthdate' => 'required',
            'phone' => 'required',
            'email' => 'valid_email',
            'department' => 'required|is_not_unique[departments.id]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $employee = $this->request->getPost([
            'code',
            'name',
            'birthdate',
            'phone',
            'email',
            'department'
        ]);

        $model = new EmployeeModel();
        $model->insert(
            [
                'code' => trim($employee['code']),
                'name' => trim($employee['name']),
                'birthdate' => $employee['birthdate'],
                'phone' => $employee['phone'],
                'email' => $employee['email'],
                'department_id' => $employee['department'],
            ]
        );

        return redirect()->to("employees");
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return string
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return string
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return string
     */
    public function delete($id = null)
    {
        //
    }
}
