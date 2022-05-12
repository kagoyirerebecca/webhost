@extends('layouts.master2')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit  domains</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hostings.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('hostings.update',$hostings->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0 " >
                <select class="form-select form-select mb-3" aria-label=".form-select example" name="user_id"  style="height:57px">
                
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->fname }} {{ $user->lname }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                <div class="form-floating mb-3 mb-md-0 " >
                <select class="form-select form-select mb-3" aria-label=".form-select example" name="package_id"  style="height:57px">
                <option selected>Package_id</option>
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
                <input class="form-control @error('reg_date') is-invalid @enderror" id="inputFirstName" type="date" value="{{$hostings->reg_date}}" name="reg_date" autocomplete="reg_date" autofocus />
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
                    <input class="form-control @error('exp_date') is-invalid @enderror" id="inputFirstName" type="date" value="{{$hostings->exp_date}}" name="exp_date"  autocomplete="exp_date" autofocus />
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
                <input class="form-control @error('name') is-invalid @enderror" id="inputPassword" type="text"  required autocomplete=" name"  name="name" value="{{$hostings->name}}"/>
                            <label for="inputPassword">{{_('Name')}}</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{($message)}}</strong>
                                </span>
                            @enderror
                </div>
                
               
               <div class="mt-4 mb-0">
           <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Update</button></div>
        </div>
        
    </form>
    
@endsection
