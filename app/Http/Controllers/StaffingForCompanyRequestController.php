<?php

namespace App\Http\Controllers;

use App\Models\StaffingForCompanyRequest;
use Illuminate\Http\Request;

class StaffingForCompanyRequestController extends Controller
{
    //
    function store(Request $request)
    {
        $data = $request->validate(
            [
                'company' => 'required|string',
                'general_manger' => 'required|string',
                'email' => 'required|string',
                'phone' => 'required|string',
                'sector' => 'required|string',
                'service_type' => 'required|string',
                'description' => 'nullable|string'
            ]
        );

        StaffingForCompanyRequest::create($data);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح.');
    }
}
