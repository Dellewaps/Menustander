@extends('layouts.app')


@section('content')

<div class="container">
    <div class='daily-description'>
        @if(Session::has('success'))
            <div class="alert alert-success">
            {{ Session::get('success') }}
            </div>
        @endif
                
        {!! Form::open(['route'=>'/setdaily.store']) !!}
                
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                {!! Form::label('Description:') !!}
                {!! Form::textarea('description', $dishToday->accessories, ['class'=>'form-control']) !!}
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
            
            <div class="form-group">
                {!! Form::label('sidedish', 'Diverse') !!}
                {!! Form::select('sideone', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('sidedish', 'Diverse') !!}
                {!! Form::select('sidetwo', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('sidedish', 'Diverse') !!}
                {!! Form::select('sidethree', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('sidedish', 'Diverse') !!}
                {!! Form::select('sidefour', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}
            </div>
                
            <div class="form-group">
                <button class="btn btn-success">Gem dagens ret</button>
            </div>
                
        {!! Form::close() !!}
    </div>    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Set dagens menu</div>

                <div class="card-body">
                    {!! Form::open(['route'=>'/setdaily.store']) !!}
                        

                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Tilbehør</label>

                            <div class="col-md-6">
                            {!! Form::textarea('description', $dishToday->accessories, ['class'=>'form-control']) !!}

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sidedish" class="col-md-4 col-form-label text-md-right">Diverse</label>

                            <div class="col-md-6">
                            {!! Form::select('sideone', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}

                                @if ($errors->has('sideone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sideone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sidedish" class="col-md-4 col-form-label text-md-right">Diverse</label>

                            <div class="col-md-6">
                            {!! Form::select('sidetwo', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}

                                @if ($errors->has('sidetwo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sidetwo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sidedish" class="col-md-4 col-form-label text-md-right">Diverse</label>

                            <div class="col-md-6">
                            {!! Form::select('sidethree', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}

                                @if ($errors->has('sidethree'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sidethree') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sidedish" class="col-md-4 col-form-label text-md-right">Diverse</label>

                            <div class="col-md-6">
                            {!! Form::select('sidefour', $sidedishDropDownArray, null, ['class' => 'form-control', 'placeholder' => 'Vælge en ret']) !!}

                                @if ($errors->has('sidefour'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sidefour') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Gem dagens menu
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection