<?php

namespace App\Http\Controllers;

use App\Models\ResearchForCompanyRequest;
use Illuminate\Http\Request;

class ResearchForCompanyRequestController extends Controller
{
    //
    function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|string',
                'phone' => 'required|string',
                'type' => 'required|string',
                'message' => 'nullable|string',
            ]
        );

        ResearchForCompanyRequest::create($data);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح.');
    }
}
