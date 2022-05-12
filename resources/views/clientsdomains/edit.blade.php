@extends('layouts.master2')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit clients domains</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('clientsdomains.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form action="{{ route('clientsdomains.update', $clientsdomains->id) }}" method="POST">
        @csrf
        @method('PUT')
   
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
                    <select class="form-select form-select mb-3" aria-label=".form-select example" name="domain_id" style="height:57px">
                        
                        @foreach($domains as $domain)
                            <option value="{{$domain->id}}">{{ $domain->extensions }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                <input class="form-control @error('NS1') is-invalid @enderror" id="inputFirstName" type="text" value="{{$clientsdomains->NS1}}" name="NS1" required autocomplete="NS1" autofocus />
                    <label for="phone">{{_('NS1')}}</label>
                    @error('NS1')
                        <span class="invalid feedback " role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control @error('NS2') is-invalid @enderror" id="inputFirstName" type="text" value="{{$clientsdomains->NS2}}" name="NS2" required autocomplete="NS2" autofocus />
                    <label for="inputFirstName">{{_('NS2')}}</label>
                    @error('NS2')
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
                <input class="form-control @error('NS3') is-invalid @enderror" id="inputEmail" type="text" value="{{$clientsdomains->NS3}}" required autocomplete="NS3" name="NS3" />
                <label for="inputEmail">{{_('NS3')}}</label>
            @error('NS3')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message}}</strong>
            </span>
            @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                    <input class="form-control @error('NS4') is-invalid @enderror" id="inputFirstName" type="text" value="{{$clientsdomains->NS4}}" name="NS4" required autocomplete="NS4" autofocus />
                    <label for="inputFirstName">{{_('NS4')}}</label>
                    @error('NS4')
                        <span class="invalid feedback " role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-floating mb-3">
                <input class="form-control @error('name') is-invalid @enderror" id="inputPassword" type="text"  required autocomplete="name"  name="name" value={{ $clientsdomains->name }}/>
                            <label for="inputPassword">{{_('Domain Name')}}</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{($message)}}</strong>
                                </span>
                            @enderror
        </div>
                                            
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection