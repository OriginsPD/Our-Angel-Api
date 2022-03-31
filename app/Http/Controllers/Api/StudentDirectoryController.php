<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\StudentDirectory;
use App\Http\Controllers\Controller;

class StudentDirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $query = StudentDirectory::all();

        return $query;
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
     * @param  \App\Models\StudentDirectory  $studentDirectory
     * @return \Illuminate\Http\Response
     */
    public function show(StudentDirectory $studentDirectory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentDirectory  $studentDirectory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentDirectory $studentDirectory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentDirectory  $studentDirectory
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentDirectory $studentDirectory)
    {
        //
    }
}
