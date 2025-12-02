<?php

namespace App\Http\Controllers;

use App\Models\JobAdvertisement;
use Illuminate\Http\Request;

class JobAdvertisementController extends Controller
{
    //

    function index()
    {
        $jobs = JobAdvertisement::search(request('search'))->paginate(10);
        return view('private.jobs.index', compact('jobs'));
    }

    function create()
    {
        return view('private.jobs.create');
    }

    function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'url' => 'required|string',
        ], [
            'title.required' => 'العنوان مطلوب.',
            'url.required' => 'الرابط مطلوب.',
        ]);

        JobAdvertisement::create($data);

        return redirect()->route('dashboard.jobs.index')->with('success', 'تم حفظ الاعلان بنجاح.');
    }

    function edit(JobAdvertisement $job)
    {
        return view('private.jobs.create', compact('job'));
    }

    function update(Request $request, JobAdvertisement $job)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'url' => 'required|string',
        ], [
            'title.required' => 'العنوان مطلوب.',
            'url.required' => 'الرابط مطلوب.',
        ]);

        $job->update($data);

        return redirect()->route('dashboard.jobs.index')->with('success', 'تم حفظ الاعلان بنجاح.');
    }

    function destroy(JobAdvertisement $job)
    {
        $job->delete();
        return redirect()->route('dashboard.jobs.index')->with('success', 'تم الحذف بنجاح.');
    }

    function toggle_active(JobAdvertisement $job)
    {
        if ($job->actived_at) {
            $job->actived_at = null;
        } else {
            $job->actived_at = now();
        }
        $job->save();

        return redirect()->route('dashboard.jobs.index')->with('success', 'تم  بنجاح.');
    }

    function jobs()
    {
        $title = 'اعلانات الوظائف';
        $jobs = JobAdvertisement::search(request('search'))->paginate(10);
        return view('jobs', compact('title','jobs'));
    }
}
