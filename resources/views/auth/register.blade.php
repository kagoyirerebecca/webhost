@extends('layouts.app')

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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0 " >
                                                        <input class="form-control @error('name') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('fname')}}" name="fname" required autocomplete="fname" autofocus />
                                                        <label for="inputFirstName">{{_('First name')}}</label>
                                                        @error('name')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('name') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('lname')}}" name="lname" required autocomplete="lname" autofocus />
                                                        <label for="inputFirstName">{{_('Last name')}}</label>
                                                        @error('name')
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
                                                    <input class="form-control @error('phone') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('phone')}}" name="phone" required autocomplete="phone" autofocus />
                                                        <label for="phone">{{_('Phone')}}</label>
                                                        @error('phone')
                                                            <span class="invalid feedback " role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control @error('co_name') is-invalid @enderror" id="inputFirstName" type="text" value="{{old('co_name')}}" name="co_name" required autocomplete="name" autofocus />
                                                        <label for="inputFirstName">{{_('Company name')}}</label>
                                                        @error('co_name')
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
                                                    <input class="form-control @error('email') is-invalid @enderror" id="inputEmail" type="email" value="{{old('email')}}" required autocomplete="email" name="email" />
                                                    <label for="inputEmail">{{_('Email address')}}</label>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message}}</strong>
                                                </span>
                                                @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <select class="form-select form-select mb-3" aria-label=".form-select example" name="rights" style="height:57px">
                                                    <option selected>Choose rights</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">User</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input class="form-control @error('password') is-invalid @enderror" id="inputPassword" type="password"  required autocomplete=" password"  name="password"/>
                                                        <label for="inputPassword">{{_('Password')}}</label>
                                                        @error('password')
                                                           <span class="invalid-feedback" role="alert">
                                                               <strong>{{($message)}}</strong>
                                                           </span>
                                                        @enderror
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('login')}}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>
            
        
        <script src="{{asset('assets/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
    </body>
</html>


@endsection
