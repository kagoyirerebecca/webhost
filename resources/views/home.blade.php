@extends('layouts.master2')

@section('content')
<div class="container" style="margin-top:100px;margin-bottom:350px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><p style="margin-left:300px">Dashboard</p></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->user()->rights==1)
                        <p style="margin-left:300px">Welcome Admin</p>
                        <div class="row" style="margin-left:99px">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">USERS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{userCount()}}
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">HOSTINGS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{totalHosting()}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">DOMAINS</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{totalDomains()}}
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                      @else
                        <p>welcome User</p>
                        
                    
                    @endif

                      
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
