<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->get()->all();
        return view('components.pages.project', ['projects' => $projects]);
    }
}
