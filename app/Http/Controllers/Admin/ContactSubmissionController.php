<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;

class ContactSubmissionController extends Controller
{
    public function index()
    {
        $submissions = ContactSubmission::latest()->paginate(15);
        return view('admin_2.contact_submissions.index', compact('submissions'));
    }

    public function create()
    {
        return view('admin_2.contact_submissions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'fb_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
        ]);

        ContactSubmission::create($validated);

        return redirect()->route('admin_2.contact_submissions.index')
            ->with('success', 'Contact successfully added.');
    }

    public function edit(ContactSubmission $contactSubmission)
    {
        return view('admin_2.contact_submissions.edit', compact('contactSubmission'));
    }

    public function update(Request $request, ContactSubmission $contactSubmission)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'fb_url' => 'nullable|url|max:255',
            'twitter_url' => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'instagram_url' => 'nullable|url|max:255',
        ]);

        $contactSubmission->update($validated);

        return redirect()->route('admin_2.contact_submissions.index')
            ->with('success', 'Contact successfully updated.');
    }

    public function destroy(ContactSubmission $contactSubmission)
    {
        $contactSubmission->delete();
        
        return redirect()->route('admin_2.contact_submissions.index')
            ->with('success', 'Message deleted successfully.');
    }
}
