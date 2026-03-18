@extends('admin_2.layouts.app')

@section('title', 'Contact Submissions')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Messages</h1>
        <p class="text-gray-500 text-sm mt-1">View messages submitted through the website contact form.</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b border-gray-100 bg-gray-50 text-gray-500">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">Date</th>
                    <th scope="col" class="px-6 py-4 font-medium">Name</th>
                    <th scope="col" class="px-6 py-4 font-medium">Email / Phone</th>
                    <th scope="col" class="px-6 py-4 font-medium">Message snippet</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700">
                @forelse($submissions as $submission)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 text-gray-500 text-xs">
                        {{ $submission->created_at->format('M d, Y h:i A') }}
                    </td>
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $submission->name }}</td>
                    <td class="px-6 py-4">
                        <div class="flex flex-col text-sm">
                            <span class="text-blue-600"><i class="fas fa-envelope mr-1 text-gray-400"></i> <a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></span>
                            @if($submission->phone)
                            <span class="text-gray-600 mt-1"><i class="fas fa-phone mr-1 text-gray-400"></i> {{ $submission->phone }}</span>
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4 max-w-xs truncate text-gray-500 cursor-pointer" title="{{ $submission->message }}" onclick="alert('Full Message:\n\n' + this.getAttribute('title'))">
                        {{ Str::limit($submission->message, 50) }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <button type="button" class="text-blue-600 hover:text-blue-800 p-2 border border-blue-200 hover:bg-blue-50 bg-white rounded transition-colors" title="View Full Message" onclick="alert('From: {{ $submission->name }}\nEmail: {{ $submission->email }}\nPhone: {{ $submission->phone }}\nDate: {{ $submission->created_at->format('M d, Y h:i A') }}\n\nMessage:\n{{ addslashes($submission->message) }}')">
                                <i class="fas fa-eye"></i>
                            </button>
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
                    <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-envelope-open-text text-4xl mb-3 text-gray-300"></i>
                            <p>No messages received yet.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($submissions->hasPages())
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $submissions->links() }}
    </div>
    @endif
</div>
@endsection
