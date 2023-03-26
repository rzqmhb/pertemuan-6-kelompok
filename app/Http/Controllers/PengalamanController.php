<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengalamanController extends Controller
{
    public function pengalaman()
    {
        $user = Auth::user();
        return view('pengalaman',['user'=>$user]);
    }
}
