@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            ONLINE PIZZA LIST<br>
        </div>
        <p> {{ $name}}</p>
        <p> {{ $age}}</p>
       
        
            @foreach($pizzas as $pizza)

                <div>

                    {{$loop->index}} {{$pizza['type'] }} - {{$pizza['base' ]}}
                    @if($loop->first)
                    <span>-First in the loop</span>
                    @endif
                    @if($loop->last)
                    <span> - Last in the loop</span>
                    
                    @endif
                </div>
            @endforeach

    </div>
</div>]
@endsection
    
