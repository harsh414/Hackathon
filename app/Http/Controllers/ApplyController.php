<?php

namespace App\Http\Controllers;

use App\application;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ApplyController extends Controller
{
    public function index()
    {
        $user=Auth::user();
        return view('main.apply')->with('user',$user);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'reason'=>'required',
            'from'=>'required',
            'to'=>'required',
            'duration'=>'required',
            // 'proof'=>'required',
        ]);
        $entry=new application;
        $entry->email=Auth::user()->email;
        $entry->reason=$request->input('reason');
        $entry->from=$request->input('from');
        $entry->to=$request->input('to');
        $entry->duration=$request->input('duration');
        $entry->expire=now()->addHour($request->input('duration'));
        $entry->status='Pending';
        $entry->user_id=Auth::user()->id;
        //upload file
        if($request->hasFile('proof'))
        {
            $filenameext=$request->file('proof')->getClientOriginalName();

            $name=pathinfo($filenameext,PATHINFO_FILENAME);

            $ext=$request->file('proof')->getClientOriginalExtension();

            $filenametostore=Auth::user()->id.'.'.$ext;

            $path=$request->file('proof')->storeAs('public/proofs',$filenametostore);

            $entry->proof=$filenametostore;
        }

        $data=array(
            'name'=>$request->input('name'),
            'reason'=>$request->input('reason'),
            'from'=>$request->input('from'),
            'to'=>$request->input('to'),
            'duration'=>$request->input('duration'),
            'email'=>$request->input('email'),
        );

        if($entry->save())
        {
            $user=Auth::user();
            $user->no_of_applications=$user->no_of_applications+1;
            $user->save();

            Mail::to('testingapp6655@gmail.com')->send(new SendMail($data));

            return redirect('/home')->with('success','Form Submitted Successfully');
        }
        else
            return redirect('/apply')->with('error','Some Error Occured!');
    }
}

