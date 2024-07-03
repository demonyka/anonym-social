<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function view($username)
    {
        $user = User::where('username', $username)->firstOrFail();
        return $user;
    }
}
