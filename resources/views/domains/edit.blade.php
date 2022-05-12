@extends('layouts.master2')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit  domains</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('domains.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('domains.update',$domains->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="row mb-3">
           <div class="col-md-6">
               <div class="form-floating mb-3 mb-md-0 " >
                 <input class="form-control @error('extensions') is-invalid @enderror" id="inputFirstName" type="text" value="{{$domains->extensions}}" name="extensions" required autocomplete="extensions" autofocus />
                 <label for="inputFirstName">{{_('Extensions')}}</label>
                    @error('extensions')
                        <span class="invalid feedback " role="alert">
                         <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating mb-3 mb-md-0">
                   <input class="form-control @error('cost') is-invalid @enderror" id="inputFirstName" type="text" value="{{$domains->cost}}" name="cost" required autocomplete="cost" autofocus />
                   <label for="inputFirstName">{{_('Cost')}}</label>
                    @error('cost')
                        <span class="invalid feedback " role="alert">
                         <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
               <div class="mt-4 mb-0">
           <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Update</button></div>
        </div>
        
    </form>
    
@endsection
