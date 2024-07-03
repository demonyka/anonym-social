<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Inertia\Response;
use Inertia\ResponseFactory;

class AuthController extends Controller
{
    /**
     * @return Response|ResponseFactory
     */
    public function view()
    {
        return inertia('Auth/Auth');
    }
}
