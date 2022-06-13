<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class TutorsController extends Controller
{
    public function list()
    {
        $tutors=DB::select('select * from tutors');
        return view("list", ["tutors"=>$tutors]);
    }
}
 