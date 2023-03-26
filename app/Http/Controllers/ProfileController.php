<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show ($slug){
        $user = Auth::user();
        if ($slug == 'roziq-mahbubi') {
            return view('roziq', ['profile' => Profile::getBySlug($slug), 'user' => $user]);
        } else if ($slug == 'devi-andini-febrianti') {
            return view('devi', ['profile' => Profile::getBySlug($slug), 'user' => $user]);
        }
    }
}
