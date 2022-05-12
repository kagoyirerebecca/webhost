@extends('layouts.master2')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit clients domains</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form action="{{ route('users.update', $users->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
            <input class="form-control @error('fname') is-invalid @enderror" id="inputFirstName" type="text" value="{{$users->fname}}" name="fname" required autocomplete="fname" autofocus />
                <label for="phone">{{_('Fname')}}</label>
                @error('fname')
                    <span class="invalid feedback " role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control @error('lname') is-invalid @enderror" id="inputFirstName" type="text" value="{{$users->lname}}" name="lname" required autocomplete="lname" autofocus />
                <label for="inputFirstName">{{_('Lname')}}</label>
                @error('lname')
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
            <input class="form-control @error('phone') is-invalid @enderror" id="inputFirstName" type="text" value="{{$users->phone}}" name="phone" required autocomplete="phone" autofocus />
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
                <input class="form-control @error('co_name') is-invalid @enderror" id="inputFirstName" type="text" value="{{$users->co_name}}" name="co_name" required autocomplete="co_name" autofocus />
                <label for="inputFirstName">{{_('Co-name')}}</label>
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
            <select class="form-select form-select mb-3" aria-label=".form-select example" name="rights" style="height:57px">
                <option selected>Choose rights</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
        
        <div class="col-md-6">
            <div class="form-floating mb-3 mb-md-0">
                <input class="form-control @error('email') is-invalid @enderror" id="inputFirstName" type="email" value="{{$users->email}}" name="email" required autocomplete="email" autofocus />
                <label for="inputFirstName">{{_('Email')}}</label>
                @error('email')
                    <span class="invalid feedback " role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-floating mb-3">
    <input class="form-control @error('password') is-invalid @enderror" id="inputPassword" type="password"  required autocomplete=" password"  name="password" value="{{$users->password}}"/>
                <label for="inputPassword">{{_('Password')}}</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{($message)}}</strong>
                    </span>
                @enderror
    </div>
    
    <div class="mt-4 mb-0">
        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Update </button></div>
    </div>   
</form>
@endsection