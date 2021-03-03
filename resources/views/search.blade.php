<table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Registration No.</th>
      <th scope="col">Head of Family</th>
      <th scope="col">Date</th>
      <th scope="col">Forwarder Status</th>
      <th scope="col">DCSO Status</th>
      
    </tr>
  </thead>
  @foreach($registration as $item)
  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      
      <td><a href="/appform/{{$item->id}}">{{$item->registration}}</td>
      <td>{{$item->head_of_family}}</td>
      <td>{{$item->created_at}}</td>
      <td>{{$item->status_forwarder}}</td>
      <td>{{$item->csc_status}}</td>
      
    </tr>
  </tbody>
  @endforeach
</table>