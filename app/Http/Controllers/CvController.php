<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCv;
use App\Models\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cv.index');
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
    public function store(StoreCv $request)
    {
        if ($request->hasFile('attachment_file')) {
            $attachment_file = $request->file('attachment_file');
            $path = $attachment_file->store('public/cv');
            $original_name = $attachment_file->getClientOriginalName();
        }

        $cv = new Cv();
        $cv->name = $request->name;
        $cv->phone = $request->phone;
        $cv->additional_note = $request->additional_note;
        $cv->attachment_file = $request->attachment_file;

        $file_name = explode("/", $path);
        $file_name = $file_name[2];
        $cv->attachment_file = $original_name ?? '';

        $cv->path = 'http://localhost/projects/immortalfriends/storage/cv/' . $file_name ?? '';
        // $cv->path = 'http://royalgatecompany.com/storage/cv/' . $file_name ?? '';

        $cv->save();
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
