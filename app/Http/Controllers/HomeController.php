<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $header_data= json_decode(file_get_contents(storage_path('data/header.json')),true);
        $education_data= json_decode(file_get_contents(storage_path('data/education.json')),true);
        $about_data= json_decode(file_get_contents(storage_path('data/aboutme.json')),true);

        return view('index')
            ->with('header_data', $header_data)
             ->with('education_data', $education_data)
             ->with('aboutme', $about_data);
    }
}
