<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employee as RequestsEmployee;
use App\Models\Company;
use App\Models\Employee;
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
        dump($employee->all());
        dd('You hit the Store Method');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        dump('This is the Employee Edit');
        dd($employee);
    }

    public function update(Request $request, Employee $employee)
    {
        //
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back();
    }
}
