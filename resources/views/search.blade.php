@extends('layouts.app')

@section('content')
<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Registration No.</th>
      <th scope="col">Head of Family</th>
      <th scope="col">Date</th>
      <th scope="col">Acknowledgement</th>
      <th scope="col">Ration Card</th>

      
      
    </tr>
  </thead>
  @foreach($registration as $item)
  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      
      <td><a href="/appform/{{$item->id}}">{{$item->registration}}</a></td>
      <td>{{$item->head_of_family}}</td>
      <td>{{$item->created_at}}</td>
      @if ($item->pending_status == "signed")
       <td><a href="/acknowledge/{{$item->id}}">Acknowledgement Receipt</a></td>
      <td><a href="/rationcard/{{$item->id}}">Ration Card</a></td>

      @endif
      
      
    </tr>
  </tbody>
  @endforeach
</table>
@endsection