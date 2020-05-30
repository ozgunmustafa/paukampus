<?php

namespace App\Http\Controllers;

use App\Models\Lectures;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function showLectureNotes($slug){


        $lecture=Lectures::where('slug',$slug)->first();
        $notes=$lecture->notes;
        return view('notes',compact('lecture','notes'));

    }


}
