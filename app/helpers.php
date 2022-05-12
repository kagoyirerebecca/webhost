<?php
use App\User;
use App\Hosting;
use App\Domain;
use App\Package;

function userCount(){
    $userCount=User::count();
    return $userCount;
}

function totalHosting(){
    $hostingsCount=Hosting::count();
    return $hostingsCount;
}

function totalDomains(){
    $domainsCount=Domain::count();
    return $domainsCount;
}
 function GetNames($id){
     
     $lname= User::where('id','=',$id)->pluck('lname')->first();
     $fname= User::where('id','=',$id)->pluck('fname')->first();
     
     $fullnames = $lname.' '.$fname;

     return $fullnames;
 }
 function GetDomains($id){
    //$names=User::where('id','=',$id)->get()->pluck('lname');
    $extensions=Domain::find($id);

    return $extensions;
}
function GetPackages($id){
    //$names=User::where('id','=',$id)->get()->pluck('lname');
    $names=Package::find($id);

    return $names;
}
function Getuserid($id){
    $userid=User::find($id);
    dd($user_id);
   // return $userid;
}