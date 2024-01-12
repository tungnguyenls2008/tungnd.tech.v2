<?php

namespace App\Http\Controllers;

use App\GPT\Chats\GeneralChat\GeneralChatGPTChat;
use App\Models\Portfolio;
use App\Models\ResumeDetail;
use App\Models\Setting;
use App\Models\Skill;
use App\Services\OpenAIService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $openAIService;
    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }
    public function frontend(){
        $settings=Setting::withoutTrashed()->first();
        $skills=Skill::withoutTrashed()->get();
        $resumeDetails=ResumeDetail::withoutTrashed()->get();
        $portfolios=Portfolio::all();
        return view('frontend.index')
            ->with('settings',$settings)
            ->with('skills',$skills)
            ->with('resumeDetails',$resumeDetails)
            ->with('portfolios',$portfolios)
            ;
    }
    public function portfolioDetail($id){
        $settings=Setting::withoutTrashed()->first();
        return view('frontend.portfolio-details')->with('settings',$settings);
    }
    public function chat(Request $request){
        $message=$request->get('message');
        return $this->openAIService->generateResponse($message);
    }
}
