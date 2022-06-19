<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class DeleteUserController extends Controller
{
	public function contactlist(Request $request)
	{
		$users = User::orderby('id', 'desc')->get();
		return view('delete_multiple_user')->with('users', $users);
	}

	public function multipleusersdelete(Request $request)
	{

		$id = $request->id;
		foreach ($id as $user) 
		{
			User::where('id', $user)->delete();
			
		}

		session()->flash('success-user-deleted', 'User deletion was successful!!');

		return back();

	}
}