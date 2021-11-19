<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\CreditApplication;
use Illuminate\Http\Request;

class CreditsController extends Controller
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
    public function store(Request $request, $application)
    {
        $application = CreditApplication::findOrFail($application);

        $credit = null;

        if ($application) {
            $credit = new Credit();
            $credit->credit_size = $application->credit_size;
            $credit->credit_time_period = $application->credit_time_period;
            $credit->payment_month = $application->credit_size / $application->credit_time_period;
            $credit->interest = 5;
            $credit->application_id = $application->id;
            $credit->user_id = $application->user_id;

            $credit->save();

            $application->approved = 0;

            $application->save();
        }

        return $credit;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function show(Credit $credit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function edit(Credit $credit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credit $credit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credit  $credit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credit $credit)
    {
        //
    }
}
