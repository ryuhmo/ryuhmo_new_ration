@extends('layouts.app')

@section('content')
<title>Forwarder Application ID</title>
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
    @foreach ($dcso as $dcso)
    <tr>
         <td>{{$dcso->id}}</td>
         
         <td><a href="/Rationissue/{{$dcso->id}}">{{$dcso->registration}}</a></td>
         <td>{{$dcso->head_of_family}}</td>
         <td>{{$dcso->created_at}}</td>
         <td>{{$dcso->status_forwarder}}</td>
     </tr> 
    
    @endforeach
    
     Nothing to see here 
    
</table>
@endsection