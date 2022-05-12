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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add new package</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('packages.store') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('name') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('name')}}" name="name" required autocomplete="name" autofocus />
                                                        <label for="phone">{{_('Name')}}</label>
                                                        @error('name')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('price') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('price')}}" name="price" required autocomplete="price" autofocus />
                                                        <label for="inputFirstName">{{_('Price')}}</label>
                                                        @error('Price')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('space') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('space')}}" name="space" required autocomplete="space" autofocus />
                                                        <label for="phone">{{_('Space')}}</label>
                                                        @error('space')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('bandwidth') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('bandwidth')}}" name="bandwidth" required autocomplete="bandwidth" autofocus />
                                                        <label for="inputFirstName">{{_('Bandwidth')}}</label>
                                                        @error('bandwidth')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('ftp') is-invalid @enderror" id="inputEmail" type="text" value="{{old('ftp')}}" required autocomplete="ftp" name="ftp" />
                                                    <label for="inputEmail">{{_('Ftp')}}</label>
                                                @error('ftp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message}}</strong>
                                                </span>
                                                @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('database') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('databse')}}" name="databse" required autocomplete="database" autofocus />
                                                        <label for="inputFirstName">{{_('Database')}}</label>
                                                        @error('database')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputPassword" type="text"  required autocomplete=" email"  name="email"/>
                                                        <label for="inputPassword">{{_('Email')}}</label>
                                                        @error('email')
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