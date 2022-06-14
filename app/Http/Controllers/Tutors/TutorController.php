<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{
    public function show($id){
        $tutor  = DB::table('tutors')->where('id', $id)->first(); // ->
        return view('tutors.show', ['tutor'=>$tutor]);
    }

    public function destroy($id){
        DB::table('tutors')->where('id', $id)->delete(); // ->destroy(id)
        return redirect()->route('tutors.list');
    }
}
