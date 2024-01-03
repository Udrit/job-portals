<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function myProfile(Request $request)
    {
        $user=Auth::user();
        // dd($user);
        return view('employer.myProfile',compact('user'));
    }
    public function userProfile(Request $request)
    {
        $user=Auth::user();
        // dd($user);
        return view('user.myProfile',compact('user'));
    }
    public function viewJobDetail(Request $request)
    {
        $jobDetailData=Job
        return view('');
    }
}
