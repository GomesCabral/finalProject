<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tool;
use App\Models\QuestionForm;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\QuestionFormRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showAdminLogin()
    {
        return view('admin-login');
    }

    public function AdminLogin(LoginRequest $request)
    {
        $request->validated();
        $hashedPassword = DB::select("SELECT password FROM users WHERE email='$request->email'");
        $hashedPassword = $hashedPassword[0]->password;

        if (Hash::check($request->password, $hashedPassword)) {
            $user_id = User::where('email', $request->email)->first();
            $user_id = $user_id->id;
            session(['user_id' => $user_id]);
            session(['isAdmin' => 1]);
            return redirect('/admin-profile')->with('message', "Successfully logged in!");
        } else {
            return redirect('/login')->with('message', "wrong password");
        }
    }

    public function DoLogin(LoginRequest $request)
    {
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

    public function showAdminProfile()
    {
        $id = session('user_id');
        $user = User::where('id', $id)->first();
        $users = User::all()->sortBy('energy_consumption');
        $tools = Tool::all()->sortBy('watt');

        return view('/admin-profile', ['user' => $user, 'users' => $users, 'tools' => $tools]);
    }
    public function editAdminProfile()
    {
        $id = session('user_id');
        //dd($id);
        $user = User::where('id', $id)->first();
        //dd($user);
        return view('/edit-admin-profile', ['user' => $user]);
    }

    public function updateAdminProfile(UpdateProfileRequest $request)
    {
        $request->validated();
        $hashedPassword = DB::select("SELECT password FROM users WHERE email='$request->email'");
        $hashedPassword = $hashedPassword[0]->password;
        $id = session('user_id');
        $user = User::find($id);
        //dd($user);
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        if ($request->newPassword != "") {
            if (Hash::check($request->password, $hashedPassword)) {
                if ($request->newPassword == $request->confirmNewPassword) {
                    $user->password = $request->newPassword;
                    if ($user->save()) {
                        return redirect('/admin-profile')->with('message', 'Successfully updated profile');
                    } else
                        return redirect('/admin-profile')->with('error', 'problem updating profile');
                } else {
                    return redirect('/profile')->with('error', 'password confirmation does not match new password');
                }
            } else {
                return redirect('/profile')->with('error', 'old password was wrong');
            }
        }
    }
    public function index()
    {
        $users = User::all()->sortBy('energy_consumption');
        return view('users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function doRegistration(RegisterUserRequest $request)
    {
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
            return redirect('/questions-form')->with('message', 'Successfully registered and logged in! Now fill out this form to know how much money your consumption costs');
        } else
            echo "problem inserting";
    }

    public function showQuestionFormData(){
        return view('questions-form');
    }

    public function insertQuestionFormData(QuestionFormRequest $request)
    {
        $request->validated();
        $form = new QuestionForm;

        if ($request->gas == null)
            $request->gas = "off";
        if ($request->electric == null)
            $request->electric = "off";
        if ($request->central_heating == null)
            $request->central_heating = "off";
        if ($request->electronics == null)
            $request->electronics = "off";
        if ($request->solar == null)
            $request->solar = "off";
        if ($request->additional == null)
            $request->additional = "";
        $form->energy_bill = $request->energy_bill;
        $form->gas = $request->gas;
        $form->electric = $request->electric;
        $form->central_heating = $request->central_heating;
        $form->members = $request->members;
        $form->windows = $request->windows;
        $form->electronics = $request->electronics;
        $form->solar = $request->solar;
        $form->additional = $request->additional;

        $form->user_id = session('user_id');

        $result = $form->save();
        if ($result) {
            return redirect('/profile')->with('message', 'Successfully filled form. You are registered and logged in.');
        } else
            return redirect('/question-form')->with('error', 'Problem inserting the form');
    }

    public function showCalculator(){
        return view('calculator');
    }

    public function showProfile()
    {
        $id = session('user_id');
        $user = User::where('id', $id)->first();
        return view('/profile', ['user' => $user]);
    }
    public function editProfile()
    {
        $id = session('user_id');
        $user = User::where('id', $id)->first();
        return view('/edit-profile', ['user' => $user]);
    }
    public function deleteUser($id)
    {
        //only the Admin has access to this
        if (session('isAdmin')) {
            $editUser = User::where('id', $id)->first();
            if ($editUser) {
                return redirect('admin-profile')->with('message', 'User deleted');
            } else {
                return redirect('admin-profile')->with('message', 'Problem deleting User');
            }
        } else {
            return redirect('profile')->with('error', 'You are not an Admin');
        }
    }

    public function updateUser(UpdateProfileRequest $request)
    {
        $request->validated();
        $id = session('editing_user_id');
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
            return redirect('/admin-profile')->with('message', 'Successfully updated profile');
        } else
            return redirect('/admin-profile')->with('error', 'problem updating profile');
        ;
    }
    public function updateProfile(UpdateProfileRequest $request)
    {
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

    public function showLogin()
    {
        return view('login');
    }



    public function logOut(Request $request)
    {
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


    public function addPersonalTool()
    {
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