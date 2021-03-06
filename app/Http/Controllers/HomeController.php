<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Social;
use App\Media;
use App\Info;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::orderBy('order')->where('public', '=', 'yes')->get();
        foreach ($projects as $project) {
            $media = Media::where('id', '=', $project->media_id)->firstOrFail();
            $project['project_image'] = $media->media_name;
        }

        $socials = Social::where('social_link', '!=', '')->orderBy('order')->get();

        $infoFromDB = Info::all();
        $info = array();
        foreach($infoFromDB as $singleInfo){
        // foreach ($infoFromDB as $key => $value) {
            $info[$singleInfo->info_name] = $singleInfo->info_content;
        }
        return view('welcome', compact('projects', 'socials', 'info'));
    }
}
