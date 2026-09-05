<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProfileSetting;
use App\Models\Resume;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        $profile = ProfileSetting::first();

        $resume = Resume::latest()->first();

        return view(
            'home',
            compact(
                'projects',
                'profile',
                'resume'
            )
        );
    }
}
