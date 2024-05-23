<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterUserRequest;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;


class AuthController extends Controller
{
    /**
     * Function to view register page
     * @return View
     */
    public function registerView(): View
    {
        return view('admin.auth.register');
    }

    /**
     * Function to authenticate the user,save the data of the user, and log in
     * @param RegisterUserRequest $request
     * @return RedirectResponse
     */
    public function checkRegister(RegisterUserRequest $request): RedirectResponse
    {
        try {
            $user = User::create($request->validated());

            Auth::attempt($request->only('email', 'password'));

            $user->assignRole(Role::where('name', 'ordinary')->first());

            if ($user) {
                return redirect()->route('user.index')->withSuccess('You have successfully registered');
            } else {
                return back()->withError('Something went wrong !');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong');
        }
    }

    /**
     * Function to view login page
     * @return View
     */
    public function loginView(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Function to authenticate the logged in user
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function userLogin(LoginRequest $request): RedirectResponse
    {
        $validatedUser = $request->validated();

        try {
            if (Auth::attempt($validatedUser)) {
                // Check if the previous URL is from 'forget' or 'login', then redirect to '/user/index'
                $previousUrl = $request->input('previous_url');

                if ($previousUrl && (strpos($previousUrl, '/auth/login') !== false || strpos($previousUrl, 'reset/{token}') !== false)) {
                    return redirect('/user/index');
                }

                // If not from 'forget' or 'login', redirect to the intended URL
                return redirect()->intended($previousUrl ? $previousUrl : '/user/index');
            } else {
                return back()->withError('Either the email or the password is incorrect');
            }
        } catch (Exception $ex) {
            return back()->withError('Something went wrong');
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $previousUrl =URL::previous();
        return redirect()->intended($previousUrl);
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }

    public function forgot_password(Request $requset)
    {


        $user = User::where('email', '=', $requset->email)->first();
        try {
            if (!empty($user)) {
                $user->remember_token = Str::random(40);
                $user->save();


                Mail::to($user->email)->send(new ForgotPasswordMail($user));
                return redirect()->back()->with('success', 'We have e-mailed your password reset link!');
            } else {
                return redirect()->back()->withError('Email not found');
            }
        } catch (Exception $ex) {
            // Log the error or handle it as needed
            return back()->withError($ex->getMessage());
        }




    }

    public function rest($token){

        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('admin.auth.setup-new-password', $data);
        }
        else{
            abort(404);
        }

    }

    public function post_reset($token, Request $request){


        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user)){


        if($request->password == $request->confirm_password){
        $user->password = $request->password;

        if(!empty($user->email_verified_at )){
            $user->email_verified_at = date('Y-m-d H:i:s');
        }

        $user->remember_token = Str::random(40);

        $user->save();

        return redirect('auth/login')->with('success', 'Passwords Successfully rest');
    }
    else{
        return redirect()->back()->with('error', 'Passwords do not match');
    }
}
    else{
       abort(404);
    }

    }
}



