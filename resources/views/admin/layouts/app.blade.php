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
            background-color: rgba(59, 130, 246, 0.15);
            color: #60a5fa;
            border-right: 3px solid #60a5fa;
            border-radius: 0 8px 8px 0;
            margin-right: 12px;
        }
    </style>
</head>
<body class="bg-slate-950 flex h-screen overflow-hidden text-slate-300 antialiased selection:bg-blue-600 selection:text-white">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 border-r border-slate-800 flex flex-col hidden md:flex shadow-2xl relative z-20">
        <div class="h-16 flex items-center px-6 border-b border-slate-800/60 bg-slate-900/50">
            <img src="{{ asset('images/logo.png') }}" alt="Binex Admin" class="h-8 max-w-[200px] object-contain">
        </div>
        
        <nav class="flex-1 overflow-y-auto py-6">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link flex items-center px-6 py-3 text-slate-400 {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home w-6 text-lg"></i>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
                <li class="pt-6 pb-2 px-6 text-xs font-bold text-slate-500 uppercase tracking-widest">Modules</li>
                <li>
                    <a href="{{ route('admin.services.index') }}" class="sidebar-link flex items-center px-6 py-3 text-slate-400 {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                        <i class="fas fa-cube w-6 text-lg"></i>
                        <span class="font-medium">Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.clients.index') }}" class="sidebar-link flex items-center px-6 py-3 text-slate-400 {{ request()->routeIs('admin.clients.*') ? 'active' : '' }}">
                        <i class="fas fa-users w-6 text-lg"></i>
                        <span class="font-medium">Clients</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.contact_details.edit') }}" class="sidebar-link flex items-center px-6 py-3 text-slate-400 {{ request()->routeIs('admin.contact_details.*') ? 'active' : '' }}">
                        <i class="fas fa-address-card w-6 text-lg"></i>
                        <span class="font-medium">Contact Details</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="p-4 border-t border-slate-800/60 bg-slate-900/30">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="flex items-center w-full px-4 py-3 text-rose-400 hover:text-rose-300 hover:bg-rose-500/10 rounded-xl transition-all duration-200">
                    <i class="fas fa-sign-out-alt w-6 text-lg"></i>
                    <span class="font-medium">Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col overflow-hidden relative">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.02] pointer-events-none z-0"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
        
        <!-- Header -->
        <header class="h-16 bg-slate-900/70 backdrop-blur-xl border-b border-slate-800/80 flex items-center justify-between px-8 z-10 shadow-sm">
            <!-- Mobile Menu Button -->
            <button class="md:hidden text-slate-400 hover:text-white transition-colors focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <div class="hidden md:block text-sm text-slate-500 font-medium">
                {{ \Carbon\Carbon::now()->format('l, F j, Y') }}
            </div>
            
            <div class="flex items-center gap-5">
                <button class="text-slate-400 hover:text-white transition-colors">
                    <i class="fas fa-bell"></i>
                </button>
                <div class="h-6 w-px bg-slate-700/50"></div>
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center text-white font-bold shadow-lg shadow-blue-500/30 ring-2 ring-slate-800">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                    <span class="font-medium text-sm text-slate-200 hidden sm:block">{{ auth()->user()->name ?? 'Admin' }}</span>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto p-6 md:p-8 lg:p-10 z-10">
            @if(session('success'))
                <div class="mb-8 p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center gap-3 text-emerald-400 shadow-lg shadow-emerald-500/5 backdrop-blur-sm animate-fade-in-down">
                    <i class="fas fa-check-circle text-emerald-400 text-xl"></i>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-8 p-4 rounded-xl bg-rose-500/10 border border-rose-500/20 flex items-center gap-3 text-rose-400 shadow-lg shadow-rose-500/5 backdrop-blur-sm animate-fade-in-down">
                    <i class="fas fa-exclamation-circle text-rose-400 text-xl"></i>
                    <p class="font-medium">{{ session('error') }}</p>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

</body>
</html>
