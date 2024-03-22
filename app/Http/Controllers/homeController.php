<?php

namespace App\Http\Controllers;

use App\Models\skill;
use App\Models\education;
use App\Models\experience;
use App\Models\home;
use App\Models\service;
use App\Models\about;


use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {

        $home = home::all();
        $about = about::all();
        $skill = skill::all();
        $experience = experience::all();
        $service = service::all();
        $education = education::all();
       
        return view('landingpage.index',
    [
        'home' => $home,
        'about' => $about,
        'education' => $education,
        'skill' => $skill,
        'service' => $service,
        'experience' => $experience
        
    ]);
    }
}
