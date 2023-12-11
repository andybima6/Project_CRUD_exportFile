<?php

namespace App\Http\Controllers;
use App\Models\yes;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(yes $yes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(yes $yes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, yes $yes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(yes $yes)
    {
        //
    }
    public function login(){
        return view('login');
    }
    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('login');
    }

    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request -> password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
