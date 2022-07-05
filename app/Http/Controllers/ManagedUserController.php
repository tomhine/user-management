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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact_number' => ['required', 'string', 'size:11']
        ]);

        $user = ManagedUser::create([
            'name' => $request->name,
            'job_title' => $request->job_title,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
        ]);

        $user->save();

        return redirect(route('user.index'));
    }

    /**
     * Return the form view to update the given user
     *
     * @param ManagedUser $user
     * @return void
     */
    public function edit(ManagedUser $user)
    {
        return view('user.update', [
            'user' => $user,
        ]);
    }

    /**
     * Validate the given data & update the given user
     *
     * @param Request $request
     * @param ManagedUser $user
     * @return void
     */
    public function update(Request $request, ManagedUser $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'job_title' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'contact_number' => ['required', 'string', 'size:11']
        ]);

        $user->update([
            'name' => $request->name,
            'job_title' => $request->job_title,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
        ]);

        return redirect(route("user.index"));
    }

    public function destroy(ManagedUser $user)
    {
        $user->destroy($user->id);

        return redirect(route("user.index"));
    }
}
