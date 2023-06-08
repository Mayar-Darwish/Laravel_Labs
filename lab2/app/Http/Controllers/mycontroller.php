<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class mycontroller extends Controller
{
  
// public function index()
// {
//     // $users= User::paginate(5);
//     $users=User::all();
//     // $users=user->get->paginate(5);
//     // $users=DB::table('users')->simplePaginate(5);
//     // dd($user);     ##stop excution
//     return view('user',['users'=>$users]);
//     // return view('user',compact('users'));
// }

public function index()
{

    $users=User::paginate(5);
    return view('user',['users'=>$users]);
}}