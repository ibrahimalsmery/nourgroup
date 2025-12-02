<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    //
    function index()
    {
        $sectors = Sector::all();
        return view('private.sectors.index', compact('sectors'));
    }

    function create()
    {
        return view('private.sectors.create');
    }

    function edit(Sector $sector)
    {
        return view('private.sectors.create', compact('sector'));
    }

    function update(Request $request, Sector $sector)
    {
        $data = $request->validate(['name' => 'required|string'], ['name.required' => 'الاسم مطلوب.']);
        $sector->update($data);
        return redirect()->route('dashboard.sectors.index')->with('success', 'تم تعديل القطاع بنجاح');
    }

    function store(Request $request)
    {
        $data = $request->validate(['name' => 'required|string'], ['name.required' => 'الاسم مطلوب.']);
        Sector::create($data);
        return redirect()->route('dashboard.sectors.index')->with('success', 'تم انشاء القطاع بنجاح');
    }

    function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('dashboard.sectors.index')->with('success', 'تم حذف القطاع بنجاح');
    }
}
