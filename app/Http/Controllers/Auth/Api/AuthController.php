<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use PhpParser\Node\Expr\Cast\String_;

class AuthController extends Controller
{

    public function Login(Request $request)
    {
        $credentials = $request->all();
        $query = User::select('*')->where('email', $credentials['email'])->first();
        if (!is_null($query)) {
            if ($query->question_1 == $request['q1'] && $query->question_2 == $request['q2'] && $query->question_3 == $request['q3'] && $query->question_4 == $request['q4']) {
                $date = date("YmdHms");
                $tokenString = (String)$query->email . (String)$date;
                $token = sha1($tokenString);

                $query->dinamic_token = $token;
                $query->save();
            } else {
                return view('errors.401');
            }
        } else {
            return view('errors.505');
        }

        return view("auth.tokenView", ['token' => $token]);
    }

    public function Registration(Request $request)
    {
        /* $request->validate([
            'names' => 'required',
            'lastnames' => 'required',
            'document' => 'required',
            'email_address' => 'required|email|unique:users',
        ]); */

        $data = $request->all();

        $userObj = [
            'name' => $data['names'],
            'lastname' => $data['lastnames'],
            'email' => $data['email_address'],
            'document' => $data['document'],
            'question_1' => $data['q1'],
            'question_2' => $data['q2'],
            'question_3' => $data['q3'],
            'question_4' => $data['q4']
        ];
        User::create($userObj);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function validateToken(Request $params)
    {
        $params = $params->all();
        $query = User::query()->select('*')->where('email', $params['email'])->first();
        if (!is_null($query)) {
            if ($query->dinamic_token == (String)$params['token']) {
                $user = [
                    'names' => $query->name,
                    'lastnames' => $query->lastname,
                    'document' => $query->document,
                    'email' => $query->email,
                ];
                return view('auth.success', $user);
            }
        }
    }
}
