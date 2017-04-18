<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function show(Request $request)
    {
        $users = DB::table('users')->get();
        return view('admin.users.index', compact('users'));
        //return $album;
    }
}
