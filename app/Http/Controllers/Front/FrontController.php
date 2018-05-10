<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Auth;
use Session;
use Mail;
use App\Question;
use App\Question_detail;
use App\Question_solution;
use App\User;
use App\Question_level;
use App\Question_tag;
use App\Coding_entry;
use App\Setting_info;
use App\Test_case;
use App\Coding_question_language;
use App\Questions_submission_resource;
use App\Allowed_language;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    { 
        return view('frontend.index');
    }
}
