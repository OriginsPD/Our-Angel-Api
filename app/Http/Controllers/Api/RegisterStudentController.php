<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\RegisteredStudent;
use App\Http\Controllers\Controller;

class RegisterStudentController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisteredStudent  $registeredStudent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RegisteredStudent::with(['studentDir'])->where('guardian_id', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisteredStudent  $registeredStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisteredStudent $registeredStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisteredStudent  $registeredStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisteredStudent $registeredStudent)
    {
        //
    }
}
