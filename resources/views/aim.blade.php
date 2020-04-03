@extends('layouts.app')
@section('style')
    <style>
        body {
            background-image: url("images/bghackathon.jpg");
        }
        .linkk a:hover{
            background-color: yellow;
        }

    </style>
@endsection
@section('content')
    <div class="container" style="margin-top:4.2rem;">
        <h1 style="
    text-align: center;
    padding-top: 1rem;
    letter-spacing: 3px;
    font-family: 'Book Antiqua';
">HOW WE CAN HELP...</h1>
    <div>
        <img src="images/bgbg.jpg" style="width: 200px;
        height: 250px;
        border-radius: 5000px;
        border:1px grey;
        float: right;
        margin-left:6px;
    ">
    </div>
        <p style="
                padding-top: 2rem;
                font-family: 'Berlin Sans FB';
                font-size: 20px;
                letter-spacing: 1px;
                padding-left: 10px;
                color: #003366;
            ">
            COVID-19 has become a major issue for everyone. It has halted many aspects on life on individual,educational,
            industrial levels. Thousands of people keep loosing their life because of  COVID19. <br><br>
            Being Recognized as a communicable problem , The Inidan Government has imposed a complete lockdown of 21days at the initial stage.
            <br><br>
            Yet it has been a very tough step, it has been implemented to break the growing chain of COVID19<br>
            People all across the country are restricted to stay at the places where they are currently in.
            <br>
            Many working individuals, labour and students studying in some metro cities are stuck at the respective places due to the Lockdown
            imposed by the Government.
            <br><br>
            Our Aim is to help these people reach their destination during the hard time of COVID19 and during this lockdown time.
            <br>
            The individual just needs to fill a form describing his personal details and the reason for which he should be allowed to
            travel during the lockdown .
            Once we receive any new application , our team would validate the request and reason given for the same and would accept or reject
            the application accordingly.
            <br><br>
            Every individual is requested not to fill the form unless it's too necessary.
            <br>
            <div class="linkk" style="text-align: center">
            <a href="apply" style="text-decoration: none;
            font-size: 27px;
            color:black;
            font-weight: bold;
            ">Apply here</a>
        </div>
             </p>
    @endsection
