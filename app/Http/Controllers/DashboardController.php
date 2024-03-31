<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\AdminForgetPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function login()
    {
        $emailMessage = null;
        $passwordMessage = null;
        return view('dashboard.register-login.login', compact('passwordMessage', 'emailMessage'));
    }

    public function adminLogin(Request $request)
    {

        //validation
        $validated = $request->validate([
            'email'      => 'required',
            'password'   => 'required',
        ]);

        //get user by email
        $input = $request->all();
        $objUser = new User();
        $user = $objUser->getUser($input['email']);

        //check user is exist
        if ($user) {
            //check user password is correct
            if (Hash::check($input['password'], $user['password'])) {
                session(['is_admin' => $user['is_admin']]);
                return redirect(env('APP_URL') . '/listingSliders');
            } else {
                $passwordMessage = "Password not correct try again";
                $emailMessage = null;
                return view('dashboard.register-login.login', compact('passwordMessage', 'emailMessage'));
            }
        } else {
            $emailMessage = "This email not found";
            $passwordMessage = null;
            return view('dashboard.register-login.login', compact('passwordMessage', 'emailMessage'));
        }
    }

    public function adminLogout()
    {
        session()->flush();
        return redirect(env('APP_URL') . '/dashboard');
    }

    public function forgetPassword()
    {
        $emailMessage = null;
        $successMessage = null;
        return view('dashboard.register-login.forget_password', compact('emailMessage', 'successMessage'));
    }

    public function adminForgetPassword(Request $request)
    {
        $validated = $request->validate([
            'email'  => 'required',
        ]);

        //get user by email
        $input = $request->all();
        $objUser = new User();
        $user = $objUser->getUser($input['email']);

        //check user is exist
        if ($user) {

            //send mail to admin to reset his password
            $data = array(
                'id'        =>      $user['id'],
                'name'      =>      $user['name'],
                'email'     =>      $user['email'],
            );
            $emailMessage = null;
            $successMessage = "mail sent successfully check your mail";
            $mailtoAdmin = Mail::to($user['email'])->send(new AdminForgetPassword($data));
            return view('dashboard.register-login.forget_password', compact('emailMessage', 'successMessage'));
        } else {
            $emailMessage = "This email not found";
            $successMessage = null;
            return view('dashboard.register-login.forget_password', compact('emailMessage', 'successMessage'));
        }
    }

    public function resetPassword($id)
    {
        $userId = $id;
        return view('dashboard.register-login.reset_password', compact('userId'));
    }

    public function adminResetPassword(Request $request)
    {
        $validated = $request->validate([
            'password'          => 'required',
            'confirm_password'  => 'required|same:password',
        ]);

        $input = $request->all();
        $objUser = new User();
        $input['password'] = Hash::make($input['password']);
        $user = $objUser->updateUserPassword($input['password'], $input['id']);
        return redirect(env('APP_URL') . '/login');
    }
}
