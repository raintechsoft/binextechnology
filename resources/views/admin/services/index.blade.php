@extends('admin.layouts.app')

@section('title', 'Services Management')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Services</h1>
        <p class="text-slate-400 text-sm mt-2 max-w-2xl">Manage the key services displayed on your website's public portfolio.</p>
    </div>
    <a href="{{ route('admin.services.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2.5 px-5 rounded-xl shadow-lg shadow-blue-500/20 transition-all flex items-center gap-2 hover:-translate-y-0.5">
        <i class="fas fa-plus"></i> Add New Service
    </a>
</div>

<div class="bg-slate-900 rounded-2xl shadow-xl shadow-black/20 border border-slate-800 overflow-hidden relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/5 rounded-full blur-3xl pointer-events-none"></div>
    
    <div class="overflow-x-auto relative z-10 w-full">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b border-slate-800 bg-slate-900/80 backdrop-blur text-slate-400 text-xs font-bold">
                <tr>
                    <th scope="col" class="px-6 py-5">Title</th>
                    <th scope="col" class="px-6 py-5">Image</th>
                    <th scope="col" class="px-6 py-5">Status</th>
                    <th scope="col" class="px-6 py-5 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/60 text-slate-300">
                @forelse($services as $service)
                <tr class="hover:bg-slate-800/30 transition-colors group">
                    <td class="px-6 py-4 font-semibold text-white">{{ $service->title }}</td>
                    <td class="px-6 py-4">
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="h-10 w-10 object-cover rounded-lg shadow-sm border border-slate-700 bg-slate-800">
                        @else
                            <div class="h-10 w-10 flex items-center justify-center bg-slate-800 border border-slate-700 rounded-lg text-slate-500">
                                <i class="fas fa-image"></i>
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if($service->is_active)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 shadow-sm shadow-emerald-500/5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span> Active
                            </span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-slate-500/10 text-slate-400 border border-slate-500/20">
                                Inactive
                            </span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.services.edit', $service) }}" class="text-blue-400 hover:text-white p-2 border border-slate-700 hover:border-blue-500/50 hover:bg-blue-500/20 bg-slate-800/50 rounded-lg transition-all" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-400 hover:text-white p-2 border border-slate-700 hover:border-rose-500/50 hover:bg-rose-500/20 bg-slate-800/50 rounded-lg transition-all" title="Delete">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-12 text-center text-slate-500 bg-slate-900/30">
                        <div class="flex flex-col items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-slate-800 flex items-center justify-center mb-4">
                                <i class="fas fa-cube text-2xl text-slate-600"></i>
                            </div>
                            <p class="font-medium text-lg text-slate-400">No services found.</p>
                            <p class="text-sm mt-1 mb-4">Start organizing your portfolio by adding your first service.</p>
                            <a href="{{ route('admin.services.create') }}" class="text-blue-400 hover:text-blue-300 font-medium hover:underline flex items-center gap-1"><i class="fas fa-plus text-xs"></i> Create Service</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($services->hasPages())
    <div class="px-6 py-4 border-t border-slate-800/60 bg-slate-900/50">
        {{ $services->links() }}
    </div>
    @endif
</div>
@endsection
