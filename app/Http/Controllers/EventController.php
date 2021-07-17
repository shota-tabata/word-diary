<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Diary;

class EventController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()) {
            $data = DB::table('diarys')->select('title', 'date', 'word', 'other')->get();
            return response()->json($data);
        }
        return view('/event');
    }
}
