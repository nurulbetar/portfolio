<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function projectDetails($id){
          return view('projectDetails', ['id'=>$id]);
}
} 
