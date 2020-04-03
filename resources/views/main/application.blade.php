@extends('layouts.app')
@section('style')
    <style>
        body {
            background-image: url("images/bghackathon.jpg");
        }
    </style>
    @endsection
@section('content')
    <div class="container" style="margin-top: 4.2rem;">
        <h3 style="box-shadow: 2px 2px 4px grey;text-align: center">Here you Can Manage Your Applications.</h3>
        @if ($user->no_of_applications==0)
            No Applications Found. <br>
            <a href="/apply" class="btn btn-outline-success">Click Here TO Apply</a>
        @else
            <table style="width:100%; margin-top: 1rem;">
                <tr style>
                    <th style="text-align:center;font-size: 20px;">To</th>
                    <th style="text-align:center;font-size: 20px;">status</th>
                    {{-- <th style="text-align:center">EDIT</th> --}}
                </tr>
               <tr>
                   <td><hr></td>
                   <td><hr></td>
                   {{-- <td><hr></td> --}}
               </tr>
                @foreach($user->applications as $application)
                    <tr>
                        <th style="text-align:center;font-size: 14px;">{{$application->to}}</th>
                        <th style="text-align:center">
                            @if ($application->status=='Pending')
                                <p style="color:darkred;font-size: 22px;" class="well">{{$application->status}}</p>
                            @elseif ($application->status=='Not Approved')
                            <p style="color:yellow;font-size: 22px;" class="well">{{$application->status}}</p>
                            @elseif ($application->status=='Approved')
                            <p style="color:green" class="well">{{$application->status}}</p>
                            @endif


                        </th>
                        {{-- <th style="text-align:center"><a href="" class="btn btn-danger">DELETE</a></th> --}}
                    </tr>
                @endforeach
            </table>
        @endif

    </div>

@endsection
