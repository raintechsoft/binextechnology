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
        return view('admin.contact_submissions.index', compact('submissions'));
    }

    public function destroy(ContactSubmission $contactSubmission)
    {
        $contactSubmission->delete();
        
        return redirect()->route('admin.contact_submissions.index')
            ->with('success', 'Message deleted successfully.');
    }
}
