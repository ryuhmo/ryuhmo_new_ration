@extends('layout.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form method="POST" action="{{route('uploadfile')}}" enctype="multipart/form-data">
    @csrf
     <label for="file">Choose File</label>
     <input type="file" name="file">
     <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>
@endsection