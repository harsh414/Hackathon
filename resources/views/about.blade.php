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
    <h1 style="
    text-align: center;
    padding-top: 1rem;
    letter-spacing: 3px;
    font-family: 'Book Antiqua';
">What Actually is Covid-19</h1>

        <p style="
                padding-top: 2rem;
                font-family: 'Berlin Sans FB';
                font-size: 20px;
                letter-spacing: 1px;
                padding-left: 10px;
                color: #003366;
            ">

            COVID-19 (coronavirus disease 2019) is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2),
            previously known as 2019 novel coronavirus (2019-nCoV), a strain of coronavirus.
            The first cases were seen in Wuhan, China, in December 2019 before spreading globally
            . The current outbreak was recognized as a pandemic on 11 March 2020.
            <br><br>
            As of 2 April 2020, over 955,000 cases of COVID-19 have been confirmed worldwide, having been diagnosed in 180 territories.
            <br><br>
            The number of deaths from COVID-19 is over 33,500 (29 March), with a case fatality rate of 2-3%.
            Although originating from animals, COVID-19 is not considered a direct zoonosis as its transmission is now primarily human-to-human.
            It is primarily transmitted in a similar way to the common cold, via contact with droplets of infected individuals' upper respiratory tract secretions,
            e.g. from sneezing or coughing.
            <br><br>
        </p>
            <h2 style="font-family: Redressed;letter-spacing: 1px;color: black">Treatment</h2>
        <p style="
                padding-top: 2rem;
                font-family: 'Berlin Sans FB';
                font-size: 20px;
                letter-spacing: 1px;
                padding-left: 25px;
                color: #003366;
            ">
            No specific treatment or vaccine exists for COVID-19 (March 2020).
            Therefore resources have been concentrated on public health measures to prevent further interhuman transmission of the virus.
            This has required a multipronged approach and for individuals includes meticulous personal hygiene,
            the avoidance of large crowds/crowded environments and where necessary, self-isolation.
     </p>
    </div>
    @endsection
