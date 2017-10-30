<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\BookUser;
use App\Http\Requests\BookUserRequest;

class BookUserController extends Controller
{
    public function index()
    {
    	$users=BookUser::all();
    	return response()->json($users,200);
    }


    public function show($id)
    {
        $user=BookUser::find($id);
        if($user)
        {
            return response()->json($user,200);
        }else{
            return response()->json(['error'=>'Not found'],404);
        }
        
    }
    
    public function store(BookUserRequest $request)
    {
        $user = BookUser::create($request->all());
        return response()->json($user,200);
    }


    public function update(BookUserRequest $request, $id)
    {
    	$user=BookUser::find($id);
        $user->update($request->all());
        return response()->json($user,200);
    }

    public function destroy($id)
    {
        BookUser::destroy($id);
        return response()->json('ok',200);
    }
}
