<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;



class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::all();
        return view('packages.index',compact('packages'))
           ->with('i', (request()->input('page', 1) -1) * 5);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        
        $packages=Package::All();
        return view('packages.create',compact('packages'));
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
            'name' => 'required',
            'price' => 'required',
            'space' => 'required',
            'bandwidth' => 'required',
            'ftp' => 'required',
            'databse' => 'required',
            'email' => 'required',
            
            
            
        ]);
  
        Package::create($request->all());
   
        return redirect()->route('packages.index')->with('success','packages created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $packages=Package::find($id);
        return view('packages.show',compact('packages'));
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
         $packages=Package::find($id);
         
        return view('packages.edit', compact('packages'));
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
       
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'space' => 'required',
            'bandwidth' => 'required',
            'ftp' => 'required',
            'databse' => 'required',
            'email' => 'required',
        ]);
        Package::whereId($id)->update($validatedData);
  
        return redirect()->route('packages.index')
                        ->with('success','packages updated successfully');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages=Package::where('id',$id)->delete();
        return redirect()->route('packages.index')
                        ->with('success','packages deleted successfully');
    }
}
