@extends('admin_2.layouts.app')

@section('title', 'Edit Contact & Social Media')

@section('content')
<div class="mb-6 flex items-center justify-between">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Edit Contact & Social Media</h1>
        <p class="text-gray-500 text-sm mt-1">Update details for {{ $contactSubmission->name }}.</p>
    </div>
    <a href="{{ route('admin_2.contact_submissions.index') }}" class="text-gray-500 hover:text-gray-700 font-medium py-2 px-4 border border-gray-200 rounded-lg bg-white shadow-sm transition-colors flex items-center gap-2">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 max-w-3xl">
    <form action="{{ route('admin_2.contact_submissions.update', $contactSubmission) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-5">
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name*</label>
            <input type="text" id="name" name="name" value="{{ old('name', $contactSubmission->name) }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Mail ID (Email)*</label>
                <input type="email" id="email" name="email" value="{{ old('email', $contactSubmission->email) }}" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $contactSubmission->phone) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
                @error('phone')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <h3 class="text-lg font-medium text-gray-800 border-b border-gray-100 pb-2 mb-4 mt-8">Social Media Links</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
            <div>
                <label for="fb_url" class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-facebook text-blue-600 mr-1"></i> Facebook URL</label>
                <input type="url" id="fb_url" name="fb_url" value="{{ old('fb_url', $contactSubmission->fb_url) }}" placeholder="https://facebook.com/..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
                @error('fb_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="twitter_url" class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-twitter text-sky-500 mr-1"></i> Twitter URL</label>
                <input type="url" id="twitter_url" name="twitter_url" value="{{ old('twitter_url', $contactSubmission->twitter_url) }}" placeholder="https://twitter.com/..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
                @error('twitter_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="linkedin_url" class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-linkedin text-blue-700 mr-1"></i> LinkedIn URL</label>
                <input type="url" id="linkedin_url" name="linkedin_url" value="{{ old('linkedin_url', $contactSubmission->linkedin_url) }}" placeholder="https://linkedin.com/in/..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
                @error('linkedin_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="instagram_url" class="block text-sm font-medium text-gray-700 mb-1"><i class="fab fa-instagram text-pink-600 mr-1"></i> Instagram URL</label>
                <input type="url" id="instagram_url" name="instagram_url" value="{{ old('instagram_url', $contactSubmission->instagram_url) }}" placeholder="https://instagram.com/..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900 transition-colors">
                @error('instagram_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-gray-100 mt-8">
            <a href="{{ route('admin_2.contact_submissions.index') }}" class="px-5 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors">Cancel</a>
            <button type="submit" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium shadow-sm transition-colors cursor-pointer flex items-center gap-2">
                <i class="fas fa-save"></i> Update
            </button>
        </div>
    </form>
</div>
@endsection
