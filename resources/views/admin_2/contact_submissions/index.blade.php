@extends('admin_2.layouts.app')

@section('title', 'Contact Submissions')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Contacts / Social Media</h1>
        <p class="text-gray-500 text-sm mt-1">View contacts and social media submissions through the website.</p>
    </div>
    <a href="{{ route('admin_2.contact_submissions.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center gap-2">
        <i class="fas fa-plus"></i> Add New
    </a>
</div>

<div class="bg-gray-100 rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b border-gray-200 bg-gray-50 text-gray-500">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium">Email / Phone</th>
                    <th scope="col" class="px-6 py-4 font-medium">Social Links / MSG</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700">
                @forelse($submissions as $submission)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $submission->name }}</td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col text-sm">
                            <span class="text-blue-600"><i class="fas fa-envelope mr-1 text-gray-500"></i> <a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></span>
                            @if($submission->phone)
                            <span class="text-gray-600 mt-1"><i class="fas fa-phone mr-1 text-gray-500"></i> {{ $submission->phone }}</span>
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex flex-wrap gap-2 text-lg">
                            @if($submission->fb_url) <a href="{{ $submission->fb_url }}" target="_blank" class="text-blue-600 hover:text-blue-800"><i class="fab fa-facebook"></i></a> @endif
                            @if($submission->twitter_url) <a href="{{ $submission->twitter_url }}" target="_blank" class="text-sky-500 hover:text-sky-700"><i class="fab fa-twitter"></i></a> @endif
                            @if($submission->linkedin_url) <a href="{{ $submission->linkedin_url }}" target="_blank" class="text-blue-700 hover:text-blue-900"><i class="fab fa-linkedin"></i></a> @endif
                            @if($submission->instagram_url) <a href="{{ $submission->instagram_url }}" target="_blank" class="text-pink-600 hover:text-pink-800"><i class="fab fa-instagram"></i></a> @endif
                        </div>
                        @if($submission->message)
                        <p class="text-xs text-gray-500 mt-1 truncate max-w-xs" title="{{ $submission->message }}">{{ Str::limit($submission->message, 30) }}</p>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin_2.contact_submissions.edit', $submission) }}" class="text-blue-600 hover:text-blue-800 p-2 border border-blue-200 hover:bg-blue-50 bg-white rounded transition-colors" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin_2.contact_submissions.destroy', $submission) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 p-2 border border-red-200 hover:bg-red-50 bg-white rounded transition-colors" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-500">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-envelope-open-text text-4xl mb-3 text-gray-600"></i>
                            <p>No messages received yet.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($submissions->hasPages())
    <div class="px-6 py-4 border-t border-gray-200">
        {{ $submissions->links() }}
    </div>
    @endif
</div>
@endsection
