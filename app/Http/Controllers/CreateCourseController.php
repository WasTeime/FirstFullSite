<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateCourseController extends Controller
{
    public function index() {
        return view('createCourse');
    }
    public function createCourse(Request $request) {
        $data = $request->all();
        //будем хранить в бд полный путь до фото
        $out['course_image'] = Storage::put('/images', $data['course_image']);
    }
}
