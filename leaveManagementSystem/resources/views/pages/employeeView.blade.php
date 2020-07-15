
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                           <td>{{$user->departments->department}}</td>
                           <td>{{$user->positions->position}}</td> 
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
