@extends('admin_2.layouts.app')

@section('title', 'Services Management')

@section('content')
<div class="flex items-center justify-between mb-6">
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Services</h1>
        <p class="text-gray-500 text-sm mt-1">Manage the services displayed on your website.</p>
    </div>
    <a href="{{ route('admin_2.services.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-sm transition-colors flex items-center gap-2">
        <i class="fas fa-plus"></i> Add New Service
    </a>
</div>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b border-gray-100 bg-gray-50 text-gray-500">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium">Title</th>
                    <th scope="col" class="px-6 py-4 font-medium">Description</th>
                    <th scope="col" class="px-6 py-4 font-medium">Image</th>
                    <th scope="col" class="px-6 py-4 font-medium">Status</th>
                    <th scope="col" class="px-6 py-4 font-medium text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700">
                @forelse($services as $service)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 font-medium text-gray-900">{{ $service->title }}</td>
                    <td class="px-6 py-4 text-gray-600 max-w-md whitespace-normal">
                        <div class="line-clamp-3 overflow-hidden text-sm [&>ul]:list-disc [&>ul]:pl-5 [&>ol]:list-decimal [&>ol]:pl-5">
                            {!! $service->description !!}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="h-10 w-10 object-cover rounded shadow-sm border border-gray-200 bg-white">
                        @else
                            <div class="h-10 w-10 flex items-center justify-center bg-gray-50 border border-gray-200 rounded text-gray-400">
                                <i class="fas fa-image"></i>
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if($service->is_active)
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Active
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                Inactive
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin_2.services.edit', $service) }}" class="text-blue-600 hover:text-blue-800 p-2 border border-blue-200 hover:bg-blue-50 bg-white rounded transition-colors" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin_2.services.destroy', $service) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
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
                            <i class="fas fa-inbox text-4xl mb-3 text-gray-300"></i>
                            <p>No services found.</p>
                            <a href="{{ route('admin_2.services.create') }}" class="text-blue-600 hover:underline mt-2">Create your first service</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($services->hasPages())
    <div class="px-6 py-4 border-t border-gray-100">
        {{ $services->links() }}
    </div>
    @endif
</div>
@endsection
