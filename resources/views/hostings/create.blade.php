@extends('layouts.master2')
  
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main style="margin-top: -45px;margin-bottom:50 px;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add new hosting</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('hostings.store') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0 " >
                                                    <select class="form-select form-select mb-3" aria-label=".form-select example" name="user_id" style="height:57px">
                                                    
                                                    @foreach($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</option>
                                                    @endforeach
                                                </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <div class="form-floating mb-3 mb-md-0 " >
                                                    <select class="form-select form-select mb-3" aria-label=".form-select example" name="package_id" style="height:57px">
                                                    
                                                    @foreach($packages as $package)
                                                    <option value="{{$package->id}}">{{ $package->name }}</option>
                                                    @endforeach
                                                </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('reg_date') is-invalid @enderror" id="inputFirstName" type="date" value="{{old('reg_date')}}" name="reg_date" autocomplete="reg_date" autofocus />
                                                        <label for="phone">{{_('Reg_date')}}</label>
                                                        @error('reg_date')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('exp_date') is-invalid @enderror" id="inputFirstName" type="date" value="{{old('exp_date')}}" name="exp_date"  autocomplete="exp_date" autofocus />
                                                        <label for="inputFirstName">{{_('Exp_date')}}</label>
                                                        @error('exp_date')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                            <input class="form-control @error('name') is-invalid @enderror" id="inputPassword" type="text"  required autocomplete=" name"  name="name"/>
                                                        <label for="inputPassword">{{_('Name')}}</label>
                                                        @error('name')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{($message)}}</strong>
                                                           </span>
                                                        @enderror
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create </button></div>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
            
</html>
@endsection