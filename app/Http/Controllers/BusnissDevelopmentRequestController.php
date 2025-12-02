<?php

namespace App\Http\Controllers;

use App\Models\BusnissDevelopmentRequest;
use Illuminate\Http\Request;

class BusnissDevelopmentRequestController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'company' => 'required|string',
            'sector' => 'required|string',
            'service' => 'required|string',
            'message' => 'nullable|string',
        ], [
            'name.required' => 'الاسم مطلوب.',
            'name.string' => 'يجب أن يكون الاسم نصًا.',

            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.string' => 'يجب أن يكون البريد الإلكتروني نصًا.',

            'phone.required' => 'رقم الهاتف مطلوب.',
            'phone.string' => 'يجب أن يكون رقم الهاتف نصًا.',

            'org_name.required' => 'اسم المؤسسة مطلوب.',
            'org_name.string' => 'يجب أن يكون اسم المؤسسة نصًا.',

            'sector.required' => 'القطاع مطلوب.',
            'sector.string' => 'يجب أن يكون القطاع نصًا.',

            'service.required' => 'الخدمة مطلوبة.',
            'service.string' => 'يجب أن تكون الخدمة نصًا.',

            'message.string' => 'يجب أن تكون الرسالة نصًا.',
        ]);


        BusnissDevelopmentRequest::create($data);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح.');
    }
}
