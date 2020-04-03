@extends('layouts.app')
@section('style')
    <style>
        body {
            background-image: url("images/bghackathon.jpg");
        }
    </style>
@endsection
@section('content')
    <div class="container" style="margin-top:4.2rem;">
        <h2 style="
        text-align: center;
        color: dimgrey;
        letter-spacing: 2px;
        font-family: 'Redressed';
        padding-bottom: 1rem;
        ">WE ARE HERE FOR PROVIDING HELP IN THE <br>HARD TIME OF COVID-19</h2>
        <img src="images/covid.jpg" style="
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 70vw;
        height: 60vh;
          ">
        <div style="box-shadow: 0 8px 6px -6px black; ">
            <p style="
                padding-top: 2rem;
                font-family: 'Berlin Sans FB';
                font-size: 20px;
                letter-spacing: 1px;
                padding-left: 10px;
                color: #003366;
            ">We Aim at helping people travel from one location to another during the time of lockdown.
                <br>
                Tell us the details of the place u want to go along with a valid reason for the same.
                Once we verify the details , we would help you to reach your destination during the hard time of COVID-19
            </p>
        </div>
    </div>
@endsection
