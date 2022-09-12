<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        return view('users.index', compact('user'));
    }

    /**
     * @param \App\Http\Requests\UserStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $user = User::create($request->validated());

        return redirect()->route('users.index');
    }

    /**
     * @param \App\Http\Requests\UserUpdateRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $utilisateur)
    {

        $this->updatePassword($request, $utilisateur);

        $utilisateur->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        return redirect()->route('utilisateurs.index');
    }

    public function updatePassword($request, $user)
    {
        if ($request->password) {
            if ($request->password_confirmation) {
                if ($request->password === $request->password_confirmation) {
                    $user->update([
                        'password' => Hash::make($request->password),
                    ]);
                }
            }
        }
    }
}
