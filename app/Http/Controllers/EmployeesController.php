<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employee::latest()->orderBy('created_at', 'DESC')->get();
        return response()->json($employees);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
        'name' => 'required',
        'position' => 'required',
        'salary' => 'required',
        'employmentType' => 'required',
        'status' => 'required',
        //'photo' => ''

        ]);

        //  $photo = $request->photo;
        //  $photo_new_name = time().$photo->getClientOriginalName();
        //  $photo->move('images/photos', $photo_new_name);

        $employee = Employee::create([
        'name'=> $request->name,
        'position' => $request->position,
        'salary' => $request->salary,
        'employmentType' => $request->employmentType,
        'status' => $request->status,
        //'photo' => 'uploads/posts/' .$photo_new_name,

        ]);

        return response()->json(['message' => 'Employee successfully added'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $employee = Employee::find($id);

        // if($request->hasFile('photo')){
        //      $photo = $request->photo;
        //      $photo_new_name = time().$photo->getClientOriginalName();
        //      $photo->move('images/photos', $photo_new_name);
        //      $employee->photo = 'images/photos/' .$photo_new_name;
        // }

        $employee->name = $request->get('name');
        $employee->position = $request->get('position');
        $employee->salary = $request->get('salary');
        $employee->employmentType = $request->get('employmentType');
        $employee->status = $request->get('status');

        $employee->save();
        return response()->json('This Employee is successully updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return response()->json(['message'=> 'Employee Successfully Removed'], 200);
    }
}