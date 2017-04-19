<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function create()
    {
        $rolers = ['' => 'selecione um...', 'common' => 'common', 'admin' => 'admin',  'moderator' => 'moderator'];
        return view('auth.register', compact('rolers'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return redirect()->route('admin.upload');
    }

    public function show(Request $request)
    {
        $users = DB::table('users')->get();
        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.upload');
    }
}
