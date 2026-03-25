<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactDetail;

class ContactDetailController extends Controller
{
    public function edit()
    {
        $contactDetail = ContactDetail::firstOrNew();
        return view('admin.contact_details.edit', compact('contactDetail'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string|max:50',
            'facebook' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
        ]);

        $contactDetail = ContactDetail::firstOrNew();
        $contactDetail->fill($validated);
        $contactDetail->save();

        return redirect()->route('admin.contact_details.edit')->with('success', 'Contact details updated successfully.');
    }
}
