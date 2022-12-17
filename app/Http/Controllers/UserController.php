<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all()->sortBy('energy_consumption');
        return view('users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function doRegistration(RegisterUserRequest $request){
        $request->validated();
        $user = new User;

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->avatar = $request->firstname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->daily_hours_electricity_use = 0;

        $result = $user->save();
        if ($result) {
            $user_id = User::where('email', $request->email)->first();
            $user_id = $user_id->id;
            session(['user_id' => $user_id]);
            return redirect('/profile')->with('message', 'Successfully registered and logged in! Now enjoy our website');
        } else
            echo "problem inserting";
    }

    public function showProfile(){
        $id = session('user_id');
        $user = User::where('id', $id)->first();
        return view('/profile', ['user' => $user]);
    }

    public function editProfile(){
        $id = session('user_id');
        $user = User::where('id', $id)->first();
        return view('/edit-profile', ['user' => $user]);
    }

    public function updateProfile(UpdateProfileRequest $request){
        $request->validated();
        $id = session('user_id');
        $user = User::find($id);
        //dd($user);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        if ($request->newPassword != "") {
            if ($request->newPassword == $request->confirmNewPassword) {
                $user->password = $request->newPassword;
            } else {
                return redirect('/profile')->with('error', 'password confirmation does not match new password');
            }
        }
        if ($user->save()) {
            return redirect('/profile')->with('message', 'Successfully updated profile');
        } else
            return redirect('/profile')->with('error', 'problem updating profile');
        ;
    }

    public function DoLogin(LoginRequest $request){
        $request->validated();
        $hashedPassword = DB::select("SELECT password FROM users WHERE email='$request->email'");
        $hashedPassword = $hashedPassword[0]->password;
        if (Hash::check($request->password, $hashedPassword)) {
            $user_id = User::where('email', $request->email)->first();
            $user_id = $user_id->id;
            //dd($user_id);
            session(['user_id' => $user_id]);
            return redirect('/profile')->with('message', "Successfully logged in!");
        } else {
            return redirect('/login')->with('message', "wrong password");
        }
    }

    public function logOut(Request $request){
        $request->session()->flush();
        return redirect('/')->with('message', 'Successfully logged out');
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
    public function showLogin()
    {
        return view('login');
    }

    public function showAdminLogin(){
        return view('admin-login');
    }

    public function AdminLogin(LoginRequest $request){
        $request->validated();
        $hashedPassword = DB::select("SELECT password FROM users WHERE email='$request->email'");
        $hashedPassword = $hashedPassword[0]->password;
        $user_id = DB::select("SELECT id FROM users WHERE email='$request->email'");
        session(['user_id' => $user_id]);
        return redirect('/')->with('message', 'Successfully logged in as Admin!');
        /*/
        if (Hash::check($request->password, $hashedPassword)) {
        } else {
            return redirect('/admin-login')->with('message', "wrong password");
        }
        /*/
    }


    public function addPersonalTool(){
        return view('update-personal-tools');
    }

    public function insertPersonalTool(Request $request)
    {
        $tool = new PersonalTool;

        $tool->name = $request->name;
        $tool->watt = $request->watt;
        $tool->picture = $request->picture;
        $tool->price = $request->price;
        $tool->seller = $request->seller;
        $tool->rating = $request->rating;
        $tool->serialnumber = $request->serialnumber;

        $result = $tool->save();
        if ($result)
            return redirect('/')->with('message', 'Successfully insert in the DB !');
        else
            echo "problem inserting";
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