@extends('layout.layout')

@section('content')
    Applicants appliaction id
    <table class="apptable">
    <tr>
         <th>#</th>
         <th>Registration Number</th>
         <th>Head of the Family</th>
         <th>Date At</th>
         <th>CSC Status</th>
    </tr>
    @foreach ($persons as $person)
    <tr>
         <td>{{$person->id}}</td>
         
         <td><a href="/appform/{{$person->id}}">{{$person->registration}}</a></td>
         <td>{{$person->head_of_family}}</td>
         <td>{{$person->created_at}}</td>
         <td>{{$person->csc_status}}</td>
     </tr> 
    
    @endforeach
    
     Nothing to see here 
    
</table>
@endsection