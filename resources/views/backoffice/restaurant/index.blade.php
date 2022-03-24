@extends('backoffice.layouts.app')
@section('content')


<div class="card">
    <div class="card-header">
<a class="btn btn-dark mt-5 mb-5 ml-auto rounded-pill " href="{{route('restaurant.add')}}">Add</a>
{{-- <input type="search" class="form-control form-control-sm" placeholder="Search Data..." value=""><button class="btn btn-primary">Search</button> --}}
<table  class="table w-100 thead-primary dataTable no-footer" role="grid"  style="width: 1098px;">
    
    <thead class="bg-danger text-white">
        <tr role="row">
        <th> ID</th>
        <th > Name</th>
        <th >Address</th>
        <th >Phone Number</th>
        <th >Action</th>
      
         </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
           
            <td>{{$restaurant->id}}</td>
            <td>{{$restaurant->name}}</td>
            <td>{{$restaurant->adresse}}</td>
            <td>{{$restaurant->tele}}</td>
            <td> <a class="btn btn-secondary" href="{{route('restaurant.show',['id' => $restaurant->id])}}">show</a>
            <a class="btn btn-primary"  href="{{route('restaurant.edit',['id' => $restaurant->id])}}">Edit</a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('restaurant.delete',['id' => $restaurant->id])}}">delete</a> </td>
   
          
            <tr>
                @endforeach
    </tbody>
  </table></div></div>
  
    @endsection