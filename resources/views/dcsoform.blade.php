

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCSO Login</title>
    <link rel="stylesheet" href="/css/retrieve.css">
    <link rel="stylesheet" href="/css/footer.css">
    


</head>
<body>
    
    <table>
    <tr>
    <th colspan="2"  style="background:rgba(62,30,30,1);text-align:center;color:#eee">APPLICANT DETAILS For DCSO View</th></tr>
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
        <th>Address Sub Local-1</th>
        <td>{{ $vars->sub_local_1}}</td>
      </tr>
      <tr>
        <th>Address Sub Local-2</th>
        <td>{{$vars->sub_local_2}}</td>
      </tr>
      <tr>
        <th>Address Ward No.</th>
        <td>{{$vars->Enter_Ward_number }}</td>
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
      </tr>

</table>
<div class="formsubmit">
<form action="/appform/{{$vars->id}}/update" method="POST">
@csrf 

<input type="submit" name="issue" value="ISSUE" class="is" >

<input type="submit" name="reject" value="REJECT">
</form>
</div>

     
</body>
</html>
