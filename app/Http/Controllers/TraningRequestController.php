<?php

namespace App\Http\Controllers;

use App\Models\TraningRequest;
use Illuminate\Http\Request;

class TraningRequestController extends Controller
{
    //
    function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'sector' => 'required|string',
            'message' => 'required|string',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'يجب أن يكون الاسم نصًا.',

            'type.required' => 'نوع التدريب مطلوب.',
            'type.string' => 'يجب أن يكون نوع التدريب نصًا.',

            'sector.required' => 'القطاع مطلوب.',
            'sector.string' => 'يجب أن يكون القطاع نصًا.',

            'message.required' => 'الرسالة مطلوبة.',
            'message.string' => 'يجب أن تكون الرسالة نصًا.',
        ]);

        TraningRequest::create($data);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح.');
    }
}
