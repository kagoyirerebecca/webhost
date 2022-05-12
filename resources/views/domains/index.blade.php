@extends('layouts.master2')
@section('content')
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <p>Dashboard</p>
         </div>
         <div class="card mb-4">
            <div class="card-body">
               
               <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                  <div class="dataTable-top">
                     <div class="dataTable-dropdown">
                        <label>
                           <select class="dataTable-selector">
                              <option value="5">5</option>
                              <option value="10" selected="">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                              <option value="25">25</option>
                           </select>
                           entries per page
                        </label>
                     </div>
                     <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..." type="text"></div>
                  </div>
                  <div class="dataTable-container">
                     <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                           <tr>
                              <th data-sortable="" style="width: 19.5738%;"><a href="#" class="dataTable-sorter">Extensions</a></th>
                              <th data-sortable="" style="width: 28.9661%;"><a href="#" class="dataTable-sorter">Cost</a></th>
                              <th data-sortable="" style="width: 28.9661%;"><a href="#" class="dataTable-sorter">Action</a></th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($domains as $domain)
                              <tr>
                                 <td>{{ $domain->extensions }}</td>
                                 <td>{{ $domain->cost }}</td>
                                 <td><a href="{{ route('domains.edit', $domain->id)}}" class="btn btn-primary">Edit</a></td>
                                 <td>
                                    <form action="{{ route('domains.destroy', $domain->id)}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                       <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
                  <div class="dataTable-bottom">
                     <div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
                     <nav class="dataTable-pagination">
                        <ul class="dataTable-pagination-list">
                           <li class="active"><a href="#" data-page="1">1</a></li>
                           <li class=""><a href="#" data-page="2">2</a></li>
                           <li class=""><a href="#" data-page="3">3</a></li>
                           <li class=""><a href="#" data-page="4">4</a></li>
                           <li class=""><a href="#" data-page="5">5</a></li>
                           <li class=""><a href="#" data-page="6">6</a></li>
                           <li class="pager"><a href="#" data-page="2"></a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection