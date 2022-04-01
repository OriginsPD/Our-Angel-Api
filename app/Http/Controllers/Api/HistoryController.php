<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\VoucherHistory;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VoucherHistory::with('studentReg')->get();
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
     * @param  \App\Models\VoucherHistory  $voucherHistory
     * @return \Illuminate\Http\Response
     */
    public function show(VoucherHistory $voucherHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VoucherHistory  $voucherHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoucherHistory $voucherHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VoucherHistory  $voucherHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoucherHistory $voucherHistory)
    {
        //
    }
}
