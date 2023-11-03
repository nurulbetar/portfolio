<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function projects(){
        $data= json_decode(file_get_contents(storage_path('data/projects.json')),true);
       
        return view("projects")->with('data', $data);
    }
}
