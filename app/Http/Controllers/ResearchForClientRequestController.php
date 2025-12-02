<?php

namespace App\Http\Controllers;

use App\Models\ResearchForClientRequest;
use Illuminate\Http\Request;

class ResearchForClientRequestController extends Controller
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

        ResearchForClientRequest::create($data);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح.');
    }
}
