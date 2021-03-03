@extends('layout.layout')
@section('content')

<h2 class="welcome"> RATION CARD ISSUANCE PORTAL</h2>
@if (session('success'))
<h2 style="text-align:center">{{session('success')}}</h2>
<a href="">fghj</a>
@endif<br><br><br>
<div class="mark">Please click <mark>Home Button</mark> to back to Main Menu<br><i class="fa fa-hand-o-down"></div>
<a class="mainhome" href="{{ url('/') }}">
</i> <div class="subhome"><i class="fa fa-home"></i>Home</div>
                </a>
 
                <style>
                .mark{
                    text-align:center;
                    color:red;
                }
                      .subhome
                      {
                        
                        text-align:center;
                        border-bottom:6px solid red;
                        background: lightgrey;
                        margin:50px;
                      }
                      .mainhome{
                          color:black;
                      }
                </style>

                


@endsection