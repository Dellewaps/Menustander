@extends('layouts.app')


@section('content')

<div class="container" id="selectmodel">



    <div class="content">

        @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
        @endif


        {!! Form::open(array('route' => array('weekMenuPost'))) !!}
            <div class="form-group">
                {!! Form::label('monday', 'Mandag') !!}
                {!! Form::select('monday', $dishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('tuesday', 'Tirsdag') !!}
                {!! Form::select('tuesday', $dishDropDownArray, null, ['class' => 'form-control','placeholder' => 'Vælge en ret']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('wednesday', 'Onsdag') !!}
                {!! Form::select('wednesday', $dishDropDownArray, null, ['class' => 'form-control','placeholder' => 'Vælge en ret']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('thursday', 'Torsdag') !!}
                {!! Form::select('thursday', $dishDropDownArray, null, ['class' => 'form-control','placeholder' => 'Vælge en ret']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('friday', 'Fredag') !!}
                {!! Form::select('friday', $dishDropDownArray, null, ['class' => 'form-control','placeholder' => 'Vælge en ret']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Sæt uge menu', array('class' => 'btn btn-primary form-control','placeholder' => 'Vælge en ret')) !!}
            </div>
        {!! Form::close() !!}



    </div>
            


</div>

@endsection