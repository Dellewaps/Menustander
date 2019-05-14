@extends('layouts.app')


@section('content')

<div class="container">
    <div class="dayrow">
        <div class='daydish'>
            <div class="dayhead">
                <h1>Dagens Ret</h1>
            </div>
            <div class="imageleft">
                    <img class="img" src="/storage/photos/{{$dishtoday->photo}}">
            </div>
            <div class="weekday">
                <h2>{{$dayoftheweek}}</h2>
            </div>
            <div class="dishtoday">
                <h3>{{$dishtoday->name}}</h3>
            </div>                
            <div class="priceleft">
                <p>{{$dishtoday->price}}</p>
            </div>
            <div class="dishdes">
                <p>{{$dishdescription}}</p> 
            </div>
        </div>

        
        <div class='daydish'>
            <h3>
                Diverse retter i dag
            </h3>
            @foreach($today as $side)
                <div class="divname">
                    <h4> {{$side->name}}</h4>
                </div>
                <div class="divdish">
                    <h4>{{$side->description}}</h4>
                </div>

            @endforeach

        </div>

        
    </div>
</div>

@endsection