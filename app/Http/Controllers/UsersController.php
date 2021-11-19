<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\CreditApplication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
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
     * Show the form for login.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        session(['link' => url()->previous()]);

        return view('users.login');
    }

    /**
     * Authenticate user.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $authenticate = Auth::attempt(['username' => $request->username, 'password' => $request->password]);

        if ($authenticate) {
            return redirect(session('link'));
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    /**
     * Log out user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'earnings' => 'required',
            'address' => 'required',
            'pin' => 'required'
        ]);

        $user = User::create($validated);

        auth()->login($user);

        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $creditApplications = CreditApplication::all()->where('user_id', $user->id);

        $credits = Credit::all()->where('user_id', $user->id);

        return view('users.show', ['user' => $user, 'creditApplications' => $creditApplications, 'credits' => $credits]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'earnings' => 'required',
            'address' => 'required',
            'pin' => 'required'
        ]);

        if ($validated) {
            $user->fill($validated);

            $user->save();

            $creditApplications = CreditApplication::all()->where('user_id', $user->id);

            $credits = Credit::all()->where('user_id', $user->id);

            return view('users.show', ['user' => $user, 'creditApplications' => $creditApplications, 'credits' => $credits]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
