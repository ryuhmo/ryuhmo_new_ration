@extends('layouts.app')

@section('content')
<title>Pending Status</title>
   <style>
      

   </style>
    <table class="apptable">
    <tr>
         <th>#</th>
         <th>Registration Number</th>
         <th>Head of the Family</th>
         <th>Date At</th>
         <th>DCSO Status</th>
    </tr>
    @foreach ($pending as $pending)
    <tr>
         <td>{{$pending->id}}</td>
         
         <td><a href="/Rationissue/{{$pending->id}}">{{$pending->registration}}</a></td>
         <td>{{$pending->head_of_family}}</td>
         <td>{{$pending->created_at}}</td>
         <td>{{$pending->pending_status}}</td>
     </tr> 
    
    @endforeach
    
     Nothing to see here 
    
</table>
@endsection