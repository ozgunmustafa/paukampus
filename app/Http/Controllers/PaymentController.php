<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payCost(Request $request){

//        if (empty())

        $request->session()->put('price', $request->notePrice);
        $request->session()->put('description', $request->noteDescription);
        $request->session()->put('noteId', $request->noteId);

        $note=Notes::find(session()->get('noteId'));
        return view('paycost',compact('note'));
//
//        dd($note);
//
//        dd(session()->get('noteId'));

    }
}
