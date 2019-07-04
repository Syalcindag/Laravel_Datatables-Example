@extends('layouts.template')
@section('content')
    <div>
            <h3>Create Student</h3>
            {!! Form::open(['url' => 'okul']) !!}
            <div class="form-group">
                {!! Form::label('no', 'No:') !!}
                {!! Form::text('no',null,['class'=>'form-control']) !!}
            <div>{{$errors->first('no')}}</div>
            </div>
            <div class="form-group">
                {!! Form::label('ad', 'AD:') !!}
                {!! Form::text('ad',null,['class'=>'form-control']) !!}
                <div>{{$errors->first('ad')}}</div>
            </div>
            <div class="form-group">
                {!! Form::label('Soyad', 'Soyad:') !!}
                {!! Form::text('soyad',null,['class'=>'form-control']) !!}
                <div>{{$errors->first('soyad')}}</div>
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
    </div>
@stop
