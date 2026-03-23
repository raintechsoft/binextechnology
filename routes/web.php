<?php

use App\Models\Client;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/clients', function () {
    $clients = Client::where('is_active', true)->get();
    return view('clients', compact('clients'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact-submit', function (Illuminate\Http\Request $request) {
    App\Models\ContactSubmission::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->comment,
    ]);
    return back()->with('success', 'Your message has been sent successfully!');
});

Route::post('/contact-message', function (Illuminate\Http\Request $request) {
    App\Models\ContactMessage::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->comment,
    ]);

    if ($request->ajax() || $request->wantsJson()) {
        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ]);
    }
    
    return back()->with('success', 'Your message has been sent successfully!');
});

Route::get('/services', function () {
    $services = Service::where('is_active', true)->get();
    return view('services', compact('services'));
});

Route::get('/services-details/{slug?}', function ($slug = null) {
    if ($slug) {
        $service = Service::where('slug', $slug)->where('is_active', true)->firstOrFail();
    } else {
        $service = Service::where('is_active', true)->first();
    }
    
    $allServices = Service::where('is_active', true)->get();
    
    return view('services-details', compact('service', 'allServices'));
});

Route::get('/about-us', function () {
    return view('about-us');
});
