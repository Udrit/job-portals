<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function newJob(Request $request)
    {
        return view('employer.Job.newJob');
    }
    public function newJobStore(Request $request)
    {
        $job=new Job();
        $job->company_id=Auth::user()->id;
        $job->title=$request->title;
        $job->desc=$request->desc;
        $job->experience=$request->experience;
        $job->location=$request->address;
        $job->contact=$request->contact;
        $job->salary=$request->salary;
        $job->job_type=$request->jobType;
        $job->deadline=$request->deadline;
        $job->save();
        return back()->with('jobPosted','Job Added Successfully');

    }
    public function viewJobs(Request $request)
    {
        $Id=Auth::user()->id;
        $jobs=Job::where('company_id',$Id)->get();
        // dd($jobs);
        return view('employer.Job.view',compact('jobs'));
    }
    public function jobEdit(Request $request)
    {
        $jobData=Job::find($request->id);
        // dd($jobData);
        return view('employer.Job.edit',compact('jobData'));
    }
    public function jobUpdate(Request $request)
    {
        $updatedData=Job::find($request->id);
        $updatedData->title=$request->title;
        $updatedData->desc=$request->desc;
        $updatedData->experience=$request->experience;
        $updatedData->location=$request->address;
        $updatedData->contact=$request->contact;
        $updatedData->salary=$request->salary;
        $updatedData->job_type=$request->jobType;
        $updatedData->deadline=$request->deadline;
        $updatedData->save();
        return redirect()->route('admin.viewJobs')->with('updatedJob','Job Updated Successfully');
        // dd($updatedData);
    }
    public function userViewJobs(Request $request)
    {
        $jobs=Job::all();
        return view('user.viewJobs',compact('jobs'));
    }
    public function applyJob(Request $request)
    {
        $rules=$request->validate([
            'coverLetter'=>'required|mimes:pdf'
        ]);

        
        $mediaType=new Media();
        $coverLetter = time().'.'.$rules['coverLetter']->extension();  

        $request->coverLetter->move(public_path('uploads'), $coverLetter);
        $mediaType->cover_letter=$coverLetter;
        $mediaType->save();
    }
}
