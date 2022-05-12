@extends('layouts.master2')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit package</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('packages.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form action="{{ route('packages.update', $packages->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control @error('name') is-invalid @enderror" id="inputFirstName" type="text" value="{{$packages->name}}" name="name" required autocomplete="name" autofocus />
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
                    <input class="form-control @error('price') is-invalid @enderror" id="inputFirstName" type="text" value="{{$packages->price}}" name="price" required autocomplete="price" autofocus />
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
                    <input class="form-control @error('space') is-invalid @enderror" id="inputFirstName" type="text" value="{{$packages->space}}" name="space" required autocomplete="space" autofocus />
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
                    <input class="form-control @error('bandwidth') is-invalid @enderror" id="inputFirstName" type="text" value="{{$packages->bandwidth}}" name="bandwidth" required autocomplete="bandwidth" autofocus />
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
                    <input class="form-control @error('ftp') is-invalid @enderror" id="inputEmail" type="text" value="{{$packages->ftp}}" required autocomplete="ftp" name="ftp" />
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
                    <input class="form-control @error('database') is-invalid @enderror" id="inputFirstName" type="text" value="{{$packages->databse}}" name="databse" required autocomplete="database" autofocus />
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
            <input class="form-control @error('email') is-invalid @enderror" id="inputPassword" type="text"  required autocomplete=" email"  name="email" value="{{$packages->email}}"/>
            <label for="inputPassword">{{_('Email')}}</label>
            @error('email')
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