<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Diary;

class EventController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()) {
            $data = DB::table('diarys')->select('title', 'start', 'word', 'other', 'file_name')->get();
            return response()->json($data);
        }
        return view('/calendar');
    }


public function store(Request $request) 
    {
        $diary = new Diary;
        
        $diary->title = $request->input('title');
        $diary->start = $request->input('start');
        $diary->word = $request->input('word');
        $diary->other = $request->input('other');
        $diary->file_name = $request->input('file_name');
        $diary->save();
        
        return redirect('/');
    }
    
}