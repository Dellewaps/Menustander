@extends('layouts.app')


@section('content')

<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
        {{ Session::get('success') }}
        </div>
    @endif
            
    {!! Form::open(['route'=>'createdish.store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            
        <div class="form-group {{ $errors->has('retten') ? 'has-error' : '' }}">
            {!! Form::label('Rettens navn:') !!}
            {!! Form::text('retten', old('retten'), ['class'=>'form-control', 'placeholder'=>'Rettens navn']) !!}
            <span class="text-danger">{{ $errors->first('retten') }}</span>
        </div>
            
        <div class="form-group {{ $errors->has('pris') ? 'has-error' : '' }}">
            {!! Form::label('Pris:') !!}
            {!! Form::number('pris', old('pris'), ['class'=>'form-control', 'placeholder'=>'Pris']) !!}
            <span class="text-danger">{{ $errors->first('pris') }}</span>
        </div>
            
        <div class="form-group {{ $errors->has('tilbehør') ? 'has-error' : '' }}">
            {!! Form::label('Tilbehør:') !!}
            {!! Form::textarea('tilbehør', old('tilbehør'), ['class'=>'form-control', 'placeholder'=>'Tilbehør']) !!}
            <span class="text-danger">{{ $errors->first('tilbehør') }}</span>
        </div>

        <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
            {!! Form::label('Billede:') !!}
            {!! Form::file('photo', old('photo'), ['class'=>'form-control', 'placeholder'=>'Billede']) !!}
            <span class="text-danger">{{ $errors->first('photo') }}</span>
        </div>
           
        <div class="form-group">
            <button class="btn btn-success">Gem ret</button>
        </div>
            
    {!! Form::close() !!}

</div>

@endsection