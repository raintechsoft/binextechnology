@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="mb-8">
    <h1 class="text-3xl font-extrabold text-white tracking-tight">Dashboard Overview</h1>
    <p class="text-slate-400 mt-2 text-sm max-w-2xl">Monitor your application's vital statistics and manage core modules effectively from your central command center.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-8">
    <!-- Stat Card 1 -->
    <div class="relative overflow-hidden bg-slate-900 border border-slate-800 shadow-xl shadow-black/20 rounded-2xl p-6 group hover:border-blue-500/30 transition-all duration-300">
        <div class="absolute -right-6 -top-6 w-24 h-24 bg-blue-500/10 rounded-full blur-2xl group-hover:bg-blue-500/20 transition-all duration-500"></div>
        <div class="flex items-center justify-between mb-4 relative z-10">
            <h3 class="text-slate-400 font-medium text-sm tracking-wide uppercase">Active Services</h3>
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500/20 to-blue-600/10 flex items-center justify-center text-blue-400 border border-blue-500/20 shadow-inner">
                <i class="fas fa-cube text-lg"></i>
            </div>
        </div>
        <div class="flex items-baseline gap-2 relative z-10">
            <span class="text-4xl font-extrabold text-white tracking-tight">{{ \App\Models\Service::count() }}</span>
        </div>
        <div class="mt-4 flex items-center text-sm text-blue-400 font-medium">
            <span>Manage portfolio offerings</span> <i class="fas fa-arrow-right ml-2 text-xs opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"></i>
        </div>
        <a href="{{ route('admin.services.index') }}" class="absolute inset-0 z-20"></a>
    </div>

    <!-- Stat Card 2 -->
    <div class="relative overflow-hidden bg-slate-900 border border-slate-800 shadow-xl shadow-black/20 rounded-2xl p-6 group hover:border-indigo-500/30 transition-all duration-300">
        <div class="absolute -right-6 -top-6 w-24 h-24 bg-indigo-500/10 rounded-full blur-2xl group-hover:bg-indigo-500/20 transition-all duration-500"></div>
        <div class="flex items-center justify-between mb-4 relative z-10">
            <h3 class="text-slate-400 font-medium text-sm tracking-wide uppercase">Total Clients</h3>
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500/20 to-indigo-600/10 flex items-center justify-center text-indigo-400 border border-indigo-500/20 shadow-inner">
                <i class="fas fa-users text-lg"></i>
            </div>
        </div>
        <div class="flex items-baseline gap-2 relative z-10">
            <span class="text-4xl font-extrabold text-white tracking-tight">{{ \App\Models\Client::count() }}</span>
        </div>
        <div class="mt-4 flex items-center text-sm text-indigo-400 font-medium">
            <span>View client directory</span> <i class="fas fa-arrow-right ml-2 text-xs opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-300"></i>
        </div>
        <a href="{{ route('admin.clients.index') }}" class="absolute inset-0 z-20"></a>
    </div>
</div>
@endsection
