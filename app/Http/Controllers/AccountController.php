<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AccountController extends Controller
{
    public function viewAccount($id){//users can view their account
        protected $accountView = User::find($id);
        return view('viewAccount', ['accountView'=>$accountView]);
    }
}