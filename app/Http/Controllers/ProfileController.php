<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests;
use App\Http\Requests\UpdateProfileUserRequest;

class ProfileController extends Controller
{
    public function index()
    {
    	$user = \Auth::user();
        $skills = Skill::orderBy('name')->get();
    	return view('profile',compact('user','skills'));
    }

    public function store(UpdateProfileUserRequest $request)
    {
    	$user = \Auth::user();
    	if(!$user->id == $request->id)
    	{
    		return redirect()->route('profile')->with('error', 'Petición Incorrecta');
    	}        
    	$user->fill($request->all());
        if($request->hasFile('avatar'))
        {
            $user->avatar = $request->file('avatar')->store($user->user_name, 'avatar');
        }
        $user->skills()->sync($request->skills);
    	$user->save();
    	return redirect()->route('profile')->with('success', 'Se ha guardado correctamente su información');
    }
}
