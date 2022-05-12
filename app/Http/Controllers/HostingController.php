<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\Package;
use App\Hosting;

class HostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostings=Hosting::all();
        return view('hostings.index',compact('hostings'))
           ->with('i', (request()->input('page', 1) -1) * 5);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $users=User::All();
        $packages=Package::All();
        
        return view('hostings.create',compact('users','packages'));
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
            'user_id' => 'required',
            'package_id' => 'required',
            'name' => 'required',
            'reg_date' => 'required',
            'exp_date' => 'required',
            
            
        ]);
  
        Hosting::create($request->all());
   
        return redirect()->route('hostings.index')->with('success','hostings created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $hostings=Hosting::find($id);
        return view('hostings.show',compact('hostings'));
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $users=User::All();
         $packages=Package::All();
         $hostings=Hosting::find($id);
        return view('hostings.edit', compact('users','packages','hostings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validatedData=$request->validate([
            'user_id' => 'required',
            'package_id' => 'required',
            'name' => 'required',
            'reg_date' => 'required',
            'exp_date' => 'required',
            
        ]);

        //dd($validatedData);
  
        Hosting::whereId($id)->update($validatedData);
  
        return redirect()->route('hostings.index')
                        ->with('success','hostings updated successfully');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $hostings=Hosting::where('id',$id)->delete();
  
        return redirect()->route('hostings.index')
                        ->with('success','hostings deleted successfully');
    }
}
