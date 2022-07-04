<?php

namespace App\Http\Controllers;

use App\Models\ManagedUser;
use Illuminate\Http\Request;

class ManagedUserController extends Controller
{
    /**
     * Get all users and return with the index view
     *
     * @return View
     */
    public function index()
    {
        return view('index', [
            'users' => ManagedUser::all(),
        ]);
    }

    /**
     * Return the new user creation page
     *
     * @return View
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Validates incoming request to store a new user & stores if validation passes
     *
     * @param Request $request
     * @return redirect
     */
    public function store(Request $request)
    {
        dd($request);
    }
}
