@extends('admin_2.layouts.app')

@section('title', 'Clients Management')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-100">Clients</h1>
        <p class="text-gray-400 text-sm mt-1">Manage the clients displayed on your website.</p>
    </div>
    <a href="{{ route('admin_2.clients.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center gap-2">
        <i class="fas fa-plus"></i> Add New Client
    </a>
</div>

<div class="bg-gray-800 rounded-xl shadow-sm border border-gray-700 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b border-gray-700 bg-gray-900 text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">Image</th>
                    <th scope="col" class="px-6 py-4 font-medium">Client Name</th>
                    <th scope="col" class="px-6 py-4 font-medium">Status</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-200">
                @forelse($clients as $client)
                <tr class="hover:bg-gray-900 transition-colors">
                    <td class="px-6 py-4">
                        @if($client->logo)
                            <img src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}" class="h-10 w-auto object-contain bg-gray-100 rounded border border-gray-700 p-1">
                        @else
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-700 flex items-center justify-center text-gray-400">
                                <i class="fas fa-image"></i>
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-medium text-white">{{ $client->name }}</td>
                    <td class="px-6 py-4">
                        @if($client->is_active)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-100">
                                Inactive
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin_2.clients.edit', $client) }}" class="text-blue-600 hover:text-blue-800 p-2 border border-blue-200 hover:bg-blue-50 bg-gray-800 rounded transition-colors" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin_2.clients.destroy', $client) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this client?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 p-2 border border-red-200 hover:bg-red-50 bg-gray-800 rounded transition-colors" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-8 text-center text-gray-400">
                        <div class="flex flex-col items-center">
                            <i class="fas fa-users text-4xl mb-3 text-gray-300"></i>
                            <p>No clients found.</p>
                            <a href="{{ route('admin_2.clients.create') }}" class="text-blue-600 hover:underline mt-2">Add your first client</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($clients->hasPages())
    <div class="px-6 py-4 border-t border-gray-700">
        {{ $clients->links() }}
    </div>
    @endif
</div>
@endsection
