<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f5">
    <title>@yield('title', 'Campus Desk') · Campus Desk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="app-shell">
        <aside class="sidebar">
            <a class="brand" href="{{ route('dashboard') }}" aria-label="Campus Desk home">
                <span class="brand-mark">c<span>.</span></span>
                <span class="brand-name">campus<span>desk</span></span>
            </a>
            <p class="nav-label">WORKSPACE</p>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"><span class="nav-icon">⌂</span> Overview</a>
                <a href="{{ route('students.index') }}" class="nav-link {{ request()->routeIs('students.*') ? 'active' : '' }}"><span class="nav-icon">♙</span> Students</a>
                <a href="{{ route('courses.index') }}" class="nav-link {{ request()->routeIs('courses.*') ? 'active' : '' }}"><span class="nav-icon">▤</span> Courses</a>
            </nav>
            <div class="sidebar-bottom">
                <div class="workspace-card"><span class="workspace-icon">✦</span><div><strong>Training institute</strong><small>Workspace</small></div></div>
                <div class="profile"><span class="avatar">CD</span><span><strong>Campus Desk</strong><small>Administrator</small></span><span class="profile-more">···</span></div>
            </div>
        </aside>
        <main class="main-area">
            <header class="topbar">
                <div class="breadcrumb">Workspace <span>/</span> <strong>@yield('section', 'Overview')</strong></div>
                <div class="topbar-right"><span class="status-dot"></span><span>All changes saved</span><span class="topbar-divider"></span><span class="today">{{ now()->format('D, M j') }}</span></div>
            </header>
            <div class="page-content">
                @if (session('success'))
                    <div class="flash-success" role="status"><span class="flash-check">✓</span>{{ session('success') }}<button type="button" class="flash-close" aria-label="Dismiss message" onclick="this.parentElement.remove()">×</button></div>
                @endif
                @yield('content')
            </div>
            <footer class="footer"><span>Campus Desk</span><span>Made for better learning experiences <span class="footer-heart">♥</span></span></footer>
        </main>
    </div>
    @stack('scripts')
</body>
</html>
