<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        $users = User::all();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
/*        
        $request->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone_number' => ['required', 'numeric'],
            'user_id' => ['required', 'regex:/[0-9]{7}/', Rule::unique('users')],
            'position' => 'required', [Rule::exists('position', 'id')],
            'department' => 'required', [Rule::exists('department', 'id')],
            'sclassification' => 'required', [Rule::exists('classification', 'id')],
        ]);
*/
        $user = new User;

        $user->name = $request->name;

        $user->email = $request->email;

        $date_of_birth = $request->date_of_birth;

        $user->password = Hash::make($request->password);

        $user->id_card_number = $request->id_card_number;
/*
        $user->position_id = $request->position;

        $user->department_id = $request->department;

        $user->classification_id = $request->classification;
*/
        $user->save();

        return redirect(route('users.index'))->with('success', 'Felhasználó sikeresen létrehozva!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
/*        
        $request->validate([
            'name' => ['required', 'min:3', 'max:100'],
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => ['required', 'confirmed', 'min:8'],
            'phone_number' => ['required', 'numeric'],
            'id' => ['required', 'regex:/[0-9]{7}/', Rule::unique('users')],
        ]);
*/
        $user = new User;

        $user->name = $request->name;

        $user->email = $request->email;

        $user->password = Hash::make($request->password);

        $user->phone_number = $request->phone_number;

        $user->id_card_number = $request->id_card_number;

        $user->position_id = $request->position;

        $user->department_id = $request->department;

        $user->classification_id = $request->classification;

        $user->save();

        return redirect(route('users.index'))->with('success', 'Felhasználó sikeresen módosítva!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
