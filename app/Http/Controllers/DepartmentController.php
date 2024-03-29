<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentFormRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();

        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentFormRequest $request)
    {
        Department::create([
            'name' => $request->name,
            'code' => $request->code,
            'contact_number' => $request->contact_number,
            'description' => $request->description
        ]);

        return redirect('/departments')->with('message', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentFormRequest $request, Department $department)
    {
        $department = tap($department)->update([
            'name' => $request->name,
            'code' => $request->code,
            'contact_number' => $request->contact_number,
            'description' => $request->description
        ]);

        return redirect('/departments')->with('message', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        redirect('/departments')->with('message', 'Successfully Deleted');
    }
}
