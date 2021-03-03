<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acknowledgement</title>
</head>
<style>
body {
        margin:0;
        padding:0;
        font-family:Arial, Helvetica, sans-serif;
    }
.act
{
    text-align:center;
    font-family: "Times New Roman", Times, serif;
    font-size:30px;
  
}
.act-border
{
    border:1px solid black;
    margin-left:90px;
    margin-right: 100px;
    word-spacing:12px;
    
}

</style>
<body>
    
<div class="act-border"> 
 <span class="act"><h4>Acknowledgement</h4></span>
<p style="margin-left:30px">This is to acknowledge the receipt <u>New Ration Card</u></p>
<p style="margin-left:30px">Reistration Form with registration No. <u>{{$person->registration}}</u> dated on <br><br>
<u>{{$person->created_at}} </u>to the <u>DCSO</u> has been<br><br>
<u>SUBMITTED</u><br><br>

<span class="place">Place:Aizawl</span><br>
Date:{{$person->created_at}}                   <p style="margin-left:340px"> Registering Authority</p>
                                <p style="margin-left:350px">Aizawl, Mizoram</p></p>
                               </div>
                               </body>
</html>