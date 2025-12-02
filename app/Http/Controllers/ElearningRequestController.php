<?php

namespace App\Http\Controllers;

use App\Models\ElearningRequest;
use Illuminate\Http\Request;

class ElearningRequestController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|string',
                'phone' => 'required|string',
                'company' => 'required|string',
                'interest' => 'required|string',
                'message' => 'nullable|string',
            ]
        );

        ElearningRequest::create($data);

        return redirect()->back()->with('success','تم ارسال الطلب بنجاح.');
    }
}
