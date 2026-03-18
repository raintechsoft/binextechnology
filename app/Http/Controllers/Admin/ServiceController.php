<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin_2.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin_2.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|max:2048', // 2MB max
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if (!$image->isValid() || empty($image->getPathname())) {
                return back()->withInput()->withErrors(['image' => 'The uploaded file was invalid or could not be read.']);
            }
            
            $filename = \Illuminate\Support\Str::random(40) . '.' . $image->getClientOriginalExtension();
            \Illuminate\Support\Facades\Storage::disk('public')->put('services/' . $filename, file_get_contents($image->getPathname()));
            $validated['image'] = 'services/' . $filename;
        }

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');

        Service::create($validated);

        return redirect()->route('admin_2.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        return view('admin_2.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'image' => 'nullable|image|max:2048', // 2MB max
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            if (!$image->isValid() || empty($image->getPathname())) {
                return back()->withInput()->withErrors(['image' => 'The uploaded file was invalid or could not be read.']);
            }
            // Delete old image
            if ($service->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($service->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($service->image);
            }
            $filename = \Illuminate\Support\Str::random(40) . '.' . $image->getClientOriginalExtension();
            \Illuminate\Support\Facades\Storage::disk('public')->put('services/' . $filename, file_get_contents($image->getPathname()));
            $validated['image'] = 'services/' . $filename;
        }

        $validated['slug'] = Str::slug($validated['title']);
        $validated['is_active'] = $request->has('is_active');

        $service->update($validated);

        return redirect()->route('admin_2.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }
        $service->delete();
        return redirect()->route('admin_2.services.index')->with('success', 'Service deleted successfully.');
    }
}
