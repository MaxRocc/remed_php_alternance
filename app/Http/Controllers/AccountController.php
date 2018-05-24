<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function viewAccount(){
        $accountView = Auth::user();
        return view('viewAccount', ['accountView'=>$accountView]);
    }
}

