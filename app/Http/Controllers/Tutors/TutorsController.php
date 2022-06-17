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
    
    public function list(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $phone_number = $request->get('phone_number');
        $subject = $request->get('subject');
        $rating = $request->get('rating');
        $education = $request->get('education');
        $experience = $request->get('experience');
        $tutors= $this->tutorsService->list($name,$email,$phone_number,$subject,$rating,$education,$experience);
        return view('tutors/list', ["tutors"=>$tutors]);
    }
}
 