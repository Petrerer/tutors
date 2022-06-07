<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Services\Tutors\TutorsService;


class TutorsController extends Controller
{
    public function list()
    {
        $tutors=DB::select('select * from tutors');
        return view("list", ["tutors"=>$tutors]);
    }
}
