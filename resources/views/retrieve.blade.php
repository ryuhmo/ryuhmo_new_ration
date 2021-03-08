
@extends('layout.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPLICANTS FORM</title>
    <link rel="stylesheet" href="/css/retrieve.css">
    <link rel="stylesheet" href="/css/footer.css">
    

<style>
  body{
    margin:auto;
    color:black;
    
   

   
  }
    .button 
    {
    background-color:red;
    border:none;
    color:wheat;
    text-decoration:none;
    padding:16px 32px;
    margin:25px;
    margin-left: 2px;
    border-radius:10px;
    }

    .submit
    {
    background-color:green;
    border:none;
    color:wheat;
    text-decoration:none;
    padding:16px 32px;
    margin:25px;
    margin-left: 300px;
    border-radius:10px;
    }


input[type=button]:hover, input[type=submit]:hover{
  color:blue;
  background-color:grey;
}
table {
    font-family:arial, sans-serif;
    border-collapse: collapse;
    width:100%;
   
}
  th, td:nth-child(odd){
    border:1px solid black;
    background:#eee;
    text-align:left;
    padding:8px;
    color:black;
  }
  td:nth-child(even){
    border:1px solid black;
    background:white;
    text-align:left;
    padding:8px;
  }

  .formsubmit {
    
  }
  
  a:link, a:visited
  {
    text-decoration:none;
    background-color:purple;
    color:white;
    display:inline-block;
    padding:6px;
    border:2px  solid wheat;
    border-radius:10px;
    
  }
  a:hover
  {
   color:blue;
   background-color:grey;
  }
  



 
</style>
</head>
<body>
    
    <table>
    <tr>
    <th colspan="2"  style="background:rgba(62,30,30,1);text-align:center;color:#eee">APPLICANT DETAILS</th></tr>
     <tr>
        <th>Urban</th>
        <td>{{ $vars->urban}}</td>
      </tr>
      <tr>
        <th>Rural</th>
        <td>{{ $vars->rural}}</td>
      </tr>
      <tr>
        <th>Registration</th>
        <td>{{$vars->registration}}</td>
      </tr>
        
      <tr>
        <th class="even" >Address Door-No.</th>
        <td>{{ $vars->door}}</td>
      </tr>

      <tr>
        <th>Address Ward Number</th>
        <td>{{ $vars->Enter_Ward_number}}</td>
      </tr>
      <tr>
        <th>Address Sub Local-1</th>
        <td>{{ $vars->sub_local_1}}</td>
      </tr>
      <tr>
        <th>Address Sub Local-2</th>
        <td>{{$vars->sub_local_2}}</td>
      </tr>

      <tr>
        <th class="even" >Address Location</th>
        <td>{{ $vars->location}}</td>
      </tr>
      <tr>
        <th>Address Sub District</th>
        <td>{{ $vars->Sub_District}}</td>
      </tr>
      <tr>
        <th>Address District</th>
        <td>{{$vars->Address_district}}</td>
      </tr>

      <tr>
        <th>District Pin code</th>
        <td>{{ $vars->District_pin_code}}</td>
      </tr>
      <tr>
        <th>Address State</th>
        <td>{{ $vars->Address_State}}</td>
      </tr>
      <tr>
        <th>Address State Pin Code</th>
        <td>{{$vars->State_pin_code}}</td>
      </tr>

      <tr>
        <th>Address Country</th>
        <td>{{ $vars->address_country}}</td>
      </tr>
      <tr>
        <th>Address Police Station</th>
        <td>{{ $vars->address_police_station}}</td>
      </tr>
      <tr>
        <th>Head Of Family</th>
        <td>{{$vars->head_of_family}}</td>
      </tr>

      <tr>
        <th>Date Of Birth</th>
        <td>{{ $vars->Date_of_birth}}</td>
      </tr>
      <tr>
        <th>Gender</th>
        <td>{{$vars->Gender}}</td>
      </tr>

      <tr>
        <th class>Relationship</th>
        <td>{{ $vars->relationship}}</td>
      </tr>
      
      <tr>
        <th>Family Members</th>
        <td>{{ $vars->family_memeber}}</td>
      </tr>
      <tr>
        <th>Relation With Head of Family</th>
        <td>{{ $vars->Relation_with_head_of_Family}}</td>
      </tr>
        <th>Monthly Income</th>
        <td>{{ $vars->monthly_income}}</td>
      </tr>
      <tr>
        <th>Occupation</th>
        <td>{{$vars->occupation}}</td>
      </tr>

      <tr>
        <th>Religious</th>
        <td>{{ $vars->Religious}}</td>
      </tr>
      <tr>
        <th>Electric Connection</th>
        <td>{{ $vars->Electricity_Connection}}</td>
      </tr>
      <tr>
        <th>Cooking Gas</th>
        <td>{{$vars->Cooking_Gas}}</td>
      </tr>
      <tr>
        <th>Remark</th>
        <td>{{$vars->Textarea}}</td>
      </tr></tr>
      
      <th> House Tax File:</th>
                
                <td><a href="/storage/documents/{{$vars->house_tax_file}}" target="_blank" >Click here to view</a>
                <a href="/download1/{{$vars->house_tax_file}}"  >Download Here</a></td>
            </tr>
             <tr>
                <th>Surrender Certificate:</th>
                <td><a href="/storage/mydoc/{{$vars->surrender_file}}" target="_blank" >Click here to view</a>
                <a href="/download2/{{$vars->surrender_file}}" >Download Here</a></td>
            </tr> 

            <th> Supporting documents:</th>
              
                <td><a href="/storage/mydoc2/{{$vars->support_document_file}}" target="_blank" >Click here to view</a>
                <a href="/download3/{{$vars->support_document_file}}"  >Download Here</a></td>
            </tr> 



</table> 
  @if ($vars->pending_status != "Signature Required")
<div class="formsubmit">

  <form action="/appform/{{$vars->id}}/update" method="POST">
  @csrf 

  <input type="submit" class="submit" name="issue" value="ISSUE">

  <input type="submit" class="button" name="reject" value="REJECT"> 
  </form>
  </div>
  
@else
<div class="formsubmit">
<form action="/appform/{{$vars->id}}/update" method="POST">
  @csrf 

  <input type="submit" class="submit" name="sign" value="Sign">
@endif
     
</body>
</html>

@endsection