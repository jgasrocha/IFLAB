<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function logout()
    {
        return view('login.form');
    }
}
