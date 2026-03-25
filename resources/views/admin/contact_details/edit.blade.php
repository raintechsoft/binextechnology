@extends('admin.layouts.app')

@section('title', 'Manage Contact Details')

@section('content')
<div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
    <div>
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Contact Details</h1>
        <p class="text-slate-400 text-sm mt-2">Update website contact information and social media links.</p>
    </div>
</div>

<div class="bg-slate-900 rounded-2xl shadow-xl shadow-black/20 border border-slate-800 p-6 md:p-8 max-w-3xl relative overflow-hidden">
    <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/5 rounded-full blur-3xl pointer-events-none"></div>
    
    <form action="{{ route('admin.contact_details.update') }}" method="POST" class="relative z-10">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="name" class="block text-sm font-semibold text-slate-300 mb-2">Company / Display Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contactDetail->name) }}"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-500">
            @error('name')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block text-sm font-semibold text-slate-300 mb-2">Email Address</label>
            <input type="email" id="email" name="email" value="{{ old('email', $contactDetail->email) }}"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-500">
            @error('email')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="phone_number" class="block text-sm font-semibold text-slate-300 mb-2">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $contactDetail->phone_number) }}"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-500">
            @error('phone_number')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <label for="address" class="block text-sm font-semibold text-slate-300 mb-2">Address</label>
            <textarea id="address" name="address" rows="3"
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-500">{{ old('address', $contactDetail->address) }}</textarea>
            @error('address')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-3 mb-6 border-b border-slate-700/50 pb-3 mt-10">
            <div class="w-8 h-8 rounded-lg bg-indigo-500/20 flex items-center justify-center text-indigo-400">
                <i class="fas fa-globe"></i>
            </div>
            <h3 class="text-lg font-bold text-white tracking-wide">Social Media Links</h3>
        </div>

        <div class="mb-6 group">
            <label for="facebook" class="block text-sm font-semibold text-slate-300 mb-2 flex items-center gap-2"><i class="fab fa-facebook text-blue-500 text-lg"></i> Facebook URL</label>
            <input type="url" id="facebook" name="facebook" value="{{ old('facebook', $contactDetail->facebook) }}" placeholder="https://facebook.com/..."
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-600 group-hover:border-slate-600">
            @error('facebook')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 group">
            <label for="linkedin" class="block text-sm font-semibold text-slate-300 mb-2 flex items-center gap-2"><i class="fab fa-linkedin text-blue-400 text-lg"></i> LinkedIn URL</label>
            <input type="url" id="linkedin" name="linkedin" value="{{ old('linkedin', $contactDetail->linkedin) }}" placeholder="https://linkedin.com/in/..."
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-600 group-hover:border-slate-600">
            @error('linkedin')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6 group">
            <label for="twitter" class="block text-sm font-semibold text-slate-300 mb-2 flex items-center gap-2"><i class="fab fa-twitter text-sky-400 text-lg"></i> Twitter / X URL</label>
            <input type="url" id="twitter" name="twitter" value="{{ old('twitter', $contactDetail->twitter) }}" placeholder="https://twitter.com/..."
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-600 group-hover:border-slate-600">
            @error('twitter')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8 group">
            <label for="instagram" class="block text-sm font-semibold text-slate-300 mb-2 flex items-center gap-2"><i class="fab fa-instagram text-pink-500 text-lg"></i> Instagram URL</label>
            <input type="url" id="instagram" name="instagram" value="{{ old('instagram', $contactDetail->instagram) }}" placeholder="https://instagram.com/..."
                class="w-full px-4 py-3 bg-slate-800/50 border border-slate-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 text-white transition-all placeholder-slate-600 group-hover:border-slate-600">
            @error('instagram')
                <p class="text-rose-400 text-xs mt-2 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end gap-3 pt-6 border-t border-slate-800">
            <button type="submit" class="px-6 py-3 bg-blue-600 hover:bg-blue-500 text-white rounded-xl font-bold shadow-lg shadow-blue-500/20 transition-all cursor-pointer flex items-center gap-2 hover:-translate-y-0.5">
                <i class="fas fa-save"></i> Save Details
            </button>
        </div>
    </form>
</div>
@endsection
