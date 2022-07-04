<?php

namespace App\Http\Controllers;

use App\Models\ManagedUser;
use Illuminate\Http\Request;

class ManagedUserController extends Controller
{
    /**
     * Get all users and return with the index view
     *
     * @return Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('index', [
            'users' => ManagedUser::all(),
        ]);
    }
}
