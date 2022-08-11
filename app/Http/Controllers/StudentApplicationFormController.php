<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentApplicationForm;
use App\Models\Models\StudentApplicationForm;
use Illuminate\Http\Request;

class StudentApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentApplicationForm $request)
    {
        $form = new StudentApplicationForm();
        $form->name = $request->name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->education = $request->education;
        $form->date_of_birth = $request->date_of_birth;
        $form->father = $request->father;
        $form->gender = $request->gender;
        $form->nationality = $request->nationality;
        $form->permanent_address = $request->permanent_address;
        $form->apply_date = date('Y-m-d');
        $form->save();
        return redirect()->back()->with('success', 'Process is completed.');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
