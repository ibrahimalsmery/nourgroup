<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::search(request('search'))->paginate(10);
        return view('private.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('private.contacts.show', compact('contact'));
    }

    public function mark_as_read(Contact $contact)
    {
        $contact->update(['is_read' => now()]);
        return redirect()->route('dashboard.contacts.show', $contact->id)->with('success', 'تم تحديد الرسالة كمقروءة.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('dashboard.contacts.index')->with('success', 'تم حذف الرسالة بنجاح.');
    }


    function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'message' => "required|string"
            ],
            [
                'name.required' => 'الاسم مطلوب.',
                'name.string' => 'الاسم يجب أن يكون نصاً.',
                'email.required' => 'البريد الإلكتروني مطلوب.',
                'email.email' => 'يجب إدخال بريد إلكتروني صحيح.',
                'phone.required' => 'رقم الهاتف مطلوب.',
                'phone.string' => 'رقم الهاتف يجب أن يكون نصياً.',
                'message.required' => 'الرسالة مطلوبة.',
                'message.string' => 'الرسالة يجب أن تكون نصاً.',
            ]
        );
        Contact::create($data);
        return back()->with('success', 'تم ارسال الرسالة بتجاح');
    }
}
