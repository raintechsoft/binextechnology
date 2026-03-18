<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::latest()->paginate(10);
        return view('admin_2.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin_2.clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|max:2048', // 2MB max
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            if ($logo->getError() !== UPLOAD_ERR_OK || empty($logo->getPathname())) {
                return back()->withInput()->withErrors(['logo' => 'The uploaded file was invalid or could not be read (code: ' . $logo->getError() . ').']);
            }
            
            $filename = \Illuminate\Support\Str::random(40) . '.' . $logo->getClientOriginalExtension();
            Storage::disk('public')->put('clients/' . $filename, file_get_contents($logo->getPathname()));
            $validated['logo'] = 'clients/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');

        Client::create($validated);

        return redirect()->route('admin_2.clients.index')->with('success', 'Client added successfully.');
    }

    public function edit(Client $client)
    {
        return view('admin_2.clients.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048', // optional on update
            'is_active' => 'boolean',
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            if ($logo->getError() !== UPLOAD_ERR_OK || empty($logo->getPathname())) {
                return back()->withInput()->withErrors(['logo' => 'The uploaded file was invalid or could not be read (code: ' . $logo->getError() . ').']);
            }
            
            // Delete old logo
            if ($client->logo && Storage::disk('public')->exists($client->logo)) {
                Storage::disk('public')->delete($client->logo);
            }
            
            $filename = \Illuminate\Support\Str::random(40) . '.' . $logo->getClientOriginalExtension();
            Storage::disk('public')->put('clients/' . $filename, file_get_contents($logo->getPathname()));
            $validated['logo'] = 'clients/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');

        $client->update($validated);

        return redirect()->route('admin_2.clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Client $client)
    {
        if ($client->logo && Storage::disk('public')->exists($client->logo)) {
            Storage::disk('public')->delete($client->logo);
        }
        
        $client->delete();
        
        return redirect()->route('admin_2.clients.index')->with('success', 'Client deleted successfully.');
    }
}
