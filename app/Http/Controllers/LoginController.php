<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 31/05/2017
 * Time: 08:46
 */

namespace App\Http\Controllers;


use App\Login;
use App\Users;

class LoginController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('login', compact('users'));
    }
}