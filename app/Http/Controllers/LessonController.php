<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonController extends Controller
{
    //
    public function index()
    {
        # code...

        $index = Lesson::all();

        return $index ;
    }
}
