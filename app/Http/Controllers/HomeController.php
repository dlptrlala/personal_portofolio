<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProfileSetting;

class HomeController extends Controller
{
public function index()
    {
        $projects = Project::latest()->get();

        $profile = ProfileSetting::first();

        return view(
            'home',
            compact('projects', 'profile')
        );
    }
}
