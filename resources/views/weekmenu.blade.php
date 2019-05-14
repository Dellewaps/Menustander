@extends('layouts.app')


@section('content')
<div class="head-line">
    <h2>Ugens Menu</h2>
</div>
<div class="container">
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="days-left">
                <div class="imageleft">
                    <img class="img" src="/storage/photos/{{$monday->photo}}">
                </div>
                <h2>Mandag</h2>
                <h3>{{$monday->name}}</h3>                
                <div class="priceleft">
                    <h4>{{$monday->price}}</h4>
                </div>
                    <h4>{{$monday->accessories}}</h4>                
            </div>

            <div class="days-left">
                <div class="imageleft">
                    <img class="img" src="/storage/photos/{{$wednesday->photo}}">
                </div>
                <h2>Onsdag</h2>            
                <h3>{{$wednesday->name}}</h3>
                <div class="priceleft">
                    <h4>{{$wednesday->price}}</h4>
                </div>
                <h4>{{$wednesday->accessories}}</h4>
            </div>
            
            <div class="days-left">
                <div class="imageleft">
                    <img class="img" src="/storage/photos/{{$friday->photo}}">
                </div>
                <h2>Fredag</h2>
                <h3>{{$friday->name}}</h3>
                <div class="priceleft">
                    <h4>{{$friday->price}}</h4>
                </div>
                <h4>{{$friday->accessories}}</h4>
            </div>
            
        </div>
        <div class="col-md-6" id="col-right">
            <div class="days-right">
                <div class="imageright">
                    <img class="img" src="/storage/photos/{{$tuesday->photo}}">
                </div>
                <h2>Tirsdag</h2>
                <h3>{{$tuesday->name}}</h3>
                <div class="priceright">
                    <h4>{{$tuesday->price}}</h4>
                </div>
                <h4>{{$tuesday->accessories}}</h4>
            </div>

            <div class="days-right">
                <div class="imageright">
                    <img class="img" src="/storage/photos/{{$thursday->photo}}">
                </div>
                <h2>Torsdag</h2>
                <h3>{{$thursday->name}}</h3>
                <div class="priceright">
                    <h4>{{$thursday->price}}</h4>
                </div>
                <h4>{{$thursday->accessories}}</h4>
            </div>
        </div>
    </div>
</div>
@endsection