<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientsdomain;
Use App\User;
Use App\Domain;


class ClientsdomainsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientsdomains=Clientsdomain::all();
        return view('clientsdomains.index',compact('clientsdomains'))
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
        $domains=Domain::All();
        return view('clientsdomains.create',compact('users','domains'));
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
            'domain_id' => 'required',
            'NS1' => 'required',
            'NS2' => 'required',
            'NS3' => 'required',
            'NS4' => 'required',
            'name' => 'required',
            
        ]);
  
        Clientsdomain::create($request->all());
   
        return redirect()->route('clientsdomains.index')->with('success','clientsdomains created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $clientsdomains=Clientsdomain::All();
        return view('clientsdomains.show',compact('clientsdomains'));
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
         $domains=Domain::All();
         $clientsdomains=clientsdomain::find($id);
        return view('clientsdomains.edit', compact('clientsdomains','users','domains'));
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
            'user_id' => 'required',
            'domain_id' => 'required',
            'name' => 'required',
            'NS1' => 'required',
            'NS2' => 'required',
            'NS3' => 'required',
            'NS4' => 'required',
        ]);
        Clientsdomain::whereId($id)->update($validatedData);

        return redirect()->route('clientsdomains.index')
                        ->with('success','clientsdomains updated successfully');
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientsdomains=Clientsdomain::where('id',$id)->delete();
  
        return redirect()->route('clientsdomains.index')
                        ->with('success','clientsdomains deleted successfully');
    }
    public function listings($id){
        $user_id=Auth::user()->id;
        $clientsdomains=Clientsdomain::where('user_id','=','user_id');
       
        return view('clientsdomains.listings',compact('clientsdomains','user_id'));
    }
    
}
