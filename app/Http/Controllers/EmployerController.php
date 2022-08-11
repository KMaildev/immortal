<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployer;
use App\Models\Model\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employer.index');
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
    public function store(StoreEmployer $request)
    {
        $employer = new Employer();
        $employer->company_name = $request->company_name;
        $employer->type_of_company = $request->company_type;
        $employer->location = $request->location;
        $employer->website = $request->website;
        $employer->phone = $request->phone;
        $employer->email = $request->email;
        $employer->job_category = $request->job_category;
        $employer->age_limit = $request->age_limit;
        $employer->educational_requirement = $request->educational_requirement;
        $employer->working_experience_requirement = $request->working_experience_requirement;
        $employer->other_additional_requirement = $request->other_additional_requirement;
        $employer->estimate_salary_offer = $request->estimate_salary_offer;
        $employer->other_allowance = $request->other_allowance;
        $employer->gender = $request->gender;
        $employer->interview_type = $request->interview_type;
        $employer->apply_date = date('Y-m-d');
        $employer->save();
        return redirect()->back()->with('success', 'Thank you for your contact. our team is ready to response all your queries..');
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
