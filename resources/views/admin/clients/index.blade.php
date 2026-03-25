@extends('admin.layouts.app')

@section('title', 'Clients Management')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Clients</h1>
        <p class="text-slate-400 text-sm mt-2 max-w-2xl">Manage the client portfolio logos configured on your website.</p>
    </div>
    <a href="{{ route('admin.clients.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2.5 px-5 rounded-xl shadow-lg shadow-blue-500/20 transition-all flex items-center gap-2 hover:-translate-y-0.5">
        <i class="fas fa-plus"></i> Add New Client
    </a>
</div>

<div class="bg-slate-900 rounded-2xl shadow-xl shadow-black/20 border border-slate-800 overflow-hidden relative">
    <div class="absolute top-0 right-0 w-64 h-64 bg-indigo-500/5 rounded-full blur-3xl pointer-events-none"></div>
    
    <div class="overflow-x-auto relative z-10 w-full">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b border-slate-800 bg-slate-900/80 backdrop-blur text-slate-400 text-xs font-bold">
                <tr>
                    <th scope="col" class="px-6 py-5">Image</th>
                    <th scope="col" class="px-6 py-5">Name</th>
                    <th scope="col" class="px-6 py-5">Status</th>
                    <th scope="col" class="px-6 py-5 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/60 text-slate-300">
                @forelse($clients as $client)
                <tr class="hover:bg-slate-800/30 transition-colors group">
                    <td class="px-6 py-4">
                        @if($client->logo)
                            <div class="bg-white p-1.5 rounded-lg border border-slate-700 shadow-inner w-14 flex justify-center backdrop-blur-sm">
                                <img src="{{ Storage::url($client->logo) }}" alt="{{ $client->name }}" class="h-8 w-auto object-contain">
                            </div>
                        @else
                            <div class="h-11 w-11 bg-slate-800 rounded-lg border border-slate-700 flex items-center justify-center text-slate-500">
                                <i class="fas fa-image"></i>
                            </div>
                        @endif
                    </td>
                    <td class="px-6 py-4 font-semibold text-white">{{ $client->name }}</td>
                    <td class="px-6 py-4">
                        @if($client->is_active)
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
                        <div class="flex justify-end gap-2 opacity-100 md:opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('admin.clients.edit', $client) }}" class="text-blue-400 hover:text-white p-2 border border-slate-700 hover:border-blue-500/50 hover:bg-blue-500/20 bg-slate-800/50 rounded-lg transition-all" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.clients.destroy', $client) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this client?');">
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
                                <i class="fas fa-users text-2xl text-slate-600"></i>
                            </div>
                            <p class="font-medium text-lg text-slate-400">No clients found.</p>
                            <p class="text-sm mt-1 mb-4">You have not added any clients to your portfolio yet.</p>
                            <a href="{{ route('admin.clients.create') }}" class="text-blue-400 hover:text-blue-300 font-medium hover:underline flex items-center gap-1"><i class="fas fa-plus text-xs"></i> Add Client</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($clients->hasPages())
    <div class="px-6 py-4 border-t border-slate-800/60 bg-slate-900/50">
        {{ $clients->links() }}
    </div>
    @endif
</div>
@endsection
