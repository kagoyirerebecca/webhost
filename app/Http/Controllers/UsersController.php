<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::All();
        return view('users.index',compact('users'))
           ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'co_name' => 'required',
            'rights' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
  
        User::create($request->all());
   
        return redirect()->route('users.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.show',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find($id);
         
        return view('users.edit', compact('users'));
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
        $valiadatedData=$request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'co_name' => 'required',
            'rights' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
  
        User::whereId($id)->update($valiadatedData);
  
        return redirect()->route('users.index')
                        ->with('success','users updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::where('id',$id)->delete();
  
        return redirect()->route('users.index')
                        ->with('success','users deleted successfully');
    }
}
