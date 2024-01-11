<?php

namespace App\Http\Controllers;

use App\Models\ResumeDetail;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function frontend(){
        $settings=Setting::withoutTrashed()->first();
        $skills=Skill::withoutTrashed()->get();
        $resumeDetails=ResumeDetail::withoutTrashed()->get();
        return view('frontend.index')
            ->with('settings',$settings)
            ->with('skills',$skills)
            ->with('resumeDetails',$resumeDetails)
            ;
    }
}
