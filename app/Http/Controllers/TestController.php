<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $students = json_decode(file_get_contents(storage_path() . "/students.json"), true);

        return $students;

        // echo "<pre>";
        // print_r($students);
    }
}
