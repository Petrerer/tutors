<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{
    public function show($id){
        $tutor  = DB::table('tutors')->where('id', $id)->first();
        return view('show', ['tutor'=>$tutor]);
    }
}
