<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::paginate(5);

        $user = auth()->user();
        
        return view('dashboard.users.users', compact(
            'users',
            'user',
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = auth()->user();

        return view('dashboard.users.users_card', compact(
            'user',
        ));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $input = $request->all();

        $user = Auth::user();   
        
        if ($file = $request->file('picture')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('storage/images', $name);

            $input['picture'] = $name; 

        }

        $user->whereId($id)->first()->update($input);

        session()->flash('success-profile', 'You successfully updated your profile!');


        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = User::findOrFail($id);

        // unlink(public_path() . $user->picture);

        $user->delete();

        return back();

    }


    public function settings() {

        $user = auth()->user();

        return view('dashboard.users.users_settings', compact(
            'user',
        ));

    }
    
          

    
}
