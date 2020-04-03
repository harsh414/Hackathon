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
        <h3 style="color:black;font-weight: bold">
            Here is the list of all the applications...
        </h3>
        <table class="table table-striped">

            <tr>
                {{-- <th>S.no.</th> --}}
                <th>Reason</th>
                <th>Status</th>
                <th>Edit</th>


            </tr>
            @foreach ($posts as $post)
                <tr>
                    {{-- <td>{{}}</td> --}}
                    <td style="color:darkred;font-size: 16px;">{{$post->reason}}</td>
                    <th>
                        @if ($post->status=='Approved')
                            <p style="color:green">{{$post->status}}</p>
                        @elseif ($post->status=='Rejected')
                            <p style="color:red">{{$post->status}}</p>
                        @elseif ($post->status=='Pending')
                            <p style="color:darkred">{{$post->status}}</p>
                        @endif
                    </th>
                    <td><a href="/hackathonnn/public/edit/{{$post->id}}" class="btn btn-dark">Edit</a></td>
                </tr>
            @endforeach


        </table>
    </div>
@endsection
