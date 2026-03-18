<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Binex Technology</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .sidebar-link { transition: all 0.3s ease; }
        .sidebar-link:hover, .sidebar-link.active {
            background-color: rgba(59, 130, 246, 0.1);
            color: #3b82f6;
            border-right: 3px solid #3b82f6;
        }
    </style>
</head>
<body class="bg-gray-900 flex h-screen overflow-hidden text-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 border-r border-gray-700 flex flex-col hidden md:flex">
        <div class="h-16 flex items-center px-6 border-b border-gray-700">
            <span class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
                Binex Admin
            </span>
        </div>
        
        <nav class="flex-1 overflow-y-auto py-4">
            <ul class="space-y-1">
                <li>
                    <a href="{{ route('admin_2.dashboard') }}" class="sidebar-link flex items-center px-6 py-3 text-gray-300 {{ request()->routeIs('admin_2.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home w-6"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
                <li class="pt-4 pb-2 px-6 text-xs font-semibold text-gray-400 uppercase tracking-wider">Modules</li>
                <li>
                    <a href="{{ route('admin_2.services.index') }}" class="sidebar-link flex items-center px-6 py-3 text-gray-300 {{ request()->routeIs('admin_2.services.*') ? 'active' : '' }}">
                        <i class="fas fa-cubes w-6"></i>
                        <span class="font-medium">Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin_2.clients.index') }}" class="sidebar-link flex items-center px-6 py-3 text-gray-300 {{ request()->routeIs('admin_2.clients.*') ? 'active' : '' }}">
                        <i class="fas fa-users w-6"></i>
                        <span class="font-medium">Clients</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin_2.contact_submissions.index') }}" class="sidebar-link flex items-center px-6 py-3 text-gray-300 {{ request()->routeIs('admin_2.contact_submissions.*') ? 'active' : '' }}">
                        <i class="fas fa-envelope w-6"></i>
                        <span class="font-medium">Contacts / Social Media</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="p-4 border-t border-gray-700">
            <form action="{{ route('admin_2.logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center w-full px-4 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                    <i class="fas fa-sign-out-alt w-6"></i>
                    <span class="font-medium">Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <header class="h-16 bg-gray-800 border-b border-gray-700 flex items-center justify-between px-6 z-10">
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-400 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="hidden md:block"></div> <!-- Spacer -->
            
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                    <span class="font-medium text-sm hidden sm:block">{{ auth()->user()->name ?? 'Admin' }}</span>
                </div>
                <div class="border-l border-gray-700 pl-4">
                    <form action="{{ route('admin_2.logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-red-600 transition-colors" title="Logout">
                            <i class="fas fa-sign-out-alt text-lg"></i>
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto p-6 bg-gray-900">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200 flex items-center gap-3 text-green-700 shadow-sm animate-fade-in-down">
                    <i class="fas fa-check-circle text-green-500 text-xl"></i>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-6 p-4 rounded-lg bg-red-50 border border-red-200 flex items-center gap-3 text-red-700 shadow-sm animate-fade-in-down">
                    <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
                    <p class="font-medium">{{ session('error') }}</p>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

</body>
</html>
