<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function redirectToAddress()
    {
        $user = User::find(Auth::user()->id);
        return view('site.address.address', compact('user'));
    }

    public function redirectToEducation()
    {
        $user = User::find(Auth::user()->id);
        return view('site.education.education', compact('user'));
    }
}
