<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reviews;

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
    
        return view('admin.userForAdmin', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        $review = Reviews::where('User_id',$id);
        $review->delete();
        $user = User::find($id);
        $user->delete();
        
        
  
        return redirect()->route('userForAdmin.index')
                        ->with('success','User deleted successfully');
    }

  
}
