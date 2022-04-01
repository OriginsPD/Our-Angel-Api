<?php

namespace App\Http\Controllers\Api;

use App\Models\Voucher;
use Illuminate\Http\Request;
use App\Models\IssuedVoucher;
use App\Models\RegisteredStudent;
use App\Http\Controllers\Controller;

class IssuedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return IssuedVoucher::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $query = Voucher::where('name', $request->input('name'))->first();

        $newQuery = $query->quantity - $request->input('quantity');

        if ($newQuery === 0) {
            return response()->json([
                'status' => 500,
                'message' => 'Quantity is Zero Purchase Failed'
            ]);
        } else {

            IssuedVoucher::create([
                'student_reg_id' => $request->input('id'),
                'name' => $request->input('name'),
                'quantity' => $request->input('quantity'),
                'price' => $query->price,
            ]);

            Voucher::where('name', $request->input('name'))
                ->update([
                    'quantity' => $newQuery
                ]);

            return response()->json([
                'status' => 200,
                'message' => 'Voucher Purchased'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IssuedVoucher  $issuedVoucher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return RegisteredStudent::has('issuedVouchers')
            ->with('issuedVouchers', 'guardian', 'studentDir')
            ->where('guardian_id', $id)
            ->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IssuedVoucher  $issuedVoucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IssuedVoucher $issuedVoucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IssuedVoucher  $issuedVoucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(IssuedVoucher $issuedVoucher)
    {
        //
    }
}
