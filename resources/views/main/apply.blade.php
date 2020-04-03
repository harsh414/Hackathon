@extends('layouts.app')
@section('style')
    <style>
    body{
        background-image: url("images/bghackathon.jpg");
    }
    </style>
    @endsection

@section('content')
    <div class="container" style="margin-top: 4.2rem;">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-center" style="color: darkslateblue;font-weight: bold">Apply Here</h1>
                {!! Form::open(['action' => 'ApplyController@store','method'=>'post','encType'=>'multipart/form-data']) !!}
                <div class="form-group" style="box-shadow:6px 3px 3px #9999ff">
                    {{Form::label('name','Name:')}}
                    {{Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Enter Name','readonly'])}}
                </div>
                <div class="form-group" style="box-shadow:6px 3px 3px #9999ff">
                    {{Form::label('email','Email:')}}
                    {{Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'Enter Email','readonly'])}}
                </div>
                <div class="form-group" style="box-shadow:6px 3px 3px #9999ff">
                    {{Form::label('reason','Reason:')}}
                    {{Form::textarea('reason','',['class'=>'form-control','placeholder'=>'Enter Reason','rows'=>'5'])}}
                </div>
                <div class="form-group" style="box-shadow:6px 3px 3px #9999ff">
                    {{Form::label('from','From:')}}
                    {{Form::text('from','',['class'=>'form-control','placeholder'=>'Enter From Location'])}}
                </div>
                <div class="form-group">
                    {{Form::label('to','To:')}}
                    {{Form::text('to','',['class'=>'form-control','placeholder'=>'Enter To Location'])}}
                </div>
                <div class="form-group" style="box-shadow:6px 3px 3px #9999ff">
                    {{Form::label('duration','Duration(in Hours):')}}
                    {{Form::number('duration','',['class'=>'form-control','placeholder'=>'Enter Number of Hours.'])}}
                </div>
{{--                 @if ($user->no_of_applications==0)--}}
                <div class="proof" style="box-shadow:6px 3px 3px #9999ff">
                    {{Form::label('proof','Id proof:')}} <br>
                    {{Form::file('proof',['class'=>'btn btn-outline-success'])}}
                </div>
{{--                 @endif--}}

                <br>
                {{Form::submit('Submit',['class'=>'btn btn-success'])}}
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection
