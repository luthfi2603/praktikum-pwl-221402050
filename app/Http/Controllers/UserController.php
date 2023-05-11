<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $users = User::all();

        return view('admin.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'user_role' => 'required',
            'password'  => 'required|min:5'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/admin/user')->with('status', "User Berhasil Ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user){
        return view('admin.edit_user', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user){
        $validatedData = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'user_role' => 'required',
            'password'  => 'required|min:5'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->user_role = $request->user_role;
        $user->password  = $validatedData['password'];

        $user->save();

        return redirect('/admin/user')->with('update_status', "User Berhasil Diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user){
        $user->delete();
        return redirect('/admin/user')->with('delete_status', "User Berhasil Dihapus!");
    }
}