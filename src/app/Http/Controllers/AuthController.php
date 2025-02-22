<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function confirm()
    {
        //
    }

    public function store(Request $request){
        $adminuser = $request->only(['name', 'email', 'password']);
        AdminUser::create($adminuser);
    }
}
