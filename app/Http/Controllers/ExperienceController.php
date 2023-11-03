<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ExperienceController extends Controller
{
    public function experience(){
        $experiencedata =json_decode(file_get_contents(storage_path('data/experience.json')), true);
        $data =json_decode(file_get_contents(storage_path('data/skills.json')), true);
        $skills=$data['skills'];
    
        return view("experience")->with("expeience", $experiencedata)->with('skills', $skills);
    }
}
