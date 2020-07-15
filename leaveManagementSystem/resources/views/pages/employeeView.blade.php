
</html>@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container mt-5">
            <div class="col-12">
               <div class="input-group col-md-12">
                   <input class="form-control py-2 border-right-0 border" type="search" placeholder="search.." id="myInput">
                   <span class="input-group-append">
                     <button class="btn btn-outline-secondary border-left-0 border" type="button">
                           <i class="fa fa-search"></i>
                     </button>
                   </span>
               </div>
                <a href="#"class="btn btn-primary mt-5 float-right">Create</a>
               <table class="table table-border" id="employee" class="display" cellspacing="0">
                       <tr>
                           <th>Firstname</th>
                           <th>Lastname</th>
                           <th>Department</th>
                           <th>Position</th>
                           <th>Start Date</th>
                           <th>Action</th>
                       </tr>
                         <tbody id="myTable">
                            @foreach ($users as $user)
                       <tr>
                           <td>{{$user->firstName}}</td>
                           <td>{{$user->lastName}}</td>
                           <td>{{$user->department}}</td>
                            <td>{{$user->position}}</td> 
                           <td>{{$user->startDate}}</td>
                           <td></td>
                       </tr>
                         @endforeach
                      </tbody>
                 </table>
          <style>
   table {
     font-family: verdana;
     font-size: 12px;
   }
   
   table th {
     text-align: left;
     background: #D3D3D3;
     padding: 2px;
   }
   
   table tr:hover {
     background: #EFEFEF;
   }
   
   table tr {
     text-align: left;
   }
   
   table td {
     padding: 5px;
   }
   
   table td a {
     color: #0454B5;
   }
        </style>
            </div>
        </div>
    </div>
</div>
@endsection
