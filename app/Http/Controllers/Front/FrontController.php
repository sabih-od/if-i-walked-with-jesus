<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home (Request $request)
    {
        return view('front.index');
    }

    public function about (Request $request)
    {
        return view('front.about');
    }

    public function dailyBibleStudyQuestions (Request $request)
    {
        return view('front.daily-bible-study-questions');
    }

    public function lessonsLearnnedOnDaddysLap (Request $request)
    {
        return view('front.lessons-learnned-on-daddys-lap');
    }

    public function outsideResources (Request $request)
    {
        return view('front.outside-resources');
    }
}
