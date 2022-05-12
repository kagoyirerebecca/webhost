<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain;



class DomainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains=Domain::all();
        return view('domains.index',compact('domains'))
           ->with('i', (request()->input('page', 1) -1) * 5);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        
        $domains=Domain::All();
        return view('domains.create',compact('domains'));
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
            'extensions' => 'required',
            'cost' => 'required',
            
            
        ]);
  
        Domain::create($request->all());
   
        return redirect()->route('domains.index')->with('success','domains created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $domains=Domain::find($id);
        return view('domains.show',compact('domains'));
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
         $domains=Domain::find($id);
         
        return view('domains.edit', compact('domains'));
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
        $valiadatedData=$request->validate([
            'extensions' => 'required',
            'cost' => 'required',
            
        ]);
  
        Domain::whereId($id)->update($valiadatedData);
  
        return redirect()->route('domains.index')
                        ->with('success','domains updated successfully');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domains=Domain::where('id',$id)->delete();
  
        return redirect()->route('domains.index')
                        ->with('success','domains deleted successfully');
    }
}
