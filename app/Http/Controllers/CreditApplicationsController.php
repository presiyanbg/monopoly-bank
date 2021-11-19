<?php

namespace App\Http\Controllers;

use App\Models\CreditApplication;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Symfony\Component\Console\Input\Input;

class CreditApplicationsController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreditApplication  $creditApplication
     * @return \Illuminate\Http\Response
     */
    public function show(CreditApplication $creditApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreditApplication  $creditApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(CreditApplication $creditApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreditApplication  $creditApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreditApplication $creditApplication)
    {
        //
    }

    /**
     * Show the form for credit apply.     *
     */
    public function creditApply()
    {
        return view('users.credit-apply.credit-apply');
    }

    /**
     * Show the form for credit apply.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function creditApplyStore(Request $request)
    {
        $user = auth()->user();

        $validate = $this->validate(request(), [
            'credit_size' => 'required',
            'credit_time_period' => 'required',
        ]);

        if ($validate) {
            $creditApplication = new CreditApplication();
            $creditApplication->credit_size = $request->credit_size;
            $creditApplication->credit_time_period = $request->credit_time_period;
            $creditApplication->approved = false;
            $creditApplication->user_id = $user->id;

            $creditApplication->save();

            return redirect()->to('/users/'.$user->id);
        }

        return redirect('/apply')->withSuccess('Login details are not valid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreditApplication  $creditApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreditApplication $creditApplication)
    {
        //
    }
}
