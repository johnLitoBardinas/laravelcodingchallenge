<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee as RequestsEmployee;
use App\Models\Company;
use App\Models\Employee;
use App\Rules\IsCompanyExist;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $companies = Company::all();

        $company = $request->get('company') ? Company::where('name', $request->get('company'))->with('employees')->first() : null;

        return view('employees.index')->with(compact('companies', 'company'));
    }

    public function store(RequestsEmployee $employee)
    {
        $employee = new Employee($employee->all());
        $employee->employee_id = generate_employee_id();
        $employee->saveOrFail();

        session()->flash('success', 'Employee Added');

        return back();
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();

        return view('employees.edit', compact('companies', 'employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'company_id' => [
                'required',
                new IsCompanyExist(),
                'bail',
            ],
            'first_name' => 'required|string|max:119',
            'last_name' => 'required|string|max:119',
            'age' => 'required|integer|min:1|max:127',
            'contact_number' => 'required|string|max:11',
            'address' => 'required|string'
        ]);

        $isUpdated = $employee->update($request->all());

        if ($isUpdated) {
            session()->flash('success', 'Employee Updated');
        } else {
            session()->flash('error', 'Unable to Update Employee');
        }

        return back();
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back();
    }
}
