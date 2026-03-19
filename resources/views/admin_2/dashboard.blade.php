@extends('admin_2.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Welcome to the Admin Dashboard</h1>
    <p class="text-gray-500 text-sm mt-1">Here is an overview of your application.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <!-- Stat Card 1 -->
    <div class="bg-gray-100 rounded-xl shadow-sm border border-gray-200 p-6 flex flex-col hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-500 font-medium text-sm">Total Services</h3>
            <div class="w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                <i class="fas fa-cubes"></i>
            </div>
        </div>
        <div class="flex items-baseline gap-2">
            <span class="text-3xl font-bold text-gray-800">{{ \App\Models\Service::count() }}</span>
        </div>
    </div>

    <!-- Stat Card 2 -->
    <div class="bg-gray-100 rounded-xl shadow-sm border border-gray-200 p-6 flex flex-col hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-500 font-medium text-sm">Total Clients</h3>
            <div class="w-10 h-10 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="flex items-baseline gap-2">
            <span class="text-3xl font-bold text-gray-800">{{ \App\Models\Client::count() }}</span>
        </div>
    </div>

    <!-- Stat Card 3 -->
    <div class="bg-gray-100 rounded-xl shadow-sm border border-gray-200 p-6 flex flex-col hover:shadow-md transition-shadow">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-gray-500 font-medium text-sm">New Messages</h3>
            <div class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-600">
                <i class="fas fa-envelope"></i>
            </div>
        </div>
        <div class="flex items-baseline gap-2">
            <span class="text-3xl font-bold text-gray-800">{{ \App\Models\ContactSubmission::count() }}</span>
        </div>
    </div>
</div>


@endsection
