<?php

namespace App\Http\Controllers\Tutors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Services\Tutors\TutorsService;

use DB;

class TutorsController extends Controller
{

    public TutorsService $tutorsService;

    public function __construct(TutorsService $tutorsService)
    {
        $this->tutorsService = $tutorsService;
    }
    
    public function list()
    {
        $tutors=DB::select('select * from tutors');
        return view('tutors/list', ["tutors"=>$tutors]);
    }
}
 