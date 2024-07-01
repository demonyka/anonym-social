<?php

namespace App\Http\Controllers\Auth;

class AuthController
{
    public function view()
    {
        return inertia('Auth/Auth');
    }
}
