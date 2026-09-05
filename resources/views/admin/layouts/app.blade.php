<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin') | Margareta Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    @stack('styles')
</head>

<body>

    <div class="admin-layout">

        <aside class="sidebar" id="sidebar">

            <a href="{{ route('home') }}" class="admin-logo">
                <span>M</span>argareta.
            </a>

            <p class="sidebar-label">
                ADMIN PANEL
            </p>

            <nav class="sidebar-nav">

                <a
                    href="{{ route('admin.projects.index') }}"
                    class="{{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-folder-open"></i>
                    Projects
                </a>

                <a
                    href="{{ route('admin.profile.edit') }}"
                    class="{{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-user"></i>
                    Profile
                </a>

                <a
                    href="{{ route('admin.resume.edit') }}"
                    class="{{ request()->routeIs('admin.resume.*') ? 'active' : '' }}">
                    <i class="fa-solid fa-file-pdf"></i>
                    CV
                </a>

                <a href="{{ route('home') }}" target="_blank">
                    <i class="fa-solid fa-globe"></i>
                    View Website
                </a>

            </nav>

            <div class="sidebar-bottom">

                <div class="admin-user">
                    <div class="admin-avatar">
                        <i class="fa-solid fa-user"></i>
                    </div>

                    <div>
                        <strong>{{ auth()->user()->name }}</strong>
                        <small>{{ auth()->user()->email }}</small>
                    </div>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button type="submit" class="logout-btn">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Logout
                    </button>
                </form>

            </div>

        </aside>

        <main class="admin-main">

            <header class="admin-topbar">
                <button id="sidebar-toggle" class="sidebar-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div>
                    <p class="topbar-label">Dashboard</p>
                    <h1>@yield('heading', 'Admin Panel')</h1>
                </div>
            </header>

            @if(session('success'))
            <div class="admin-alert success">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>
            @endif

            @if($errors->any())
            <div class="admin-alert error">
                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
            @endif

            @yield('content')

        </main>

    </div>

    <script src="{{ asset('assets/js/admin.js') }}"></script>

    @stack('scripts')

</body>

</html>