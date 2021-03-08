@extends('layouts.app')

@section('content')

<form action="{{ url('/search') }}" method="get">
  @csrf
    <input type="search" class="sr" name="search" placeholder="Search Registration No.">
    <button type="submit" id="search">Search</button>
    </form>
    <h1>Note:</h1>
    <h4>Search your File with Your Registration No.</h4>




    <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Registration No.</th>
      <th scope="col">State </th>
      <th scope="col">Head of Family</th>
      <th scope="col">Date</th>
      <th scope="col">Forwarder Status</th>
      <th scope="col">CSC Status</th>
     
      
    </tr>
  </thead>
  @foreach($Formstatus as $item)
  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><a href="/appform/{{$item->id}}">{{$item->registration}}</a></td>
      <td>{{$item->Address_State}}</td>
      <td>{{$item->head_of_family}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->status_forwarder}}</td>
      <td>{{$item->csc_status}}</td>
      
      
    </tr>
  </tbody>
  @endforeach
</table>

@endsection