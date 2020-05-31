<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use App\Models\Lectures;
use App\Models\Notes;
use App\Models\Teachers;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function createNoteView()
    {
        $faculties = Faculty::all();
        $departments = Department::all();
        $lectures = Lectures::all();
        $teachers = Teachers::all();
        return view('create-note', compact('faculties', 'departments', 'lectures', 'teachers'));
    }

    public function createNote(Request $request)
    {
        try {
            $note = Notes::create([
                'title'       => $request->noteTitle,
                'description' => $request->noteDescription,
                'price'       => $request->notePrice,
                'teacher_id'  => $request->teacher_id,
                'lecture_id'  => $request->lecture_id,
                'user_id'     => $request->user_id,
                'department_id'     => $request->department_id,
            ]);
        } catch (\Exception $e) {
            dd($e);
        }

//
//
//        dd($request->all());
//        if ($request->hasFile('noteFile')) {
//            $this->validate($request, [
//                'note_file' => 'image|mimes:pdf|max:4096'
//            ]);
//            $note_file = $request->file('noteFile');
//            $note_file->getClientOriginalName();
//            $note_file->hashName();
//        }
    }
}
