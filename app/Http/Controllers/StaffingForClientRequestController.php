<?php

namespace App\Http\Controllers;

use App\Models\StaffingForClientRequest;
use Illuminate\Http\Request;

class StaffingForClientRequestController extends Controller
{
    //

    function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'sector' => 'required|string',
            'job_type' => 'required|string',
            'message' => 'required|string',
            'file' => 'required|file'
        ]);

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('staffing-requests-files', 'public');
        }

        StaffingForClientRequest::create($data);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح.');
    }
}
